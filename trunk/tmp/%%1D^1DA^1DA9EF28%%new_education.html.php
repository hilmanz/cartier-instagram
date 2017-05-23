<?php /* Smarty version 2.6.13, created on 2014-09-01 17:13:51
         compiled from application/admin/apps/new_education.html */ ?>
<?php echo '
	<script>
	tinymce.init({selector:\'textarea\',
	body: [
                    {type: \'textbox\', name: \'title\', label: \'Title\'}
                ],

	menubar: "false",
    toolbar1: "bold italic underline strikethrough  alignleft aligncenter alignright alignjustify  styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | bullist numlist | outdent indent blockquote | undo redo | anchor | forecolor backcolor",
	theme : "modern",
	height: "100",
    width:850
	
	});
	</script>
'; ?>

<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-books">&nbsp;</span> Add New Education</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
projects" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
                <p>Shinkenjuku Management System helps you to overview all your Education. Add your new Education to start. </p>
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
            <div id="new-project" class="boxcontent">
                <section class="step1">
                    <h3>Education Name</h3>
                    <p>Fill in the details below to submit your new project.</p>
                    <div class="row">
                        <label for="title">Title<br></label>
                        <input id="title" name="title" type="text" class="required" ><br><label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msgpr']; ?>
</label>
                    </div><!-- end .row -->
					<div class="row">
                        <label for="Date">Description 	:<br></label>
                                           
											
					
                    </div><!-- end .row -->
                    <div class="row">
                        <textarea   name="description"></textarea>
                    
                    </div><!-- end .row -->
                 
					  <div class="row">
                        <label for="Date">Upload Foto & Fill Content<br></label>
                                               <input name="images" id="images"  type="file" class="required"  style="width: 200px;">
					
                    </div><!-- end .row -->
                    <div class="row">
                        <label for="content">content</label>
						
                      <textarea   name="content"></textarea>
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