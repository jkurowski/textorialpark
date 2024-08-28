<?php

if (! function_exists('roomStatus')) {
    function roomStatus(int $number)
    {
        switch ($number) {
            case '1':
                return trans('website.available');
            case '2':
                return trans('website.reserved');
            case '3':
                return trans('website.sold');
            case '4':
                return trans('website.rented');
        }
    }
}