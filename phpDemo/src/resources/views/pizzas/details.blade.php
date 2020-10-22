@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Order for {{$pizza->name}}
        </div>
       
        <p class="type" style="font-size: x-large;">Type : {{$pizza->type}}</p>
        <p class="name" style="font-size: x-large;">Name : {{$pizza->name}}</p>
        @if($pizza->toppings != null)
            <p style="font-size:x-large;" class="toppings">Extra toppings:</p>
            <ul style="font-size:x-large;">
                @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
                @endforeach
            
            </ul>
        @endif
        <br>
        <form action= {{ route('complete-order',['id'=>$pizza->id]) }} method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-success">Complete Order</button>
        </form>
        <br>
        <a class="btn btn-primary" href={{ route('list-pizzas') }} class="back"><- Back to all pizzas</a>
    </div>
</div>
@endsection