@extends('layouts.app')

@section('content')
    {{-- <img src="{{ Vite::asset('resources/images/title.png') }}"> --}}
    {{-- <img src="{{ Vite::image('title.png') }}" alt="title"> --}}
    Splatoon
    <br/>
    クイズ！！
    <br/>
    <br/>

    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        クイズスタート
    </button>
@endsection