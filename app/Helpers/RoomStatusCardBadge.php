<?php

if (! function_exists('roomStatusCardBadge')) {
    function roomStatusCardBadge(int $number)
    {
        switch ($number) {
            case '1':
                return '<p class="small text-primary text-uppercase ">Do wynajęcia</p>';
            case '2':
                return '<p class="small text-warning text-uppercase ">Wynajęte</p>';
            case '3':
                return '<p class="small text-warning text-uppercase ">Rezerwacja</p>';
        }
    }
}