<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center h-screen border-4 border-red-400">
    <div class="flex border-4 border-red-400 sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="flex flex-col items-center">
            <a href="{{ route('products.menu') }}">
                <img src="" alt="Imagem" class="mx-auto h-56 w-auto">
                
            </a>
            <p>Controle</p>
        </div>

        <!-- <div>
            <a href="">
                <img src="" alt="">
                <p>Distribuição</p>
            </a>
        </div> -->
    </div>
</body>
</html>