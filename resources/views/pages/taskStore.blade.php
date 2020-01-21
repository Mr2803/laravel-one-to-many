@extends('layouts.base')

@section('content')
    <form action=" {{ route('task.store') }} " method="post">
        @csrf
        @method('POST')
        <label for="employee_id">ID dell' employee</label>
        <input type="text" value="" name="employee_id">
        <label for="name">Nome</label>
        <input type="text" value="" name="name">
        <label for="description">Descrizione</label>
        <input type="text" value="" name="description">
        <label for="start_date">start_date</label>
        <input type="text" value="{{ date('Y-m-d H:i:s') }}" name="start_date">
        <button type="submit">Crea il tuo task per l' employee</button>    
    </form>
@endsection