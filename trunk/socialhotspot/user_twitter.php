<?php
// error_reporting(E_ALL);
session_start();
session_destroy();
unset($_SESSION);

$data['user']=$_GET['user'];
$data['name']=$_GET['nama'];
$data['twitterid']=$_GET['twitterid'];
$data['tpl_id']=$_GET['tpl_id'];
$data['pass']=md5(md5($_GET['twitterid']));
$data['ipAddress']=$_SERVER['REMOTE_ADDR'];
$data['macAddr']="00-00-00-00-00-00";
#run the external command, break output into lines
$arp=exec("arp -a {$data['ipAddress']}");
 
$lines=explode("\n", $arp);
#look for the output line describing our IP address
foreach($lines as $line)
{
   $cols=preg_split('/\s+/', trim($line));
   if ($cols[0]==$data['ipAddress'])
   {
	   $data['macAddr']=$cols[1];
   }
}
insertToDB($data);
insertToUserDB($data);
insertDataToMicrotik($data);
function insertToDB($data=false){
		if(!$data) return false;
	 
		include_once "settings/db.php";
		
		$db = new db();
		
		$sql = "
		INSERT INTO brandifi_2014.`tbl_reporting` 
		(`id`, `tpl_id`, `twitter_id`, `first_name`,`collected_date`, `macaddress`, `ipaddress`) 
		VALUES (NULL, '{$data['tpl_id']}', '{$data['twitterid']}', '{$data['name']}', NOW(), '{$data['macAddr']}', '{$data['ipAddress']}');";
		
		$db->query($sql);
}
function insertToUserDB($data=false){
		if(!$data) return false;
	 
		include_once "settings/db.php";
		
		$db = new db();
		$sqlCheck="SELECT * from  brandifi_2014.`tbl_user`  where twitter_id={$data['twitterid']}";
		$fetchQuery = $db->fetch($sqlCheck);
		if($fetchQuery)
		{
			$sql = "
			UPDATE   brandifi_2014.`tbl_user` SET  collected_date= NOW() , macaddress='{$data['macAddr']}',ipaddress ='{$data['ipAddress']}',n_status=1 where twitter_id={$data['twitterid']} ";
			
			$db->query($sql);
		}
		else
		{
			$sql = "
			INSERT INTO brandifi_2014.`tbl_user` 
			(`id`, `tpl_id`, `twitter_id`, `first_name`,`collected_date`, `macaddress`, `ipaddress`, `n_status`) 
			VALUES (NULL, '{$data['tpl_id']}', '{$data['twitterid']}', '{$data['name']}', NOW(), '{$data['macAddr']}', '{$data['ipAddress']}','1');";
			//print $sql;exit;
			
			$db->query($sql);
		}
}
function insertDataToMicrotik($data=false){
	if(!$data) return false;
		 
	require('routeros_api.class.php');
	$API = new routeros_api();
	$API->debug = true;
	if ($API->connect('192.168.100.244', 'apiuser', '11111')) {
	 // $API->setTimeout(5);
	 
	 
	   $API->comm("/ip/hotspot/user/add", array(
				"name"     => $data['user'],
				"profile"  => "trial",
				"limit-uptime" => "00:05:00",
				//"uptime" => "00:00:00",
				"address" => $data['ipAddress'],
				"comment" => $data['name'], 	
			
				"password" => $data['pass'],
	   ));
	      $API->comm("/ip/hotspot/ip-binding/add", array(
			  
				"server" => "all",
				"address" => $data['ipAddress'],
				"type" => "bypassed",
				"mac-address" => $data['macAddr'],
				
			 
	   ));
	   $READ = $API->read(false);
	  // $ARRAY = $API->parse_response($READ);
	  // print_r($ARRAY);
	  
	   $API->disconnect();
	  
	}
}
?>
