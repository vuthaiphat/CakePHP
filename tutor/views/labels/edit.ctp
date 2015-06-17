<div class="labels form">
<?php echo $this->Form->create('Label');?>
	<fieldset>
		<legend><?php __('Edit Label'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('Tutor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Label.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Label.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Labels', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
	</ul>
</div>