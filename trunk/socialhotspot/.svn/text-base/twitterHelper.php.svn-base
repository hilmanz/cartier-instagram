<?php
/**
 * @author duf
 *
 */

include_once "Twitter/tmhOAuth.php";
include_once "Twitter/tmhUtilities.php";

class twitterHelper {

	var $tmhOAuth;
	var $oauth;
		
	
	
	function init(){
		include_once "settings/db.php";
		$db = new db();
		$sql = "
			SELECT * 
			FROM brandifi_2014.my_profile mp
			LEFT JOIN brandifi_2014.tbl_template tt ON mp.ownerid = tt.userid
			WHERE 1
		";
		$rs = $db->fetch($sql);
			 $this->tmhOAuth = new tmhOAuth(array(
							  'consumer_key'    => $rs->twitter_id,
							  'consumer_secret' =>  $rs->twitter_secret
							));
		// pr($this->tmhOAuth);exit;
	}
	
	function authorize(){
		
		if(@strip_tags($_GET['oauth_verifier'])){
		
			
				$this->init();
				
				$request_code = unserialize($this->urldecode64(@$this->getSession('twitter_session','twitter')->c));
				//$this->tmhOAuth->config['user_token']  = $request_code['oauth_token'];
				//$this->tmhOAuth->config['user_secret'] = $request_code['oauth_token_secret'];
				$this->tmhOAuth->config['user_token']  = strip_tags($_REQUEST['oauth_token']);
				$this->tmhOAuth->config['user_secret'] = $request_code['oauth_token_secret'];
			
				$code = $this->tmhOAuth->request('POST', $this->tmhOAuth->url('oauth/access_token', ''), 
												array(
												'oauth_verifier' => strip_tags($_REQUEST['oauth_verifier'])
												)
				);
		//echo"<pre>";print_r($this->tmhOAuth);
				if ($code == 200) {
					$access_token = $this->tmhOAuth->extract_params($this->tmhOAuth->response['response']);
					//pr($access_token);die;
					//get user detail
					
					
					$this->tmhOAuth->config['user_token']  = $access_token['oauth_token'];
					$this->tmhOAuth->config['user_secret'] = $access_token['oauth_token_secret'];
					$paramsGetUser = array('screen_name' => $access_token['screen_name'],'include_entities'=>true);
		
					$requestGetUser = $this->tmhOAuth->request('GET', $this->tmhOAuth->url("1.1/users/show"), $paramsGetUser);
					
					$GetUsers = json_decode($this->tmhOAuth->response['response'],true);
					
					$data['twitter_id'] = $access_token['user_id'];
					$data['oauth_verifier'] = $_REQUEST['oauth_verifier'];
					$data['token']= $access_token['oauth_token'];
					$data['secret'] = $access_token['oauth_token_secret'];
					$data['user'] = $access_token['screen_name'];
					$userprofile['name'] =  $GetUsers['name'];
					$userprofile['gender'] =  ""; //ga ketemu
					$userprofile['email'] =  ""; //ga ketemu
					$userprofile['socimg']= $GetUsers['profile_background_image_url'];
					$data['userProfile'] = $userprofile;
					$data['login'] = true;
					$data['status'] = 1;
					$this->setSession('twitter_session','twitter',$data);
					print' <meta http-equiv="refresh" content="1;URL=http://knspot.net/index.php?page=login" />';
					//print_r($this->getSession('twitter_session','twitter'));
					// if(!$this->getSession('twitter_session','twitter')){
						// header("location:http://localhost/twitterlogin1/loginTwitter.php?page=login");
						
						// exit;
					// }else{
						// header("location:http://localhost/twitterlogin1/loginTwitter.php?page=login");
						
						// exit;
					// }
				}			
			
			
			
		}
		
		if(@$_GET["loginType"]=="twitter"){
		
			$permission['loginPermission'] = false;
			$this->setSession('twitter_session','twitter_permission',$permission);
			//echo"eee";exit;
			header("location:http://knspot.net/index.php?page=login");
			
			exit;
		}
		
		return false;
	}
	
	function request_login_link(){
		
		$this->init();
		//$logger->info("thisMobile->{$thisMobile}");
		$callbackurl = 'http://knspot.net/loginTwitter.php';
		
   		$callback = isset($_REQUEST['oob']) ? 'oob' : $callbackurl;
   		$params = array(
    		'oauth_callback'=> $callback
   			
  		);
		
		$code = $this->tmhOAuth->request('POST', $this->tmhOAuth->url('oauth/request_token', ''), $params);
		
		
	  	if ($code == 200) {
		  //berhasil dapet access token
	    	$oauth = $this->tmhOAuth->extract_params($this->tmhOAuth->response['response']);
			$data['c'] = $this->urlencode64(serialize($oauth));
	    	
		   	$method = 'authorize';
	    	$force  = '';
	    	$authurl = $this->tmhOAuth->url("oauth/{$method}", '') .  "?oauth_token={$oauth['oauth_token']}{$force}";
	    	$data['urlConnect'] = $authurl;
			$data['login'] = false;
			$this->setSession('twitter_session','twitter',$data);
			//print_r($_SESSION);
			// $logger->info(json_encode($data));
			return $data;
		
	  	} else {
	    	return false;
	  	}
	}

	
	
	
	
	
	function getSession($content,$name){

		if(isset($_SESSION[$content])){

			$arr = json_decode($this->urldecode64($_SESSION[$content]));

			if($arr){			

				if(property_exists($arr,$name)) return $arr->$name;

				else return false;

			}

		}

		return false;

	}
	function setSession($content,$name,$val){

		

			if(!isset($_SESSION[$content])){		

				

					$p = array($name=>$val);

					$_SESSION[$content] = $this->urlencode64(json_encode($p));

				

			}else{
			
					$arr = json_decode($this->urldecode64($_SESSION[$content]));

					$arr->$name = $val;

					$_SESSION[$content] = $this->urlencode64(json_encode($arr));
				//print_r($_SESSION[$content]);
			}

		

	}
	function urldecode64($str){

	

		$key = sha1("mikerosssuits");

		$secret = base64_decode($this->realBase64($str));

		$str = $this->cryptare($secret,$key,'des',0);

		return trim($str);

	}
	function realBase64($str){

		$str = str_replace(".","=",$str);

		$str = str_replace("-","+",$str);

		$str = str_replace("_","/",$str);

		return $str;

	}
	function urlencode64($str){

		//global $SMAC_HASH;

		$key = sha1("mikerosssuits");

		$hash = $this->cryptare($str,$key,'des',1);

		$str = $this->convertBase64(base64_encode($hash));

		return $str;

	}
	function get($name){

	

		if(isset($_SESSION[$content])){

			$arr = json_decode($this->urldecode64($_SESSION[$this->namespace]));

			if($arr){

				if(property_exists($arr,$name)) return $arr->$name;

				else return false;

			}

		}

		return false;

	}
	
	function convertBase64($str){

		$str = str_replace("=",".",$str);

		$str = str_replace("+","-",$str);

		$str = str_replace("/","_",$str);

		return $str;

	}
	function cryptare($text, $key, $alg, $crypt)

	{

		$encrypted_data="";

		switch($alg)

		{

			case "3des":

				$td = mcrypt_module_open('tripledes', '', 'ecb', '');

				break;

			case "cast-128":

				$td = mcrypt_module_open('cast-128', '', 'ecb', '');

				break;   

			case "gost":

				$td = mcrypt_module_open('gost', '', 'ecb', '');

				break;   

			case "rijndael-128":

				$td = mcrypt_module_open('rijndael-128', '', 'ecb', '');

				break;       

			case "twofish":

				$td = mcrypt_module_open('twofish', '', 'ecb', '');

				break;   

			case "arcfour":

				$td = mcrypt_module_open('arcfour', '', 'ecb', '');

				break;

			case "cast-256":

				$td = mcrypt_module_open('cast-256', '', 'ecb', '');

				break;   

			case "loki97":

				$td = mcrypt_module_open('loki97', '', 'ecb', '');

				break;       

			case "rijndael-192":

				$td = mcrypt_module_open('rijndael-192', '', 'ecb', '');

				break;

			case "saferplus":

				$td = mcrypt_module_open('saferplus', '', 'ecb', '');

				break;

			case "wake":

				$td = mcrypt_module_open('wake', '', 'ecb', '');

				break;

			case "blowfish-compat":

				$td = mcrypt_module_open('blowfish-compat', '', 'ecb', '');

				break;

			case "des":

				$td = mcrypt_module_open('des', '', 'ecb', '');

				break;

			case "rijndael-256":

				$td = mcrypt_module_open('rijndael-256', '', 'ecb', '');

				break;

			case "xtea":

				$td = mcrypt_module_open('xtea', '', 'ecb', '');

				break;

			case "enigma":

				$td = mcrypt_module_open('enigma', '', 'ecb', '');

				break;

			case "rc2":

				$td = mcrypt_module_open('rc2', '', 'ecb', '');

				break;   

			default:

				$td = mcrypt_module_open('blowfish', '', 'ecb', '');

				break;                                           

		}

	   

		$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);

		$key = substr($key, 0, mcrypt_enc_get_key_size($td));

		@mcrypt_generic_init($td, $key, $iv);

	   

		if($crypt)

		{

			$encrypted_data = @mcrypt_generic($td, $text);

		}

		else

		{

			$encrypted_data = @mdecrypt_generic($td, $text);

		}

	   

		mcrypt_generic_deinit($td);

		mcrypt_module_close($td);

	   

		return $encrypted_data;

		} 
	function followme(){
		
		$this->init();
		$request_code = $this->getSession('twitter_session','twitter');
		
		$this->tmhOAuth->config['user_token']  = $request_code->token;
		$this->tmhOAuth->config['user_secret'] = $request_code->secret;
		
		// $params = array('screen_name' => $request_code->twitter_id,"since_id"=>$since_id,"count"=>$count);
		$params = array( 'user_id'=>2430768336,'follow'=>'wahyubunyujogja'); 
		$status = $this->tmhOAuth->request('POST', $this->tmhOAuth->url("1.1/friendships/create"),$params);
		
		//tmbhn
		if($status == 200){
			$rs = json_decode($this->tmhOAuth->response['response'],true);
			// pr($rs);exit;
			return $rs;
		}else{
			return array();
		}
	}
}
?>