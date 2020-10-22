@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
                Create a New Pizza
        </div>
        @if($errors->has('name'))
                <strong style="color:red; font-size:2rem;" class="help">{{$errors->first('name')}}</strong>
            @endif
        <form class="form-inline" action={{ route('create-order-POST') }} method="POST">
        @csrf
            <label class="m-2" for="name">Your name:</label>
            <input class="m-2 form-control" type="text" id="name" name="name">
      
            <label class="m-2" for="type">Choose pizza type:</label>
            <select class="m-2 form-control" name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

            <label class="m-2" for="base">Choose base type:</label>
            <select class="m-2 form-control" name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <br>
            <br>
            <fieldset>
                <label>Extra toppings:</label>
                <div class="form-inline">
                    
                    <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
                    <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
                    <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
                    <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
                </div>
            </fieldset>
            <input type="submit" class="btn btn-success" value="Order Pizza">
        </form>
    </div>
</div>


@endsection