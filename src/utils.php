<?php


function jsPath($path = '')
{
    return resource_path('js/'.$path);
}

function stubsPath($path = '')
{
    return __DIR__.'/stubs/'.$path;
}

function sassPath($path = '')
{
    return resource_path('sass/'.$path);
}