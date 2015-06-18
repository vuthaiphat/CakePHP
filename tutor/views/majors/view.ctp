<div class="majors view">
<h2><?php  __('Major');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $major['Major']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($major['Field']['field'], array('controller' => 'fields', 'action' => 'view', $major['Field']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Major'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $major['Major']['major']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Major', true), array('action' => 'edit', $major['Major']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Major', true), array('action' => 'delete', $major['Major']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $major['Major']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields', true), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field', true), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tutordetails');?></h3>
	<?php if (!empty($major['Tutordetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tutor Id'); ?></th>
		<th><?php __('Major Id'); ?></th>
		<th><?php __('Degree Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($major['Tutordetail'] as $tutordetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tutordetail['id'];?></td>
			<td><?php echo $tutordetail['tutor_id'];?></td>
			<td><?php echo $tutordetail['major_id'];?></td>
			<td><?php echo $tutordetail['degree_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tutordetails', 'action' => 'view', $tutordetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tutordetails', 'action' => 'edit', $tutordetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tutordetails', 'action' => 'delete', $tutordetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tutordetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
