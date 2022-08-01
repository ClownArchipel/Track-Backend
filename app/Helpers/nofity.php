<?php
namespace App\Helpers;

function notify($to)
{
    $data=array(
        'title' => "TrackApp" ,
        'body' => "Ada Pesan Masuk" 
    );

    $api_key = "AAAAuZOor7k:APA91bEUWrk5lbwMtjPR4JZfdLyZBtr1_ZZC6tbEavN_z5g7_6tC-PblO3dK4id0V0eTqD4FWxxPtyWqlqDsPjgFvhSlWmZkhmFqR6OSZVTO2Jp8kLM3FiulaOCQG5tcKhTTaPvKbUrd";
    $url = "https://fcm.googleapis.com/fcm/send";
    $fields = json_encode(array('to'=>$to,'notification'=>$data));
    
    // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,($fields));

    $headers = array();
    $headers[] = 'Authorization: key = ' .$api_key;
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}