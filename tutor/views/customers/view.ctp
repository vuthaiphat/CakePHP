<div class="customers view">
<h2><?php  __('Customer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FullName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['fullName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PhoneNo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['phoneNo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['email']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer', true), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Customer', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests', true), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request', true), array('controller' => 'requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Requests');?></h3>
	<?php if (!empty($customer['Request'])):?>
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
		foreach ($customer['Request'] as $request):
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
