<div class="flex flex-col items-center justify-center m-6">

    <h2>Fazer novo pedido</h2>
    <div class="flex flex-col items-center justify-center mx-16 mb-16 mt-8">
                        
        <div>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Ordem</label>
            <select name="order" class="">
                @foreach ($products as $product)
                    <option value="desc">{{ $product->$name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-name">
            Produto
            </label>
            <input>
        </div>

    </div>
</div>