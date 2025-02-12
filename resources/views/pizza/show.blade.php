


@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
  <p class="toppings">extra topings:</p>
  <ul>
    @foreach ($pizza->toppings as $topping)
    <li>{{$topping}}</li>
    @endforeach
  </ul>
<form action="/pizza/{{$pizza->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete order</button>

</div>
<a href="/pizza" class="back"><- Back to all pizzas</a>
@endsection

