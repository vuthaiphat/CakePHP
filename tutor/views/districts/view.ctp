<div class="districts view">
<h2><?php  __('District');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $district['District']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('District'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $district['District']['district']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($district['City']['city'], array('controller' => 'cities', 'action' => 'view', $district['City']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit District', true), array('action' => 'edit', $district['District']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete District', true), array('action' => 'delete', $district['District']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $district['District']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tutors');?></h3>
	<?php if (!empty($district['Tutor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('FirstName'); ?></th>
		<th><?php __('LastName'); ?></th>
		<th><?php __('DateOfBirth'); ?></th>
		<th><?php __('Sex'); ?></th>
		<th><?php __('PhoneNo'); ?></th>
		<th><?php __('IdentityCard'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Fee'); ?></th>
		<th><?php __('Image'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($district['Tutor'] as $tutor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tutor['id'];?></td>
			<td><?php echo $tutor['email'];?></td>
			<td><?php echo $tutor['password'];?></td>
			<td><?php echo $tutor['firstName'];?></td>
			<td><?php echo $tutor['lastName'];?></td>
			<td><?php echo $tutor['dateOfBirth'];?></td>
			<td><?php echo $tutor['sex'];?></td>
			<td><?php echo $tutor['phoneNo'];?></td>
			<td><?php echo $tutor['identityCard'];?></td>
			<td><?php echo $tutor['address'];?></td>
			<td><?php echo $tutor['fee'];?></td>
			<td><?php echo $tutor['image'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tutors', 'action' => 'view', $tutor['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tutors', 'action' => 'edit', $tutor['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tutors', 'action' => 'delete', $tutor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tutor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
