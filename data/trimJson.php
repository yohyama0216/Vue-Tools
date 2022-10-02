<?php
$arr = json_decode(file_get_contents($argv[1]), true);
$result = [];

foreach($arr as $item){    
    $result[] = [
        "name" => $item["key"],
        "elixir" => $item["elixir"],
        "id" => $item["id"],
        "jpName" => $item["_lang"]["name"]["jp"],
    ];
}
//$content = mb_convert_encoding($result, "UTF-8");
//print_r($content);
file_put_contents("trimmed.json", json_encode($result, JSON_UNESCAPED_UNICODE));