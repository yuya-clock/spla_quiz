@extends('layouts.app')

@section('content')
    <div class="question__content">
        <div class="question__text">シャテイがながいブキはどっち？</div>
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $erorr)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="question__choices">
            @foreach ($weapons as $weapon)
                <div class="question__choice">
                    <div class="question__choice__text">
                        {{ $loop->iteration }}.
                        {{ $weapon->name }}
                    </div>
                    <img src="{{ Vite::image("$weapon->path.png") }}" alt="武器の画像"/>
                </div>
            @endforeach
        </div>

        <form class="question__form" action="{{ route('weapon.answer') }}" method="POST">
            @csrf
            <button class="question__button" type="submit" name="chosen_choice" value="{{ $weapons->first()->id }}">1. {{ $weapons->first()->name }}</button>
            <button class="question__button" type="submit" name="chosen_choice" value="{{ $weapons->last()->id }}">2. {{ $weapons->last()->name }}</button>
            <button class="question__button" type="submit" name="chosen_choice" value="same">3. どっちもおなじ</button>
            <input type="hidden" name="first_weapon_id" value="{{ $weapons->first()->id }}"/>
            <input type="hidden" name="second_weapon_id" value="{{ $weapons->last()->id }}"/>
        </form>
    </div>
@endsection