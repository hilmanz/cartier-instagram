<?php /* Smarty version 2.6.13, created on 2014-09-01 09:52:08
         compiled from application/dashboard/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'application/dashboard/login.html', 25, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BRANDIFI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BRANDIFI">
    <link rel="icon" href="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/favicon.png" type="image/x-icon">
    <meta name="author" content="BRANDIFI">
    <link href="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/css/colpick.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/css/brandifi.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- // IE  // -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery-ui.min.js"></script>
    
    <!-- JS library -->
    <script>
        var basedomain = "<?php echo $this->_tpl_vars['basedomain']; ?>
" ;
        var basedomainpath = "<?php echo $this->_tpl_vars['basedomainpath']; ?>
" ;
        var pages = "<?php echo $this->_tpl_vars['pages']; ?>
" ;
        var locale = <?php echo json_encode($this->_tpl_vars['locale']); ?>
;
    </script> 
    <!--- END ---->

    <!-- // PLUGIN  // -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery.steps.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/colpick.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/js/touchbase.js"></script>

</head>


<body id="login-page">
<div id="body">
        <div class="loginbox">
            <div class="logo_login"></div>
            <!--logo-->
           <form name="Form2" method="POST" action="<?php echo $this->_tpl_vars['basedomain']; ?>
login/local" id="Form2">
                <input name="username" placeholder="Username" type="text" id="username" maxlength="20"> 
                <input name="password" placeholder="Password" type="password" id="password" maxlength="20">
                <input id="button" type="submit" name="Submit" value="Login">
                <input type="hidden" name="login" value="1">
            </form> 
        </div><!--loginbox-->
</div><!-- end #body -->            
</body>
</script>