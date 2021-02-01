<?php
include("encoder.php");
if(isset($_GET['method'])) {
    $tools = new encoder();
    $method = $_GET['method'];
    $data = $_GET['data'];
    switch ($method) {
        case "encode":
            if(!empty($data)) {
                echo "<script>document.title = 'PHP Encoder -> encode $data'</script>";
                if(isset($_GET['type']) && $_GET['type'] == "json") {
                    $json = array("data" => $data,"Encode" => $tools->Encode($_GET['data']));
                    echo json_encode($json);
                }
                else {
                    echo $tools->Encode($_GET['data']);
                }
            }
        break;
        case "decode":
            if(!empty($data)) {
                echo "<script>document.title = 'PHP Encoder -> decode $data'</script>";
                if(isset($_GET['type']) && $_GET['type'] == "json") {
                    $json = array("data" => $data,"Decode" => $tools->Decode($_GET['data']));
                    echo json_encode($json);
                }
                else {
                    echo $tools->Decode($_GET['data']);
                }
            }
        break;
        default:
            header("Location: ../");
            die();
        break;
    }
}
else {
    echo "<script>document.title = 'PHP Encoder -> home'</script>";
    echo "How to use : <br>  For Encode => GET /?method=encode&data= <br> For Decode => GET /?method=decode&data=  <br> optional -> For Get json add /?type=json";
}

