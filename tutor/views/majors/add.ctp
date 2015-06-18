<div class="majors form">
<?php echo $this->Form->create('Major');?>
	<fieldset>
		<legend><?php __('Add Major'); ?></legend>
	<?php
		echo $this->Form->input('field_id');
		echo $this->Form->input('major');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Majors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Fields', true), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field', true), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
	</ul>
</div>