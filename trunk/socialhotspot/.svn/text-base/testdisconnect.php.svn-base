<?php
include_once "settings/db.php";
	$db = new db();
		
	$sql = "
		SELECT * 
		FROM brandifi_2014.my_profile mp
		LEFT JOIN brandifi_2014.tbl_template tt ON mp.ownerid = tt.userid
		WHERE 1
	";

	$rs = $db->fetch($sql);
	

require('routeros_api.class.php');
$API = new routeros_api();
$API->connect('192.168.100.244', 'apiuser', '11111');
$API->debug = true;
$BRIDGEINFO =  $API->comm('/ip/hotspot/user/print', array(
            "?name" => "wahyubunyujogja"
            ));
echo"<pre>";
print_r($BRIDGEINFO);
   $API->comm('/ip/hotspot/user/remove', array(
            ".id"=>$BRIDGEINFO[0]['.id'],
             ));
$BRIDGEINFO2 =  $API->comm('/ip/hotspot/ip-binding/print', array(
            "?address" => $BRIDGEINFO[0]['address']
            ));
print_r($BRIDGEINFO2);
 $API->comm('/ip/hotspot/ip-binding/remove', array(
            ".id"=>$BRIDGEINFO2[0]['.id'],
             ));
$BRIDGEINFO3 =  $API->comm('/ip/dhcp-server/lease/print', array(
            "?address" => $BRIDGEINFO[0]['address']
            ));
print_r($BRIDGEINFO3);
 $API->comm('/ip/dhcp-server/lease/remove', array(
            ".id"=>$BRIDGEINFO3[0]['.id'],
             ));
// $BRIDGEINFO3 =  $API->comm('/ip/arp/print', array(
            // "?address" => $BRIDGEINFO[0]['address']
            // ));
// print_r($BRIDGEINFO3);
 // $API->comm('/ip/arp/remove', array(
            // ".id"=>$BRIDGEINFO3[0]['.id'],
             // ));
?>