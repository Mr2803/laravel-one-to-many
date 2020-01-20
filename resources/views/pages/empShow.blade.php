  
@extends('layouts.BASE')

@section('content')
<div class="col-12">

<h6>Nome Employee:</h6>
</div>
    <div class="col-12">

       <p> [ID {{$emp -> id}}] {{ $emp -> name }} {{ $emp -> lastname }} }</p>
    </div>

<div class="col-12">
    <h6> Nome Task Associati : </h6>
</div>
<ul>
  @if($emp -> tasks() -> count() > 0)
    
    @foreach ($emp -> tasks as $task)
      <li>[ID {{$task -> id}}]{{ $task -> name }}</li>
    @endforeach
  @endif
</ul>
@endsection