<?php

namespace App\Services;

use App\Models\Weapon;

class WeaponService
{
    private $number_of_display_weapon = 2;

    public function getTwoRandomWeapons()
    {
        return Weapon::all()->random($this->number_of_display_weapon);
    }
}