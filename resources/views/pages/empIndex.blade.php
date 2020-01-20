@extends('layouts.base')



@section('content')
<div class="col-12">

    <h4>Employee : {{$emps -> count()}}</h4>
    
    <table>
    
        <tr>
            <td>[ID]</td>
            <td>[NOME]</td>
            <td>[RELAZIONE IN TAB TASKS]</td>
        </tr>
        @foreach ($emps as $emp)
            <tr>
            <td>{{$emp -> id}}</td>
            <td>{{$emp -> name }} {{$emp -> lastname }}</td>
            <td>{{$emp -> tasks() -> count()}}</td>
            </tr>
        @endforeach
    </table>
    @endsection
</div>

{{-- <ul>

    <li>
        with task : 
        <ul>
            @foreach ($emps as $emp)
                
            @if ($emp -> tasks() -> count() > 0)
            {{$emps -> count()}}
                <li>[ID employee {{$emp -> id}}] : {{$emp -> name}} {{$emp -> lastname}} : {{$emp -> tasks() -> count()}}</li>
                <ul>

                    @foreach ($emp -> tasks as $task)
                    <li>[ID task {{$task -> id}}] : {{$task -> name}}</li>
                    @endforeach
                </ul>
            @endif
            @endforeach
        </ul>
    </li>
</ul>

<ul>

    <li>

        Without task : 
        <ul>
            @foreach ($emps as $emp)
            @if ($emp -> tasks() -> count() < 1)
                <li>{{$emp -> name}} {{$emp -> lastname}} </li>
                <ul>

                    @foreach ($emp -> tasks as $task)
                    <li>{{$task -> name}}</li>
                    @endforeach
                </ul>
            @endif
            @endforeach
        </ul>
    </li>
</ul> --}}

{{-- <ul>
    @foreach ($emps as $emp)
<li>{{$emp-> name}} {{$emp -> lastname}} : {{$emp -> tasks() -> count()}}</li>
    @endforeach


</ul> --}}
