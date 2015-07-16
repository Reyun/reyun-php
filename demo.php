<?php
$url = "http://log.reyun.com/receive/rest/install"; 
$data = <<<crifan
{
    "appid": "replacewithyourappid",
    "when": "2015-04-13 00:02:33",
    "who": "unknown",
    "what": "install",
    "where": "install",
    "context": {
        "channelid": "sgzs_qq",
        "clickday": "1",
        "deviceid": "865786020556591",
        "installday": "2",
        "ip": "127.0.0.1",
        "normalclick": "30",
        "normalinstall": "30",
        "serverid": "11",
        "tz": "+8"
    }
}
crifan;

$ch = curl_init($url);
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json; charset=utf-8',
'Content-Length: ' . strlen($data))
);
ob_start();
curl_exec($ch);
$return_content = ob_get_contents();
ob_end_clean();
$return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
print $return_code;
print $return_content;
?>