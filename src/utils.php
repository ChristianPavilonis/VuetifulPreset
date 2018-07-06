<?php


function jsPath($path = '')
{
    return resource_path('javascript/'.$path);
}

function stubsPath($path = '')
{
    return __DIR__.'/stubs/'.$path;
}

function saasPath($path = '')
{
    return resource_path('saas/'.$path);
}