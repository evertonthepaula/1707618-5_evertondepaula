<?php

function currency($value)
{
    return 'R$' . number_format($value, 2, ",", ".");
}
