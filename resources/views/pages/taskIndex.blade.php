@extends('layouts.base')

@section("content")

<h4>Task : {{$tasks -> count()}}</h4>

   @foreach ($tasks as $task)
<li>[ID task {{$task -> id}}]{{$task -> name}}  : {{$task -> employee -> name }} [ID employee {{$task -> employee_id}}]</li>
    @endforeach

@endsection