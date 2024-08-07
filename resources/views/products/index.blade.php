<x-app-layout>
    <div class="flex flex-col items-center max-w-5xl mx-auto p-4 sm:p-6 lg:p-8 border border-red-800">
        <div class="border border-red-800 w-full">
            <form action="{{ route('products.filter') }}" method="GET" class="grid justify-items-center grid-cols-3">
                <div>
                    <legend>Nome do Item</legend>
                    <input type="text" name="name" value="{{ Request::input('name') }}" placeholder="Nome do item">
                </div>
                
                <div >
                    <legend>Data de chegada</legend>
                    <fieldset class="">
                        <input type="month" name="arr_start_date" value="{{ Request::input('arr_start_date') }}">
                        <input type="month" name="arr_end_date" value="{{ Request::input('arr_end_date') }}">
                    </fieldset>
                </div>

                <div>
                    <legend>Data de Fabricação</legend>
                    <fieldset>
                        <input type="month" name="fab_start_date" placeholder="Data Inicial" value="{{ Request::input('arrfab_start_date') }}">
                        <input type="month" name="fab_end_date" placeholder="Data Final" value="{{ Request::input('fab_end_date') }}">
                    </fieldset>  
                </div>

                <div>
                    <legend>Data de Validade</legend>
                    <fieldset>
                        <input type="month" name="exp_start_date" placeholder="Data Inicial" value="{{ Request::input('exp_start_date') }}">
                        <input type="month" name="exp_end_date" placeholder="Data Final" value="{{ Request::input('exp_end_date') }}">
                    </fieldset> 
                </div>

                <div>
                    <legend>Ordem</legend>
                    <select name="order" class="">
                        <option value="asc" {{ Request::input('order') == 'asc' ? 'selected' : '' }}>Crescente</option>
                        <option value="desc" {{ Request::input('order') == 'desc' ? 'selected' : '' }}>Decrescente</option>
                    </select>
                </div>

                <div class="flex align-items-center gap-2">
                    <button class="border border-red-800 m-auto">
                        <input class="" type="submit">
                    </button>

                    
                    <button type="button" class="border border-red-800 m-auto">
                    <a href="{{ url()->current() }}">Resetar</a>
                    </button>
                </div>
                

            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="px-6 py-4">Nome</th>
                    <th class="px-6 py-4">Lote</th>
                    <th class="px-6 py-4">Data</th>
                    <th class="px-6 py-4">Fabricação</th>
                    <th class="px-6 py-4">Validade</th>
                    <th class="px-6 py-4">Quantidade</th>
                    <th class="px-6 py-4">Total saída</th>
                    <th class="px-6 py-4">Devolvido estoq.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td class="px-6 py-4">{{ $product->name }}</td>
                        <td class="px-6 py-4">{{ $product->batch }}</td>
                        <td class="px-6 py-4">{{ $product->arr_date }}</td>
                        <td class="px-6 py-4">{{ $product->fab_date }}</td>
                        <td class="px-6 py-4">{{ $product->exp_date }}</td>
                        <td class="px-6 py-4">{{ $product->qt_stock }}</td>
                        <!-- <td>$product->output</td>
                        <td>$product->returned</td> -->
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</x-app-layout>