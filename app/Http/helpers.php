<?php
function makeDocTitle($value)
{
    $regex = '#<h1>(.*?)</h1>#';
    preg_match($regex, $value, $matches);
    return $matches[1];
}