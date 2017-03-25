<?php

/**
 * 主域名获取
 * @param $url
 * @return string
 */
function get_host_domain($url)
{
    $data = parse_url($url);
    $data = $data['host'];
    $data = explode('.', $data);
    $secondary = array('com', 'net', 'org', 'co', 'edu', 'gov', 'mil');
    if(in_array($data[count($data)-2], $secondary))
    {
        $data = $data[count($data) - 3] . '.' . $data[count($data) - 2] . '.' . $data[count($data) - 1];
    }
    else
    {
        $data = $data[count($data) - 2] . '.' . $data[count($data) - 1];
    }
    return $data;
}