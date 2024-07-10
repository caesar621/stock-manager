<x-app-layout>
    @livewire('wire-elements-modal')

        <div class="flex flex-wrap">
        @foreach ($products as $product)
                    <div class="m-16 px-6 py-4 bg-yellow-400 rounded-full h-44 w-44 flex flex-col justify-center items-center">
                        <h2 class="text-5xl">{{ $product->qt_stock }}</h2>
                        <p class="text-sm font-light">{{ $product->batch }}</p>
                        <p class="font-bold">{{ $product->name }}</p>
                    </div>
        @endforeach
        </div>

        <div class="flex items-end justify-center border border-red-600">
            <div class="border border-red-600">
                <button onclick="Livewire.dispatch('openModal', { component: 'request-item' } )">Pedir item</button>
            </div>
        </div>
        
</x-app-layout>