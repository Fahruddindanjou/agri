<?php
function autoEmbed($ytLink)
{
    $source = str_replace('watch?v=' , 'embed/' , $ytLink);
    return $source;
}
