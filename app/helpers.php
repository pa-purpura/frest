<?php

function getCurrentUrlWithLocale(string $locale){

    $segments = request()->segments();
    $segments[0] = $locale;
    // dd(url(implode('/',$segments)));


    return (url(implode('/',$segments)));
}