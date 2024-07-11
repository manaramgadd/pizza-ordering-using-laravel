
@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">

<h1>Create a new Pizza</h1>
<form action="/pizza" method="POST">
    @csrf 
    <label for="name">Your name:</label>
    <input type="text" is="name" name="name">
    <label for="type">Choose Type:</label>
    <select name="type" id="type">
        <option value="margherita">Margherita</option>
        <option value="veg supreme">Veg supreme</option>
        <option value="volcano">volcano</option>
        <option value="hawaiian">Hawaiian</option>

    </select>
    <label for="base">Choose Base:</label>
    <select name="base" id="base">
        <option value="cheesy crust">cheesy crust</option>
        <option value="garlic crust">garlic crust</option>
        <option value="thin & crispy">thin & crispy</option>
        <option value="thick">thick</option>

    </select>
    <fieldset>
        <label>Extra Toppings</label>
        <input type="checkbox" name='toppings[]'value="mushrooms">mushrooms<br />
        <input type="checkbox" name='toppings[]'value="peppers">peppers<br />
        <input type="checkbox" name='toppings[]'value="garlic">garlic<br />
    </fieldset>
    <input type="submit"value="Order Pizza">

</form>

    </div>

@endsection
