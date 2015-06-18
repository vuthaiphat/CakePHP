<div class="tutors view">
<h2><?php  __('Tutor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FirstName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['firstName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LastName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['lastName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DateOfBirth'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['dateOfBirth']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sex'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['sex']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PhoneNo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['phoneNo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('IdentityCard'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['identityCard']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['fee']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tutor['Tutor']['image']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tutor', true), array('action' => 'edit', $tutor['Tutor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tutor', true), array('action' => 'delete', $tutor['Tutor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tutor['Tutor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Tutordetails');?></h3>
	<?php if (!empty($tutor['Tutordetail'])):?>
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
		foreach ($tutor['Tutordetail'] as $tutordetail):
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
<div class="related">
	<h3><?php __('Related Days');?></h3>
	<?php if (!empty($tutor['Day'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Day'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tutor['Day'] as $day):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $day['id'];?></td>
			<td><?php echo $day['day'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'days', 'action' => 'view', $day['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'days', 'action' => 'edit', $day['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'days', 'action' => 'delete', $day['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $day['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Day', true), array('controller' => 'days', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Districts');?></h3>
	<?php if (!empty($tutor['District'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('District'); ?></th>
		<th><?php __('City Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tutor['District'] as $district):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $district['id'];?></td>
			<td><?php echo $district['district'];?></td>
			<td><?php echo $district['city_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'districts', 'action' => 'view', $district['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'districts', 'action' => 'edit', $district['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'districts', 'action' => 'delete', $district['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $district['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New District', true), array('controller' => 'districts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Labels');?></h3>
	<?php if (!empty($tutor['Label'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Label'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tutor['Label'] as $label):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $label['id'];?></td>
			<td><?php echo $label['label'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'labels', 'action' => 'view', $label['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'labels', 'action' => 'edit', $label['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'labels', 'action' => 'delete', $label['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $label['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Label', true), array('controller' => 'labels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Requests');?></h3>
	<?php if (!empty($tutor['Request'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('NumOfDay'); ?></th>
		<th><?php __('NumOfPeo'); ?></th>
		<th><?php __('Place'); ?></th>
		<th><?php __('Fee'); ?></th>
		<th><?php __('Sex'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tutor['Request'] as $request):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $request['id'];?></td>
			<td><?php echo $request['customer_id'];?></td>
			<td><?php echo $request['numOfDay'];?></td>
			<td><?php echo $request['numOfPeo'];?></td>
			<td><?php echo $request['place'];?></td>
			<td><?php echo $request['fee'];?></td>
			<td><?php echo $request['sex'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'requests', 'action' => 'view', $request['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'requests', 'action' => 'edit', $request['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'requests', 'action' => 'delete', $request['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $request['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Request', true), array('controller' => 'requests', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Subjects');?></h3>
	<?php if (!empty($tutor['Subject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Subject'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tutor['Subject'] as $subject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subject['id'];?></td>
			<td><?php echo $subject['subject'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
