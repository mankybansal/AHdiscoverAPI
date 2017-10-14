<?php


function apiValidate($apiKey)
{
    if ($apiKey == "fUJxtW62tresIB7m")
        return true;
    else
        return false;
}


class response
{
    private $httpCode;
    public $status, $responseType, $data;

    public function __construct($responseType, $data, $httpCode)
    {
        $this->responseType = $responseType;
        $this->data = $data;
        $this->httpCode = $httpCode;
        if ($httpCode != 200) {
            $this->status = "bad";
        } else {
            $this->status = "good";
        }
    }

    public function sendToClient()
    {
        http_response_code($this->httpCode);
        echo json_encode($this);
    }
}

?>