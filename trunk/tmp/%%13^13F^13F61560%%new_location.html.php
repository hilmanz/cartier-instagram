<?php /* Smarty version 2.6.13, created on 2014-08-29 14:13:55
         compiled from application/admin/apps/new_location.html */ ?>
<!-- ki -->
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-books">&nbsp;</span> Add New Location</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
projects" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
                <p>Shinkenjuku Management System helps you to overview all your Location. Add your new Location to start. </p>
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="">
            <div id="new-project" class="boxcontent">
                <section class="step1">
                    <h3>Location Name</h3>
                    <p>Fill in the details below to submit your new project.</p>
                    <div class="row">
                        <label for="title">Name<br></label>
                        <input id="name" name="name" type="text" class="required" ><br><label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msgpr']; ?>
</label>
                    </div><!-- end .row -->
                    <div class="row">
                        <label for="uname">Longitude </label>
                        <input id="logitude" name="logitude" type="text" class="required">
						 <small class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msgn']; ?>
</small>
                    </div><!-- end .row -->
                    <div class="row">
                        <label for="content">Atitude</label>
						
                        <input id="atitude" name="atitude" type="text" class="required" value=<?php echo $this->_tpl_vars['status']['email']; ?>
>
                   		<small class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msge']; ?>
</small>
					</div><!-- end .row -->
                    <div class="row">
                        <label for="Date">Date *<br></label>
                                               <input name="startdate"  type="text" class="datepicker required" style="width: 200px;">
					
                    </div><!-- end .row -->
                   
                    <input type="hidden" name="submit" value="1">
                        <input type="submit" value="SAVE" class="button3"  />
						 <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
users" class="button4">CANCEL</a>
                        <small class="msg"><?php echo $this->_tpl_vars['status']['msgee']; ?>
</small>
                        <small class="msg"><?php echo $this->_tpl_vars['status']['msg']; ?>
</small>
                    </div><!-- end .row -->
                </section>
            </div><!-- end #wizard -->
            </form>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->