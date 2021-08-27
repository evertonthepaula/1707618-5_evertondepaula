<?php
ini_set('display_errors', 1);

session_start();

// carregar as configurações do projeto
require_once('./config/config.php');

// carregar o gerenciador de rotas do projeto
require_once('./functions/main.php');

// Carregar o template principal do projeto que
require_once('./pages/main.php');
