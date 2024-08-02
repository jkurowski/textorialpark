<?php

if (! function_exists('roomStatus')) {
    function roomStatus(int $number)
    {
        switch ($number) {
            case '1':
                return 'Do wynajęcia';
            case '2':
                return 'Wynajęte';
            case '3':
                return 'Rezerwacja';
        }
    }
}
