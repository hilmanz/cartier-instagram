<?php /* Smarty version 2.6.13, created on 2014-09-04 14:39:51
         compiled from application/web/apps/listeducation.html */ ?>
<!-- ki -->
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-books">&nbsp;</span> Education Shinkenjuku Default Dynamic Contect</h2>
            <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
projects" class="button2">Back</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
            <div class="summary">
              
            </div><!-- end .summary -->

            <form id="forms" class="forms" method="post" action="">
            <div id="new-project" class="boxcontent">
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
					
						<h3><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['title']; ?>
</h3>
						<img  src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/education/<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['img']; ?>
" height="100" width="100" style="display: inline; margin: 0px 7px 0px 0px; border: solid 1px #eee; float: left" ><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['description']; ?>

						<br><a href="#" onclick="window.open('<?php echo $this->_tpl_vars['basedomain']; ?>
education/contentview_education?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id_education']; ?>
','mywindowtitle','width=1000,height=800,scrollbars=yes')" 
 class="button" > <span class="icon-user4">Selengkapnya</a>
						
						<?php endfor; endif; ?>
				<?php endif; ?>		</div><br><br><br><br>
						
            <div id="paging_of_user_list" class="paging">
              <a href="#"><span class="icon-first">&nbsp;</span></a>
              <a href="#"><span class="icon-backward2">&nbsp;</span></a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#" class="current">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#"><span class="icon-forward3">&nbsp;</span></a>
              <a href="#"><span class="icon-last">&nbsp;</span></a>
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_user_list","paging_ajax_education",10);
	
</script>