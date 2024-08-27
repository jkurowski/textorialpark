<?php

use Illuminate\Support\HtmlString;

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        $statuses = [
            1 => trans('website.available'),
            2 => trans('website.reserved'),
            3 => trans('website.sold'),
            4 => trans('website.rented')
        ];
        $status = $statuses[$number] ?? '';
        return new HtmlString('<span class="list-status list-status-'.$number.'">'.$status.'</span>');
    }
}