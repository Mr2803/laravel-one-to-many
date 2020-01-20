@extends('layouts.base')

@section('employees')

<a href="{{url("/emps")}}"><h4>Employee : {{$emps -> count()}}</h4></a>
<ul>
    @foreach ($emps as $emp)
<li>{{$emp-> name}} {{$emp -> lastname}} : {{$emp -> tasks() -> count()}}</li>
    @endforeach


</ul>
@endsection

@section('tasks')
    <a href="{{url("/tasks")}}"><h4>Task : {{$tasks -> count()}}</h4></a>
<ul>
   @foreach ($tasks as $task)
    <li>[ID task {{$task -> id}}]{{$task -> name}}  : {{$task -> employee -> name }} [ID employee {{$task -> employee_id}}]</li>
    @endforeach
    </ul>
@endsection