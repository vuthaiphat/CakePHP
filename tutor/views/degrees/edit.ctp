<div class="degrees form">
<?php echo $this->Form->create('Degree');?>
	<fieldset>
		<legend><?php __('Edit Degree'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('degree');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Degree.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Degree.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Degrees', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tutordetails', true), array('controller' => 'tutordetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutordetail', true), array('controller' => 'tutordetails', 'action' => 'add')); ?> </li>
	</ul>
</div>