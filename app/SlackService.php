<?php

namespace App;

class SlackService{

    public function slackMessage($title = "", $message = ""){
        $webhooklink = "https://hooks.slack.com/services/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";
        $data = [
            "text"=> "*".$title."*",
            "attachments" => [
                [
                    "text" => $message
                ]
            ]
        ];
        return $this->_sendCurl($webhooklink,$data);
    }   

    private function _sendCurl($dataURL, $dataPost){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$dataURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataPost));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        curl_close ($ch);

        return $server_output;
    }

}
?>