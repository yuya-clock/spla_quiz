<?php

namespace App\Services;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;

class WeaponRangeService
{
    private const NUMBER_OF_DISPLAY = 2;
    public readonly EloquentCollection $display_weapons;

    /**
     * ランダムな武器データを取得する
     *
     * @return EloquentCollection
     */
    public function getRandomWeapons(): EloquentCollection
    {
        return Weapon::all()->random(self::NUMBER_OF_DISPLAY);
        
        // 同じ射程だった場合のテスト用
        // return Weapon::all()->where('maximum_range', 2.1)->random(self::NUMBER_OF_DISPLAY);
    }

    /**
     * 選んだ答えが正解か判定
     *
     * @param Request $request
     * @return boolean
     */
    public function isChosenCorrectAnswer(Request $request): bool
    {
        return $this->getCorrectAnswer($request) === $request->chosen_choice;
    }

    /**
     * 正解を取得
     *
     * @param Request $request
     * @return string
     */
    private function getCorrectAnswer(Request $request)
    {
        $first_weapon = Weapon::findOrFail($request->first_weapon_id);
        $second_weapon = Weapon::findOrFail($request->second_weapon_id);

        if ($this->isSameMaximumRange($first_weapon, $second_weapon)) {
            return "same";
        };

        return (string)$this->getLongMaximumRangeWeapon($first_weapon, $second_weapon)->id;
    }
    
    /**
     * 武器が同じ長さか判定
     *
     * @param Weapon $first_weapon
     * @param Weapon $second_weapon
     * @return boolean
     */
    private function isSameMaximumRange(Weapon $first_weapon, Weapon $second_weapon): bool
    {
        return $first_weapon->maximum_range === $second_weapon->maximum_range ? true : false;
    }

    /**
     * 最長射程が長い武器を取得
     *
     * @param Weapon $first_weapon
     * @param Weapon $second_weapon
     * @return Weapon
     */
    private function getLongMaximumRangeWeapon(Weapon $first_weapon, Weapon $second_weapon): Weapon
    {
        return $first_weapon->maximum_range > $second_weapon->maximum_range ? $first_weapon : $second_weapon;
    }
}