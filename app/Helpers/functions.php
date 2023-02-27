<?php

use Illuminate\Support\Str;

if (! function_exists('certificateCode')) {
    /**
     * Return a random string with 10 chars using letters and numbers
     */
    function certificateCode(): string
    {
        return Str::password(10, symbols: false);
    }
}
