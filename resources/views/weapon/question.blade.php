@extends('layouts.app')

@section('content')
    とおくまで、トばせるブキはどっち？
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
        {{ $loop->iteration }}.
        {{ $weapon->name }}
        {{-- （画面から消す→id:{{ $weapon->id }}、射程:{{ $weapon->rifle_range }}、最長射程:{{ $weapon->maximum_range }}） --}}
        <br/>
        <br/>
        @endforeach
        
        
    <form action="{{ route('weapon.answer') }}" method="POST">
        @csrf
        <button type="submit" name="chosen_choice" value="{{ $weapons->first()->id }}">{{ $weapons->first()->name }}</button>
        <button type="submit" name="chosen_choice" value="{{ $weapons->last()->id }}">{{ $weapons->last()->name }}</button>
        <button type="submit" name="chosen_choice" value="same">おなじ</button></button>
        <input type="hidden" name="first_weapon_id" value="{{ $weapons->first()->id }}"/>
        <input type="hidden" name="second_weapon_id" value="{{ $weapons->last()->id }}"/>
    </form>
    <br/>

    <br/>
    <button onclick="window.location.href='{{ route('weapon.start') }}'">
        トップへ
    </button>
@endsection