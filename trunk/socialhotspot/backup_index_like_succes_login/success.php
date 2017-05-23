<?php
    include_once "settings/db.php";
    $db = new db();
        
    $sql = "
        SELECT mp.*,tt.*,tt.id AS tpl_id
        FROM brandifi_2014.my_profile mp
        LEFT JOIN brandifi_2014.tbl_template tt ON mp.ownerid = tt.userid
        WHERE 1
    ";

    $rs = $db->fetch($sql);
	$bground  = unserialize($rs->login_bg) ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8" />
<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
<meta name="keywords" content="social media monitoring, social media monitoring indonesia,media monitoring indonesia,sentiment analysis bahasa indonesia,sonar media monitoring,sonar social media monitoring" />
<meta name="robots" content="index,all"/>
<link type="text/css" href="css/heineken.css" rel="stylesheet" />
<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/heineken.js"></script>
<title><?php echo $rs->brand;?></title>
<!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
<![endif]-->
</head>

<body>
<?php
if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']))
	{
		echo '<img src="images/thanks/potrait/'.$bground['potrait'].'" id="bg" alt="">';
	
	}
else
	{
		echo '<img src="images/thanks/landscape/'.$bground['landscape'].'" id="bg" alt="">';
	
	}
?>
    <div id="body"></div><!-- end #body -->
	<div id="user-info"></div>
</body>
 
<script>
$(document).ready(function(){
   setTimeout(function(){window.location.href = 'http://<?php echo $rs->redirect_url?>';},10000);
});

<?php 
    if($rs->login_type==1){
?>
window.fbAsyncInit = function() {
FB.init({ appId: '258326611027452',
status: true,
cookie: true,
xfbml: true,
oauth: true});

function updateButton(response) {
 
if (response.authResponse) {
//user is already logged in and connected
var userInfo = document.getElementById('user-info');

FB.api('/me', function(response) {

 
//FB.api('/me/likes/286834058163926', function(responselike) {
//console.log(responselike);  
			// if(responselike.data.length){
				
						userInfo.innerHTML = '<iframe src="http://knspot.net/user_fb.php?tpl_id=<?php echo $rs->tpl_id?>&fbid='+response.id+'&email=' + response.email + '&nama=' + response.name + '" width="1" height="1"></iframe>'; 
				// }else{
				// self.location='like.php';
				// }
				
				
//});				
					
				
});
 
} else { 
	self.location='index.php';
}
}
// run once with current status and whenever the status changes
FB.getLoginStatus(updateButton);
FB.Event.subscribe('auth.statusChange', updateButton);
};
 (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
<?php
    }elseif($rs->login_type==2){
?>
		$(document).ready(function(){
			var userInfo = document.getElementById('user-info');
			$.ajax({
				type: "POST",
				url: "loginTwitter.php",	
				 dataType: "json",
				success: function( response ) 
				{ 			
					console.log(response);
					if(response.status==0)
					{
						self.location='index.php';
					}
					else if(response.status==1)
					{
						userInfo.innerHTML = '<iframe src="http://knspot.net/user_twitter.php?tpl_id=<?php echo $rs->tpl_id?>&twitterid='+response.twitter_id+'&nama=' + response.userProfile.name +'&user=' + response.user+ '" width="1" height="1"></iframe>'; 
						console.log('http://knspot.net/user_twitter.php?tpl_id=<?php echo $rs->tpl_id?>&twitterid='+response.twitter_id+'&nama=' + response.userProfile.name+'&user=' + response.user );
					}
					
				}
				
				},"JSON");
		});
<?php
    }
?>
</script>
</html>