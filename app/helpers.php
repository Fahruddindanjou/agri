<?php
function autoEmbed($ytLink)
{
    $source = str_replace('watch?v=' , 'embed/' , $ytLink);
    return $source;
}

function rupiah($num)
{
    return 'Rp. ' . number_format($num, 0, ',', '.');
}
