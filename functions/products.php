<?php
function getProductByParam($produtos)
{
    $productId = getProductHttpParamId();

    if (!$productId) {
        return;
    }

    foreach ($produtos as $produto) {
        if ($productId == $produto['id']) {
            return $produto;
        }
    }

    return null;
}

function getProductHttpParamId()
{
    if (isset($_GET['id']) || !empty($_GET['id'])) {
        return $_GET['id'];
    }

    return null;
}
