<?php

function get($resource, array $params = array()){
    $apiUrl = 'http://localhost:8888/wordpress/wp-json';
    $json = file_get_contents($apiUrl.$resource.'?'.http_build_query($params));
    $result = json_decode($json);
    return $result;
}