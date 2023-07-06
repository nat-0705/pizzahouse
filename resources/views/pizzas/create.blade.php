@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose your Pizza type:</label>
        <select name="type" id="type">
            <option value="Margherita">Margherita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="Volocano">Volcano</option>
        </select>
        <label for="base">Choose your Base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin crust">Thin Crust</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="">Extra Toppings:</label><br/>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">olives<br/>

        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection