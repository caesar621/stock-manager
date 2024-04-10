<x-app-layout>
    {{ Form::open(array('url' => 'foo/bar'))  }}
        echo Form::open(array('route' => 'Products.store'))

        echo Form::model($product, array('route' => array('product.update', $product-id)))


    {{ Form::close()  }}
</x-app-layout>