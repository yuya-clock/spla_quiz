@extends('layouts.app')

@section('content')
    スプラトゥーンクイズ！
    <br/>
    武器の射程が長いのはどっちだー！？
    <br/>
    <br/>
    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        クイズスタート
    </button>
@endsection