@extends('layouts.app')

@section('content')
    最長射程が長い武器は？
    <br/>
    <br/>
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $erorr)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    <br/>
    @endif
    @foreach ($weapons as $weapon)
        {{ $loop->iteration }}つ目の武器
        <br/>
        名前：{{ $weapon->name }}
        （画面から消す→射程:{{ $weapon->rifle_range }}、最大射程:{{ $weapon->maximum_range }}、id:{{ $weapon->id }}）
        <br/>
        <form action="{{ route('weapon.answer') }}" method="POST">
            @csrf
            <button type="submit" name="chosen_weapon_id" value="{{ $weapon->id }}">これ</button>
            <input type="hidden" name="question_first_weapon_id" value="{{ $weapons->first()->id }}"/>
            <input type="hidden" name="question_second_weapon_id" value="{{ $weapons->last()->id }}"/>
        </form>
        <br/>
    @endforeach

    <br/>
    <button onclick="window.location.href='{{ route('weapon.start') }}'">
        トップへ
    </button>
@endsection