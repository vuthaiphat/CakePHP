<div class="tutors form">
<?php echo $this->Form->create('Tutor');?>
	<fieldset>
		<legend><?php __('Add Tutor'); ?></legend>
	<?php
		echo $this->Form->input('email', array('label' => 'email (username)'));
		echo $this->Form->input('password');
		echo $this->Form->input('password1', array('label' => 'Nhập lại password *','type'=>'password'));
		echo $this->Form->input('firstName', array('label' => 'Họ Lót'));
		echo $this->Form->input('lastName', array('label' => 'Tên'));
		echo $this->Form->input('dateOfBirth', array('label' => 'Ngày Sinh', 'minYear' => '1955', 'maxYear' => '1997'));
		echo $this->Form->input('sex', array('label' => 'Giới Tính', 'options' => array('Nam', 'Nữ')));
		//echo $this->Form->input('gioiTinhNam', array('label' => 'Giới Tính *', 'options' => array('Nam', 'Nữ')));
		echo $this->Form->input('phoneNo', array('label' => 'Số Điện Thoại'));
		echo $this->Form->input('identityCard', array('label' => 'Số CMND'));
		echo $this->Form->input('address', array('label' => 'Địa Chỉ'));
		echo $this->Form->input('fee', array('label' => 'Học Phí Mong Muốn (Nếu Có)'));
		echo $this->Form->input('image', array('label' => 'Ảnh Đại Diện (Nếu Có)'));
		echo $this->Form->input('Day', array('label' => 'Chọn Ngày Có Thể Dạy', 'type' => 'select', 'multiple' => 'checkbox'));
		echo $this->Form->input('District');
		echo $this->Form->input('Label', array('label' => 'Chọn Lớp Có Thể Dạy'));
		//echo $this->Form->input('Request');
		echo $this->Form->input('Subject', array('label' => 'Chọn Môn Có Thể Dạy'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

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