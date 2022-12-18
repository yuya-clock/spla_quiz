@extends('layouts.app')

@section('content')
    @foreach ($two_weapons as $weapon)
        {{ $loop->iteration }}つ目の武器の情報
        <br/>
        名前：{{ $weapon->name }}、射程：{{ $weapon->rifle_range }}、最大射程：{{ $weapon->maximum_range }}
        <br/>
        <br/>
    @endforeach
    <button onclick="window.location.href='{{ route('weapon.answer') }}'">
        答え
    </button>
@endsection