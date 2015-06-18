<div class="tutors index">
	<h2><?php __('Tutors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('firstName');?></th>
			<th><?php echo $this->Paginator->sort('lastName');?></th>
			<th><?php echo $this->Paginator->sort('dateOfBirth');?></th>
			<th><?php echo $this->Paginator->sort('sex');?></th>
			<th><?php echo $this->Paginator->sort('phoneNo');?></th>
			<th><?php echo $this->Paginator->sort('identityCard');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('fee');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tutors as $tutor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tutor['Tutor']['id']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['email']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['password']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['firstName']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['lastName']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['dateOfBirth']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['sex']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['phoneNo']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['identityCard']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['address']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['fee']; ?>&nbsp;</td>
		<td><?php echo $tutor['Tutor']['image']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tutor['Tutor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tutor['Tutor']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tutor['Tutor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tutor['Tutor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tutor', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Days', true), array('controller' => 'days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day', true), array('controller' => 'days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts', true), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District', true), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labels', true), array('controller' => 'labels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label', true), array('controller' => 'labels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests', true), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request', true), array('controller' => 'requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>