<?php

require_once "vendor/autoload.php";

use \rogerio\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('11662090');

print_r($resultado);
