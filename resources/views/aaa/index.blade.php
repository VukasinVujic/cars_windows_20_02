@extends('layouts.master')



@section('title')

INDEX BLADE
    
@endsection


@section('content')


@foreach ($cars as $car)

<li><a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdkuce_20_02_cars/cars_20_02/public/cars/' . $car->id }}"> {{ $car->title }} </a></li>
    
@endforeach
<br>
<a href="http://localhost/VIVIFY/napredni/Laravel/radOdkuce_20_02_cars/cars_20_02/public/">Home</a>


    
@endsection


