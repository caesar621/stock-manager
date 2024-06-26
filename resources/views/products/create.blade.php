<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 flex">
    
        <form class="w-full max-w-lg" method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">    
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-name">
                        Produto
                    </label>
                    <input 
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="text"
                        placeholder="Óleo"
                        id="grid-product-name"
                        name="name"
                        value= "{{ old('name') }}"
                    >
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-date">
                        Recebimento
                    </label>
                    <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="date"
                    id="grid-product-date"
                    name="arr_date"
                    value="{{ old('arr_date') }}">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-batch">
                      Lote
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-product-batch"
                        type="text"
                        placeholder="LTN4567890"
                        name="batch"
                        value="{{ old('batch') }}">
                  </div>

                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="qt-product-stock">
                        Quantidade
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="text"
                        id="qt-product-stock"
                        name="qt_stock"
                        value="{{ old('qt_stock') }}">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">    
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-fabrication">
                        Fabricação
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="month"
                        id="grid-product-fabrication"
                        name="fab_date"
                        value="{{ old('fab_date') }}">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-date">
                        Validade
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="month"
                        id="grid-product-date"
                        name="exp_date"
                        value="{{ old('exp_date') }}">
                </div>
            </div>

            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Adicionar') }}</x-primary-button>
            
        </form>
        
    </div>
</x-app-layout>