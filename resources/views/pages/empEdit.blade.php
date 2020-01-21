@extends('layouts.base')

@section('content')
    <form action=" {{ route('emp.update',$emp -> id) }} " method="post">
        @csrf
        @method('POST')
        <label for="name">Nome</label>
    <input type="text" name="name" value="{{$emp -> name}}">
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" value="{{$emp -> lastname}}">
        <label for="birth_year">Tuo post</label>
        <input type="text" name="birth_year" value="{{$emp -> birth_year}}">
        <button type="submit">Modifica il tuo employee</button>    
    </form>
@endsection