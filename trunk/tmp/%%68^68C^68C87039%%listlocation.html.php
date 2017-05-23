<?php /* Smarty version 2.6.13, created on 2014-09-02 17:07:25
         compiled from application/admin/apps/listlocation.html */ ?>
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span> Location Background</h2>
               <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
location/addlocation" class="button2">Add New</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		 <p>Manage News that are allowed to access and use the CMS. You could also assign security roles to each News.</p>
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Name</th> 
					<th class="head0">Longitude</th> 
					<th class="head0">attitude</th> 
					<th class="head0">Date</th> 
					<th class="head0">Action</th> 
				</tr>
			</thead>
			<tbody class="pagilist">
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
                    <tr>
					
						<td width="1"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
						<td><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>
</span></td> 
						<td><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['logitude']; ?>
</span></td> 
						<td><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['attitude']; ?>
</span></td> 
						<td><span><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['date']; ?>
</span></td> 
						
						<td>
						
                        	<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
location/editlocation?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id_location']; ?>
" class="button"><span class="icon-pencil">&nbsp;</span> Edit</a>
                        	<?php if ($this->_tpl_vars['user']->id != $this->_tpl_vars['list'][$this->_sections['i']['index']]['ownerid']): ?>
                        	<a href="javascript:void(0)" class="button" onClick="confirmation('<?php echo $this->_tpl_vars['basedomain']; ?>
location/deletelocation?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id_location']; ?>
','Confirm to Delete?')" ><span class="icon-trash">&nbsp;</span> Delete</a>
                        	<?php endif; ?>
                        </td>
					</tr>
                <?php endfor; endif; ?>
			<?php endif; ?>
					
			</tbody>
			</table>
            <div id="paging_of_location_list" class="paging">
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
,"paging_of_location_list","paging_ajax_location",10);
	var userid = <?php echo $this->_tpl_vars['user']->id; ?>
;
</script>