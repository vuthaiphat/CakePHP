<div class="degrees index">
	<h2><?php __('Degrees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('degree');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($degrees as $degree):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $degree['Degree']['id']; ?>&nbsp;</td>
		<td><?php echo $degree['Degree']['degree']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $degree['Degree']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $degree['Degree']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $degree['Degree']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $degree['Degree']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Degree', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
	</ul>
</div>