<?php

namespace App\Services;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

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
    }

    /**
     * 選んだ武器が長い武器か判定
     *
     * @param integer $chosen_weapon_id
     * @param integer $question_first_weapon_id
     * @param integer $question_last_weapon_id
     * @return boolean
     */
    public function isChoseLongWeapon(int $chosen_weapon_id, int $question_first_weapon_id, int $question_last_weapon_id): bool
    {
        $correct_weapon = $this->getLongWeaponByTwo($question_first_weapon_id, $question_last_weapon_id);
        return $correct_weapon->id === $chosen_weapon_id;
    }

    /**
     * 2つの武器のうち最大射程が長い武器を取得
     *
     * @param integer $first_weapon_id
     * @param integer $second_weapon_id
     * @return Weapon
     */
    private function getLongWeaponByTwo(int $first_weapon_id, int $second_weapon_id): Weapon
    {
        $first_weapon = Weapon::findOrFail($first_weapon_id);
        $second_weapon = Weapon::findOrFail($second_weapon_id);

        return $first_weapon->maximum_range > $second_weapon->maximum_range ? $first_weapon : $second_weapon;
    }
}