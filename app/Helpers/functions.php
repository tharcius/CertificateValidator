<?php

use Illuminate\Support\Str;

if (! function_exists('certificateCode')) {
    function certificateCode(): string
    {
        return Str::password(10, symbols: false);
    }
}
