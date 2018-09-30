@extends('layouts.index')

@section('final')
    <div class="h-75" style="background-color: #0c5460;margin-top: 7.5vh;">
        <center><span>
    <form action="{{ url('/submit') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="fname" value="{{ $info[0] }}">
        <input type="email" name="femail" value="{{ $info[1] }}">
        <input type="number" name="fcontact" value="{{ $info[2] }}">
        <input type="number" name="famount" value="{{ $info[3] }}">
        <input type="text" name="cat_id">
        <input type="submit" name="Make Payment">
    </form>
                </span></center>
    </div>
@endsection