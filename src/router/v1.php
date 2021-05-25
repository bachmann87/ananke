<?

$json = json_encode(array("user"=>"Rob", "id"=>2), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

header("Content-Type: application/json");
echo $json;