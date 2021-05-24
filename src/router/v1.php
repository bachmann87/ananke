<?

$json = json_encode($_SERVER, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

header("Content-Type: application/json");
echo $json;