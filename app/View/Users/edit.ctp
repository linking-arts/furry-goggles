<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('name');
		echo $this->Form->input('role');
		echo $this->Form->input('hash_change_password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('work_phone');
		echo $this->Form->input('phone_type');
		echo $this->Form->input('street_address');
		echo $this->Form->input('additional_address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('country');
		echo $this->Form->input('race');
		echo $this->Form->input('ethnicity');
		echo $this->Form->input('gender');
		echo $this->Form->input('trep_company');
		echo $this->Form->input('trep_title');
		echo $this->Form->input('trep_founder');
		echo $this->Form->input('industry_id');
		echo $this->Form->input('stage_id');
		echo $this->Form->input('professional_company');
		echo $this->Form->input('professional_title');
		echo $this->Form->input('professional_industry');
		echo $this->Form->input('investor_company');
		echo $this->Form->input('investor_title');
		echo $this->Form->input('investor_type_id');
		echo $this->Form->input('investor_nola');
		echo $this->Form->input('investor_nola_details');
		echo $this->Form->input('investor_angellist');
		echo $this->Form->input('investor_has_invested');
		echo $this->Form->input('investor_has_invested_nola');
		echo $this->Form->input('investor_accreditation');
		echo $this->Form->input('student_education_level');
		echo $this->Form->input('student_insitution');
		echo $this->Form->input('student_institution_city');
		echo $this->Form->input('student_institution_state');
		echo $this->Form->input('who');
		echo $this->Form->input('other');
		echo $this->Form->input('completed_registration');
		echo $this->Form->input('how_heard');
		echo $this->Form->input('bio');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('badge_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
