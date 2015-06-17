<div class="tutordetails form">
<?php echo $this->Form->create('Tutordetail');?>
	<fieldset>
		<legend><?php __('Edit Tutordetail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tutor_id');
		echo $this->Form->input('major_id');
		echo $this->Form->input('degree_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tutordetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tutordetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('controller' => 'majors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees', true), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree', true), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
	</ul>
</div>