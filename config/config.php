<?php

/*|--------------------------------------------------------------------------

| system settings

|--------------------------------------------------------------------------*/


define("PROJECT_PATH", dirname($_SERVER["PHP_SELF"]));

define("PAGES_PATH", "pages");

/*|--------------------------------------------------------------------------

| Custom settings

|--------------------------------------------------------------------------*/

define("TITULO_PROJETO", "Everton de Paula - Programação Web I");

define("DESCRICAO_PROJETO", "");

define("URL_SITE", "http://localhost");

define("BASE_URL", URL_SITE.PROJECT_PATH);

define("PATH_CSS", BASE_URL . "/assets/css");

define("PATH_JS", BASE_URL . "/assets/js");

define("PATH_IMG", BASE_URL . "/assets/img");

define("ICONES", BASE_URL . "/assets/img/icons");
