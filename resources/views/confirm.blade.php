@extends('layouts.app')
@section('title', 'البيانات الشخصية')
@section('content')

    <input type="hidden" name="_token" value="'{{ csrf_token() }}'">
    <form method = 'post' action = "/code-check">
        @csrf
        <input placeholder = 'رمز التأكد' type = 'text' name = 'code'>
        <input type = 'submit'>
    </form>
    <div>
    @if(isset($err))
        {{ $err }}
    @endif
    </div>
@endsection
