<?php

class encoder {
    /*
     * @Params $text => Get text from client and encode .
     */
    public function Encode($text) {
        try {
            if(!empty($text)) {
                $firstencode = str_rot13($text);
                return base64_encode($firstencode);
            }
        }
        catch (Exception $e) {
            echo $e;
        }

    }

    /*
     * @Params $data => Get data from client and decode .
     */
    public function Decode($data) {
        try {
            if(!empty($data)) {
                $firstencode = base64_decode($data);
                return str_rot13($firstencode);
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }
}