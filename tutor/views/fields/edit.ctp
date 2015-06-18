<div class="fields form">
<?php echo $this->Form->create('Field');?>
	<fieldset>
		<legend><?php __('Edit Field'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('field');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Field.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Field.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fields', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Majors', true), array('controller' => 'majors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Major', true), array('controller' => 'majors', 'action' => 'add')); ?> </li>
	</ul>
</div>