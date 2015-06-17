<div class="fields form">
<?php echo $this->Form->create('Field');?>
	<fieldset>
		<legend><?php __('Add Field'); ?></legend>
	<?php
		echo $this->Form->input('field');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fields', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('controller' => 'majors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add')); ?> </li>
	</ul>
</div>