<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <table>
            <tr>
                <th>Nome</th>
                <th>Lote</th>
                <th>Data</th>
                <th>Fabricação</th>
                <th>Validade</th>
                <th>Quantidade</th>
                <th>Total saída</th>
                <th>Devolvido estoq.</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>$product->name</td>
                    <td>$product->batch</td>
                    <td>$product->date</td>
                    <td>$product->fabrication</td>
                    <td>$product->expiration</td>
                    <td>$product->quantity</td>
                    <td>$product->output</td>
                    <td>$product->returned</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>