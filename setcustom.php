<?php
function setcustomfield($userid, $customfield, $value, $authorization)
{
    $ch            = curl_init();
    $datos ='value='.$value;
    
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = $authorization;
    $url = 'https://api.silferbots.co/user/'.$userid.'/custom_fields/'.$customfield;
    
    curl_setopt_array($ch, array(
            CURLOPT_URL           => $url,
            CURLOPT_HTTPHEADER     => $headers
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
       
    
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);

    //handle response or return something (if you need)
}

?>