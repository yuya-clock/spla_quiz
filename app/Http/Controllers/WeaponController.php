<?php

namespace App\Http\Controllers;

use App\Services\WeaponService;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    private $weapon_service;

    public function __construct(WeaponService $weapon_service)
    {
        $this->weapon_service = $weapon_service;
    }

    public function start()
    {
        return view('weapon.start');
    }

    public function question()
    {
        return view('weapon.question', [
            'two_weapons' => $this->weapon_service->getTwoRandomWeapons()
        ]);
    }

    public function answer()
    {
        return view('weapon.answer');
    }
}
