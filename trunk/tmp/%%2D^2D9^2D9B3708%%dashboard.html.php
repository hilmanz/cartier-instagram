<?php /* Smarty version 2.6.13, created on 2017-04-25 11:08:24
         compiled from application/web/apps/dashboard.html */ ?>
<div class="page_section" id="home">
    <div id="homeBanner">
        <div id="bannerwrapper">
		<span class="loading" style="width:40px;height:40px;"></span>
            <div class="flexslider">
              <ul class="slides">
                	<li>
                    
         	  <?php if ($this->_tpl_vars['list']): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?> 
					<?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?>			
					 
					
						<div class="box">
                        	<div class="imgbox"><img src="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['images']; ?>
" /></div>
                            <div class="imgcaption">
                            	<div class="thumbuser"></div>
							
					<form class='FormInput' method='POST'>
						<input type="hidden" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" name="idnya" id="idnya">
						<input type="hidden" value="Print" name="Print" id="active">
						
                         <a href="#" class="submithref">  <?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['username']; ?>
</a>
							
					</form>
                            </div><!-- end .imgcaption -->
                        </div><!-- end .box -->

							<?php endif; ?>
						<?php endfor; endif; ?>
				<?php endif; ?>	
                    </li>
					  	<li>
                    
         	  <?php if ($this->_tpl_vars['twolist']): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['twolist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?> 
					<?php if ($this->_tpl_vars['twolist'][$this->_sections['i']['index']]['n_status'] == 1): ?>			
					
					
						<div class="box">
                        	<div class="imgbox"><img src="<?php echo $this->_tpl_vars['twolist'][$this->_sections['i']['index']]['images']; ?>
" class="imagenya"/> </div>
                            <div class="imgcaption">
                            	<div class="thumbuser"></div>
								<form class='FormInput' id="Forminput" method='POST'>
								<input type="hidden" value="<?php echo $this->_tpl_vars['twolist'][$this->_sections['i']['index']]['id']; ?>
" name="idnya" id="idnya">
								<input type="hidden" value="Print" name="Print" id="active">
								<a href="#" class="submithref"><?php echo $this->_tpl_vars['twolist'][$this->_sections['i']['index']]['username']; ?>
e</a>
								
							  	</form>
                            </div><!-- end .imgcaption -->
                        </div><!-- end .box -->

							<?php endif; ?>
						<?php endfor; endif; ?>
				<?php endif; ?>	
                    </li>
              </ul>
            </div><!-- end .flexslider -->
        </div> <!-- end #bannerwrapper -->
    </div><!-- end #homeBanner -->
</div><!-- end #home -->


	
<script type="text/javascript">

var basedomain="<?php echo $this->_tpl_vars['basedomain']; ?>
";	
var str="";
<?php echo '	
setInterval(function(){location.reload();}, 5000);
		$().ready(function(){
		$(\'.submithref\').click(function(e){
			
					 $.ajax({
					
							\'type\': \'POST\',
								\'url\': \'\'+basedomain+\'home/printer\',
							\'data\': $(this).parent().serialize(),
							\'dataType\':\'json\',
							\'beforeSend\':function(){
							$(".box").hide();
													 $(\'.flexslider\').flexslider("pause");		
															$(".loading").html(\'<img src="\'+basedomain+\'assets/images/loader.gif" witdh="100" height="100">\');
													
															
             										},
							\'success\': function(result){
								$(".loading").html(\'\');
								$(".box").show();
								$(\'.flexslider\').flexslider("play");	
						
						if(result.status == \'1\' )
								{
								
									//location.reload();
								}else if (result.status == \'2\')
								{
									location.reload();
								}
							
							
							
							}
						});
					});
				 
		    });

	
	</script>
	<script type="text/javascript">
		 
		$().ready(function(){
			$(\'.FormPrint\').submit(function(e){
			//console.log(\'ss\');exit;
				  e.preventDefault();
					 $.ajax({
					
							\'type\': \'POST\',
							\'url\': \'\'+basedomain+\'home/printer\',
							\'data\': $(this).serialize(),
							\'dataType\':\'json\',
							\'success\': function(result){
							
						
						if(result.status == \'1\' )
								{
									location.reload();
								}else if (result.status == \'2\')
								{
									location.reload();
								}
							
							
							
							}
						});
					});
				 });
		   

	
	</script>
	
	
	'; ?>