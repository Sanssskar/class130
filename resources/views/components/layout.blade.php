<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .container {
            width: 86%;
            margin: auto;
        }

        :root{
            --primary : #F85604;
        }
        button{
            cursor: pointer;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <x-navbar />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
