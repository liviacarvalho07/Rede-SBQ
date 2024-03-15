<?php
/**
 * Created by PhpStorm.
 * User: Leonan Carvalho
 * Date: 02/07/2019
 * Time: 10:44
 */

//Valida se o método é post e se na requisição há o token do recaptcha
if ($_SERVER['REQUEST_METHOD'] === 'POST' && array_key_exists("g-recaptcha-response", $_REQUEST)) {
    $postBody = array(
        "secret" => "<<:YOUR RECAPTCHAV3 PRIVATE KEY:>>",
        "response" => $_REQUEST['g-recaptcha-response'],
        "remoteip" => $_SERVER['REMOTE_ADDR'], //Important
    );

// Envia uma requisição à API do recaptcha
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postBody));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($server_output);
	
    if (isset($response->success)) {
        $valid = $response->success;
		//Vc pode validar por score também, um score normal de um usuário seguro é por volta de 0.7
        if(isset($response->score) &&  $response->score < 0.7){
            //$valid = false;
            throw new Exception("Low score {$response->score}", 1);
        }
        if (!$valid) {
            //$valid = false;
            throw new Exception("Invalid captcha", 2);
        }
    } else {
        $valid = false;
        throw new Exception("Invalid response", 3);
    }
} else {
    $valid = false;
}

if($valid){
	//Confirma o formulário	
}
