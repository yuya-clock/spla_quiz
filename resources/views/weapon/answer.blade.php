@extends('layouts.app')

@section('content')
    <div class="answer__content">
        <div class="answer__text">
            @if ($is_correct === true)
                ナイス！<br/>キミ、イカしてるね
            @else
                ざんねん！<br/>まだイかしてないね…
            @endif
        </div>

        <div class="answer__choices">
            <div class="answer__choice">
                1. {{ $first_weapon->name }}<br/>→ {{ $first_weapon->maximum_range }}<br/>
                <img src="{{ Vite::image("$first_weapon->path.png") }}"/>
            </div>
            <div class="answer__choice">
                2. {{ $second_weapon->name  }}<br/>→ {{ $second_weapon->maximum_range }}<br/>
                <img src="{{ Vite::image("$second_weapon->path.png") }}"/>
            </div>
        </div>

        <div class="answer__form">
            <button class="answer__button" onclick="window.location.href='{{ route('weapon.question') }}'">
                つぎのクイズ
            </button>
            <button  class="answer__button" onclick="window.location.href='{{ route('weapon.start') }}'">
                トップ
            </button>
        </div>
    </div>
@endsection