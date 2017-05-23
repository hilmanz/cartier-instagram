<?php
	include_once "settings/db.php";
	$db = new db();
		
	$sql = "
		SELECT tt.id as id_template,tt.userid,tr.* 
		FROM brandifi_2014.tbl_template tt
		LEFT JOIN brandifi_2014.tbl_reporting tr ON tt.id = tr.tpl_id
		WHERE 1 and tr.n_status=0 
	";
	
	$rs = $db->fetch($sql,1);
	
	foreach ($rs as $row)
	{
		$params=array(	'userid'=>$row->userid, 
						'fbId'=>$row->fb_id,
						'twtId'=>$row->twitter_id,
						'email'=>$row->email,
						'firstName'=>$row->first_name,
						'lastName'=>$row->last_name,
						'middelName'=>$row->middle_name,
						'bridthday'=>$row->birthday,
						'location'=>$row->location,
						'collected_date'=>$row->collected_date
					);

		$url ="http://preview.kanadigital.com/brandifi/public_html/service/pushService/pushreport";
		$data_string = http_build_query($params);
		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);           
		//curl_setopt($ch,CURLOPT_TIMEOUT,$timeout);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);	
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec ($ch);
		$info = curl_getinfo($ch);
		curl_close ($ch);
		
		print_r($response);exit;
		$response = json_decode($response);
		if($response->status==1)
		{
			$sql = "UPDATE   brandifi_2014.tbl_reporting 
				SET  n_status= '1'  
				where id='{$row->id}'";
			
			$db->query($sql);
		}
		else
		{
			echo $response->msg;
			echo $response->msg;
		}
		
	}
?>