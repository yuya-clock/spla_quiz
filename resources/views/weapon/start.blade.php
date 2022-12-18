@extends('layouts.app')

@section('content')
    スプラトゥーンクイズへようこそ！
    <br/>
    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        クイズスタート
    </button>
@endsection