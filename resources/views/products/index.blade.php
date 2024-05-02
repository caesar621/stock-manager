<x-app-layout>
    <div class="flex justify-center max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
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
                    <tr>
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