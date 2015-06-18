<div class="days index">
	<h2><?php __('Days');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('day');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($days as $day):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $day['Day']['id']; ?>&nbsp;</td>
		<td><?php echo $day['Day']['day']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $day['Day']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $day['Day']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $day['Day']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $day['Day']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Day', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
	</ul>
</div>