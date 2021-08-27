<?php

function routerOutlet()
{
    return _loadPageView();
}

function _loadPageView()
{
    $rotas = include('config/routes.php');

    return require_once(PAGES_PATH . '/' . $rotas[getCurrentPage()]);
}
