<div class="tutordetails index">
	<h2><?php __('Tutordetails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tutor_id');?></th>
			<th><?php echo $this->Paginator->sort('major_id');?></th>
			<th><?php echo $this->Paginator->sort('degree_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tutordetails as $tutordetail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tutordetail['Tutordetail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tutordetail['Tutor']['id'], array('controller' => 'tutors', 'action' => 'view', $tutordetail['Tutor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tutordetail['Major']['major'], array('controller' => 'majors', 'action' => 'view', $tutordetail['Major']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tutordetail['Degree']['degree'], array('controller' => 'degrees', 'action' => 'view', $tutordetail['Degree']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tutordetail['Tutordetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tutordetail['Tutordetail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tutordetail['Tutordetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tutordetail['Tutordetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('controller' => 'majors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees', true), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree', true), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
	</ul>
</div>