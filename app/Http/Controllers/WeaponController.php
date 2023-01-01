<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeaponRangePostRequest;
use App\Models\Weapon;
use App\Services\WeaponRangeService;

class WeaponController extends Controller
{
    private $weapon_range_service;

    public function __construct(WeaponRangeService $weapon_range_service)
    {
        $this->weapon_range_service = $weapon_range_service;
    }

    public function start()
    {
        return view('weapon.start');
    }

    public function question()
    {
        return view('weapon.question', ['weapons' => $this->weapon_range_service->getRandomWeapons()]);
    }

    public function answer(WeaponRangePostRequest $request)
    {
        $is_correct = $this->weapon_range_service->isChosenCorrectAnswer($request);
        return view('weapon.answer', [
            'first_weapon' => Weapon::findOrFail($request->first_weapon_id),
            'second_weapon' => Weapon::findOrFail($request->second_weapon_id),
            'is_correct' => $is_correct,
        ]);
    }
}
