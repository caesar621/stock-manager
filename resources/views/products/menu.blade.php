<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex  h-screen border-4 border-red-400">
    <!-- <div class="flex border-4 border-red-400 sm:mx-auto sm:w-full sm:max-w-sm"> -->
        <!-- <div class="flex flex-col items-center">
            <a href="{{ route('products.menu') }}">
                <img src="{{ asset('resources/css/imgs/boxes1.jpg') }}" alt="Imagem" class="mx-auto h-56 w-auto">
                
            </a>
            <p>Controle</p>
        </div> -->

        <div class="flex flex-wrap">
        @foreach ($products as $product)
                    <div class="m-16 px-6 py-4 bg-yellow-400 rounded-full h-44 w-44 flex flex-col justify-center items-center">
                        <h2 class="text-5xl">{{ $product->qt_stock }}</h2>
                        <p class="text-sm font-light">{{ $product->batch }}</p>
                        <p class="font-bold">{{ $product->name }}</p>
                        
                        
                    </div>
        @endforeach
        </div>
    <!-- </div> -->
</body>
</html>