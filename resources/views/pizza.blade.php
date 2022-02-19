@extends('layouts.layout')

@section('content')
  <p>Pizza Page!</p>
  
  @if(isset($pizzas))
    @foreach($pizzas as $pizza)
      <p>{{ $loop->index }} -- {{ $pizza['type'] }} -- {{ $pizza['base'] }} -- {{ $pizza['price'] }} </p>
    @endforeach
  @endif

  @if(isset($id))
    <p>{{ $id }}</p>
  @endif

@endsection