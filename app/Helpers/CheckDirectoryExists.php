<?php

use Illuminate\Support\Facades\File;

if (!function_exists('directory_exists')) {
    /**
     * Check if a folder exists.
     *
     * @param string $path
     * @return bool
     */
    function directory_exists($path) {
        return File::exists(public_path($path));
    }
}