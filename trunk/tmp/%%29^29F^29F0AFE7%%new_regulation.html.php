<?php /* Smarty version 2.6.13, created on 2014-08-28 17:58:03
         compiled from application/admin/apps/new_regulation.html */ ?>
<?php echo '
	<script>
	tinymce.init({selector:\'textarea\',
	
	style_formats: [
        {title: \'Bold text\', inline: \'b\'},
        {title: \'Red text\', inline: \'span\', styles: {color: \'#ff0000\'}},
        {title: \'Red header\', block: \'h1\', styles: {color: \'#ff0000\'}},
        {title: \'Example 1\', inline: \'span\', classes: \'example1\'},
        {title: \'Example 2\', inline: \'span\', classes: \'example2\'},
        {title: \'Table styles\'},
        {title: \'Table row 1\', selector: \'tr\', classes: \'tablerow1\'}
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
            <h2 class="fl"><span class="icon-books">&nbsp;</span> Add New regulation</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
projects" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
                <p>Shinkenjuku Management System helps you to overview all your regulation. Add your new regulation to start. </p>
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="" enctype="multipart/form-data">
            <div id="new-project" class="boxcontent">
                <section class="step1">
                    <h3>regulation Name</h3>
                    <p>Fill in the details below to submit your new project.</p>
                    <div class="row">
                        <label for="title">Title<br></label>
                        <input id="title" name="title" type="text" class="required" ><br><label class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msgpr']; ?>
</label>
                    </div><!-- end .row -->
                    <div class="row">
                        <label for="uname">Description </label>
                        <input id="description" name="description" type="text" class="required">
						<small class="msg_name" style="color: red;"><?php echo $this->_tpl_vars['status']['msgn']; ?>
</small>
                    </div><!-- end .row -->
					  <div class="row">
                        <label for="Date">Upload Foto & Fill Content<br></label>
                                               <input name="images" id="images"  type="file" class="required"  style="width: 200px;">
					
                    </div><!-- end .row -->
                    <div class="row">
                        <label for="content">content</label>
						<td class="required">
						<textarea   name="content" ></textarea>
                        </td>
						
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