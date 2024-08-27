<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <h1>THIS IS INDEX</h1>
    <br>
    <a href="{{route('gallery')}}">

<button > Gallery</button>
    </a>
    <br><br>
    <a href="{{route('index')}}">

<button>INDEX</button>
    </a>
    <br><br>
    <a href="{{route('services')}}">

<button>SERVICES</button>
    </a>


</body>
</html>