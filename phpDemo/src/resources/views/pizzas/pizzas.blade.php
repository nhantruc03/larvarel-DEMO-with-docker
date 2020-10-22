@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        
        <p class="mssg">{{session('msg')}}</p>

        @foreach($pizzas as $i=>$pizza)
          <p style="font-size:x-large;">
           {{$i+1}} - {{ $pizza->name }} - {{ $pizza->type}} -{{$pizza->base}} 
           
           <a class="btn btn-primary" style="margin-left: 30px;" href={{ route('review-pizza',['id'=>$pizza->id]) }}>Preview</a>
          </p>
        @endforeach
        <a class="btn btn-success" href={{ route('welcome') }}>Back to main page!</a>
    </div>
</div>
@endsection