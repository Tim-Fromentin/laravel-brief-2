<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    body {
        color: #333333;
        padding: 50px;
        font-family: sans-serif;
    }
    nav ul {
        list-style: none;
        display: flex;
        margin-bottom: 50px;
        gap: 50px;
    }
    a {

        color: #333333;
    }
</style>
<body class="">
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
        </ul>
    </nav>
{{$slot}}
</body>
</html>
