<?php /* Smarty version 2.6.13, created on 2017-04-25 11:08:11
         compiled from application/admin/apps/dashboard.html */ ?>
<!-- ki -->
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-books">&nbsp;</span> Instagram Dynamic Content</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
projects" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
                <p>Instagram Dynamic Content</p>
            </div><!-- end .summary -->

        
            <div id="new-project" class="boxcontent">
              <h3>( View Instagram Dynamic Content)</h3>
	 <div class="newspage">
			         <div class="newspage">
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
					<table>
					<td>
						<img  src="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['profile_picture']; ?>
" height="100" width="100" style="display: inline; margin: 0px 7px 0px 0px; border: solid 1px #eee; float: left" ></td>
						<td width='200'>
						<form class='FormInput' method='POST'>
						 <span class="loading"></span>
						<input type="submit" name="active" id="status" value="active" class="button icon-user4 aktif" >
						<input type="hidden" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" name="idnya" id="idnya">
						<input type="hidden" value="active" name="status" id="active" >
						 
						</td> 
						<td width='200'>
						</form>
						<form class='FormPrint' method='POST'>
					
						<input type="submit" name="Print" id="Print" value="Print" class="button icon-user4 print" >
						<input type="hidden" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" name="idnya" id="idnya">
						<input type="hidden" value="Print" name="Print" id="active">
						</form>
						</td>
						
						
					<?php endif; ?>
						
						
						
						
						
					</table>	
						<?php endfor; endif; ?>
				<?php endif; ?>		</div><br><br><br><br>
            </div><!-- end #wizard -->
            
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->


<?php echo '
	 <script type="text/javascript">
	 function func1() {
			$(\'.activec\').addClass(\'hide\');
			$(\'.inactivec\').addClass(\'hide\');
		}
	window.onload=func1;
	</script>
	
	<script type="text/javascript">
		 
		$().ready(function(){
			$(\'.FormInput\').submit(function(e){
				  e.preventDefault();
					 $.ajax({
					
							\'type\': \'POST\',
							\'url\': \'\'+basedomain+\'home/status\',
							\'data\': $(this).serialize(),
							\'dataType\':\'json\',
							\'beforeSend\':function(){
													console.log($(this).find(\'aktif\'));
														$(this).find(\'.aktif\').hide();
														$(".loading").html("Please wait....");
															
             										},
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
							\'beforeSend\':function(){
														$(\'.print\').addClass(\'hide\');
														$(".loading").html("Please wait....");
															
             										},
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