<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// fs_route
if (! function_exists('fs_route')) {
    function fs_route(?string $url = null, string|bool|null $locale = null): string
    {
        return LaravelLocalization::localizeUrl($url, $locale);
    }
}
