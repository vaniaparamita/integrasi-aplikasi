<?php
    $curl = curl_init(); // 'http://10.33.34.145' host
    curl_setopt_array($curl,[
        CURLOPT_RETURNTRANSFER => 1, // 1 berguna untkuh menghiden pesan error
        CURLOPT_URL => 'http://10.33.34.121'
    ]);
    $result = curl_exec($curl);
    print_r($result);
?>