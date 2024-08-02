<?php

use Illuminate\Support\Str;

if (! function_exists('floorLevel')) {
    function floorLevel(int $number, bool $slug): string
    {
        $floorLevels = [
            0 => 'Parter',
            1 => '1 piętro',
            2 => '2 piętro',
            3 => '3 piętro',
            4 => '4 piętro',
            5 => '5 piętro',
            6 => '6 piętro',
            7 => '7 piętro',
            8 => '8 piętro',
        ];

        if(!$slug){
            return $floorLevels[$number] ?? '';
        } else {
            return Str::slug($floorLevels[$number] ?? '');
        }
    }
}