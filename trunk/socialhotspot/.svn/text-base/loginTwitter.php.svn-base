<?php
session_start();
include_once "twitterHelper.php";
class loginTwitter {

	function checklogintwitters(){

		$this->twitterHelper = new twitterHelper();
	
		$statusSession = $this->twitterHelper->getSession('twitter_session','twitter');
		if(	@$statusSession->status == 1)
		{
			$this->twitterHelper->followme();
			print_r(json_encode($statusSession));exit;
		}
		$urllogin=$this->twitterHelper->request_login_link();
				
				if(@strip_tags($_GET['oauth_verifier'])){
					$this->twitterHelper->authorize();exit;
				}
				
			
				$result['urlConnect'] =$urllogin['urlConnect'];
				$result['status'] =0;
				$result['messages'] ='login ';
				
				print_r(json_encode($result));exit;

		

	}
	
}
$loginTwit = new loginTwitter();
$loginTwit->checklogintwitters();
?>