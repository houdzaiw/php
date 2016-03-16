<?php
define("TOKEN", "yida");

$wechatObj = new Weixin();
if (!isset($_GET['echostr'])) {
    $wechatObj->receive();
}else{
    $wechatObj->checkSignature();
}
class Weixin {


    public function checkSignature()
    {
        $echoStr = $_GET["echostr"];
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if($tmpStr == $signature){
            header('content-type:text');
            echo $echoStr;
            exit;
        }
    }

    public function receive(){

        $obj=$GLOBALS['HTTP_RAW_POST_DATA'];
        $postSql=simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOCDATA);
        $this->logger("接受:".$obj);
    }
    private function logger(){
        $logSize = 100000;
        $log="log.txt";
        if(file_exists($log) && filesize($log)>$logSize){
            unlink($log);
        }
        file_put_contents($log,date('H:.i:s')."".$content.'\n',FILE_APPEND);
	}

}

?>

