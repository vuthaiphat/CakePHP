<div class="requests index">
	<h2><?php __('Requests');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('numOfDay');?></th>
			<th><?php echo $this->Paginator->sort('numOfPeo');?></th>
			<th><?php echo $this->Paginator->sort('place');?></th>
			<th><?php echo $this->Paginator->sort('fee');?></th>
			<th><?php echo $this->Paginator->sort('sex');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($requests as $request):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $request['Request']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($request['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $request['Customer']['id'])); ?>
		</td>
		<td><?php echo $request['Request']['numOfDay']; ?>&nbsp;</td>
		<td><?php echo $request['Request']['numOfPeo']; ?>&nbsp;</td>
		<td><?php echo $request['Request']['place']; ?>&nbsp;</td>
		<td><?php echo $request['Request']['fee']; ?>&nbsp;</td>
		<td><?php echo $request['Request']['sex']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $request['Request']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $request['Request']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $request['Request']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $request['Request']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Request', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
	</ul>
</div>