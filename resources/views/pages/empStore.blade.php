@extends('layouts.base')

@section('content')
    <form action=" {{ route('emp.store') }} " method="post">
        @csrf
        @method('POST')
        <label for="name">Nome</label>
        <input type="text" value="" name="name">
        <label for="lastname">Cognome</label>
        <input type="text" value="" name="lastname">
        <label for="birth_year">Tuo post</label>
        <input type="text" value="" name="birth_year">
        <button type="submit">Crea il tuo employee</button>    
    </form>
@endsection