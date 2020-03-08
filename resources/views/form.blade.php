@extends('layouts.app')

@section('content')
    <form action="/form" method="POST">
        {{ csrf_field() }}
        <textarea name="test" id="" cols="30" rows="10"></textarea>
        <button type="submit">submit</button>
    </form>
@endsection
