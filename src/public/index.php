<?
require '../vendor/autoload.php';

$app = new Ananke\Components\Core\App($_SERVER['REQUEST_URI']);

var_dump($app);