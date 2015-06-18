<div class="tutors form">
<?php echo $this->Form->create('Tutor');?>
	<fieldset>
		<legend><?php __('Edit Tutor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('firstName');
		echo $this->Form->input('lastName');
		echo $this->Form->input('dateOfBirth');
		echo $this->Form->input('sex');
		echo $this->Form->input('phoneNo');
		echo $this->Form->input('identityCard');
		echo $this->Form->input('address');
		echo $this->Form->input('fee');
		echo $this->Form->input('image');
		echo $this->Form->input('Day');
		echo $this->Form->input('District');
		echo $this->Form->input('Label');
		echo $this->Form->input('Request');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tutor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tutor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('action' => 'index'));?></li>
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