<?php
function findProductInArray($productsArray, $key, $findBy)
{
    if (!$findBy) {
        return null;
    }

    foreach ($productsArray as $produto) {
        if ($produto[$key] == $findBy) {
            return $produto;
        }
    }

    return null;
}
