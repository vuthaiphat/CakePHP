<div class="days form">
<?php echo $this->Form->create('Day');?>
	<fieldset>
		<legend><?php __('Add Day'); ?></legend>
	<?php
		echo $this->Form->input('day');
		echo $this->Form->input('Tutor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Days', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tutors', true), array('controller' => 'tutors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutor', true), array('controller' => 'tutors', 'action' => 'add')); ?> </li>
	</ul>
</div>