@extends('layouts.app')

@section('content')
    結果
    <br/>
    <br/>
    @if ($is_correct === true)
        正解です！<br/>
    @else
        不正解です！<br/>
    @endif
    <br/>

    1つ目の武器<br/>
    武器の名前：{{ $question_first_weapon->name }}<br/>
    武器の最長射程：{{ $question_first_weapon->maximum_range }}<br/>
    <br/>
    2つ目の武器<br/>
    武器の名前：{{ $question_second_weapon->name }}<br/>
    武器の最長射程：{{ $question_second_weapon->maximum_range }}<br/>
    <br/>
    <br/>

    <button onclick="window.location.href='{{ route('weapon.question') }}'">
        次のクイズ！
    </button>
    <button onclick="window.location.href='{{ route('weapon.start') }}'">
        トップへ
    </button>
@endsection