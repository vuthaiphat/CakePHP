<div class="majors index">
	<h2><?php __('Majors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('field_id');?></th>
			<th><?php echo $this->Paginator->sort('major');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($majors as $major):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $major['Major']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($major['Field']['field'], array('controller' => 'fields', 'action' => 'view', $major['Field']['id'])); ?>
		</td>
		<td><?php echo $major['Major']['major']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $major['Major']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $major['Major']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $major['Major']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $major['Major']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Major', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fields', true), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field', true), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
	</ul>
</div>