<div class="users form">
<?php echo $this->Form->create('User', array('action'=>'register')); ?>
	<fieldset>
		<legend><?php echo __('Add User Registration'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('reservation_type_id',array('value'=>107931,'type'=>'number'));
		echo $this->Form->input('event_id', array('value'=>24570,'type'=>'number'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
