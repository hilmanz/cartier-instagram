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
	
	$params=array(	'user_id'=>$rs->ownerid,
					'template_id'=>$rs->id,
				);
		
	$url ="http://preview.kanadigital.com/brandifi/public_html/service/pushService/pullreport";
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
	
	
	$response = json_decode($response);
	 // echo"<pre>";
	// print_r($response); 
		// exit;
		
	 
	if($response->status==1)
	{
		$bground  = unserialize($response->data->login_bg) ;
		if($bground['landscape']!='' || $bground['landscape']!=0)
		{
			
			$file = file_get_contents('http://preview.kanadigital.com/brandifi/public_html/public_assets/contents/login/landscape/'.$bground['landscape']);
			file_put_contents('images/login/landscape/'.$bground['landscape'],$file);
		}
		if($bground['potrait']!='' || $bground['potrait']!=0)
		{
			//print_r('http://preview.kanadigital.com/brandifi/public_html/public_assets/contents/login/potrait/'.$bground['landscape']);
			$file = file_get_contents('http://preview.kanadigital.com/brandifi/public_html/public_assets/contents/login/potrait/'.$bground['potrait']);
			 
			file_put_contents('images/login/potrait/'.$bground['potrait'],$file);
		}
		$thankyou_bg  = unserialize($response->data->thankyou_bg) ;
		if($thankyou_bg['landscape']!='' || $thankyou_bg['landscape']!=0)
		{
			$file = file_get_contents('http://preview.kanadigital.com/brandifi/public_html/public_assets/contents/thanks/landscape/'.$thankyou_bg['landscape']);
			file_put_contents('images/thanks/landscape/'.$thankyou_bg['landscape'],$file);
		}
		if($thankyou_bg['potrait']!='' || $thankyou_bg['potrait']!=0)
		{
			$file = file_get_contents('http://preview.kanadigital.com/brandifi/public_html/public_assets/contents/thanks/potrait/'.$thankyou_bg['potrait']);
			file_put_contents('images/thanks/potrait/'.$thankyou_bg['potrait'],$file);
		}
		$sqlcheck ="select * from brandifi_2014.`tbl_template` where id='{$response->data->id}'";
		$rscheck = $db->fetch($sqlcheck);
		if($rscheck)
		{
			$sql = "UPDATE   brandifi_2014.`tbl_template`
			SET  login_bg= '{$response->data->login_bg}' , 
					thankyou_bg='{$response->data->thankyou_bg}',
				login_type ='{$response->data->login_type}',
				modified_date='{$response->data->modified_date}' ,
				redirect_url='{$response->data->redirect_url}',
				fb_id='{$response->data->fb_id}',
				fb_url='{$response->data->fb_url}',
				twitter_id='{$response->data->twitter_id}',
				twitter_secret='{$response->data->twitter_secret}',
				twitter_url='{$response->data->twitter_url}',
				twitter_follow='{$response->data->twitter_follow}'
				where id='{$response->data->id}'";
		}
		else
		{
			$sql = "INSERT INTO brandifi_2014.`tbl_template` 
				(id,userid,login_bg,thankyou_bg,login_type,modified_date,redirect_url,fb_id,fb_url,twitter_id,twitter_secret,twitter_url,twitter_follow)
				VALUES
				('{$response->data->id}','{$response->data->userid}','{$response->data->login_bg}','{$response->data->thankyou_bg}','{$response->data->login_type}','{$response->data->modified_date}','{$response->data->redirect_url}','{$response->data->fb_id}','{$response->data->fb_url}','{$response->data->twitter_id}','{$response->data->twitter_secret}','{$response->data->twitter_url}','{$response->data->twitter_follow}')
				";
		}
				
		$db->query($sql);
	}
	else
	{
	
		echo $response->msg;
	}
?>