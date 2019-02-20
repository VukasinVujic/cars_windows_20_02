<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($cars as $car)

    <li><a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdkuce_20_02_cars/cars_20_02/public/cars/' . $car->id }}"> {{ $car->title }} </a></li>
        
    @endforeach
    <br>
    <a href="http://localhost/VIVIFY/napredni/Laravel/radOdkuce_20_02_cars/cars_20_02/public/">Home</a>
</body>
</html>