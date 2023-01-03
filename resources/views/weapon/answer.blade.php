@extends('layouts.app')

@section('content')
    @if ($is_correct === true)
        ナイス！ キミ、イカしてるね<br/>
    @else
        まちがい！ まだまだ、イかしてないね…<br/>
    @endif
    <br/>

    1. {{ $first_weapon->name }} → {{ $first_weapon->maximum_range }}<br/>
    <br/>
    2. {{ $second_weapon->name  }} → {{ $second_weapon->maximum_range }}<br/>
    <br/>
    <br/>

    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        つぎのクイズ
    </button>
    <button onclick="window.location.href='{{ route('weapon.start') }}'">
        トップ
    </button>
@endsection