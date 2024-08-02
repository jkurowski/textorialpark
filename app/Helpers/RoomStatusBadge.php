<?php

use Illuminate\Support\HtmlString;

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        $statuses = [
            1 => trans('cms.available'),
            2 => trans('cms.reserved'),
            3 => trans('cms.sold'),
            4 => trans('cms.rented')
        ];
        $status = $statuses[$number] ?? '';
        return new HtmlString('<span class="list-status list-status-'.$number.'">'.$status.'</span>');
    }
}