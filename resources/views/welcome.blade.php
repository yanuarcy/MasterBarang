<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>masterBarang - UTS</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <div class="container text-center my-5">
        <h1>Based Project UTS Laravel</h1>
        <img src="{{ Vite::asset('resources/images/laravel.png') }}" alt="">
        <div class="Button my-3">
            <a href="{{ route('Home') }}" class="btn btn-dark">Home</a>
        </div>
    </div>


    @vite('resources/js.app.js')
</body>
</html>
