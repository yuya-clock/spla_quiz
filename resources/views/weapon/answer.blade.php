@extends('layouts.app')

@section('content')
    答えの情報
    <br/>
    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        次のクイズ！
    </button>
    <button onclick="window.location.href='{{ route('weapon.start') }}'">
        トップへ
    </button>
@endsection