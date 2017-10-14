<?php

include 'barCrawl.php';

if (isset($_GET['API_KEY']) == false || !apiValidate($_GET['API_KEY'])) {
    $response = new response('apiError', "INVALID-KEY", 200);
    $response->sendToClient();
    exit;
}

if (isset($_GET['REQUEST'])) {
    if ($_GET['REQUEST'] == 'functionOne' && isset($_GET['sessionID'])) {
        $response = new response('functionOne', "REQUEST OKAY", 200);
        $response->sendToClient();
    } else if ($_GET['REQUEST'] == 'functionTwo' && isset($_GET['sessionID'])) {
        $response = new response('functionTwo', "REQUEST OKAY", 200);
        $response->sendToClient();
    }
} else echo "What do you want?";

function invalidParams($function){
    $response = new response($function, "PARAMS-INVALID", 200);
    $response->sendToClient();
    exit;
}

?>