<div class="fields view">
<h2><?php  __('Field');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $field['Field']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $field['Field']['field']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Field', true), array('action' => 'edit', $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Field', true), array('action' => 'delete', $field['Field']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('controller' => 'majors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Majors');?></h3>
	<?php if (!empty($field['Major'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Field Id'); ?></th>
		<th><?php __('Major'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($field['Major'] as $major):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $major['id'];?></td>
			<td><?php echo $major['field_id'];?></td>
			<td><?php echo $major['major'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'majors', 'action' => 'view', $major['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'majors', 'action' => 'edit', $major['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'majors', 'action' => 'delete', $major['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $major['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
