@extends('layouts.app')

@section('content')
    <div class="title__content">
        {{-- <img src="{{ Vite::asset('resources/images/title.png') }}"> --}}
        <div class="title__text">Splatoon<br/>クイズ！</div>
    
        <button class="title__button" onclick="window.location.href='{{ route('weapon.question') }}'">
            クイズスタート
        </button>
    </div>
@endsection