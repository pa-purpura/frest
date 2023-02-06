<?php

function getCurrentUrlWithLocale(string $locale){

    $segments = request()->segments();
    $segments[0] = $locale;
    // dd($segments);

    // return 
    return (url(implode('/',$segments)));
}