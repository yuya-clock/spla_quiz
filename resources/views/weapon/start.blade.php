@extends('layouts.app')

@section('content')
    スプラトゥーンクイズ！
    <br/>
    射程が長い武器はどっち！？
    <br/>
    <br/>
    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        クイズスタート
    </button>
@endsection