<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('hash_change_password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('work_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_type'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('race'); ?></th>
			<th><?php echo $this->Paginator->sort('ethnicity'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('trep_company'); ?></th>
			<th><?php echo $this->Paginator->sort('trep_title'); ?></th>
			<th><?php echo $this->Paginator->sort('trep_founder'); ?></th>
			<th><?php echo $this->Paginator->sort('industry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('professional_company'); ?></th>
			<th><?php echo $this->Paginator->sort('professional_title'); ?></th>
			<th><?php echo $this->Paginator->sort('professional_industry'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_company'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_title'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_nola'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_nola_details'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_angellist'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_has_invested'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_has_invested_nola'); ?></th>
			<th><?php echo $this->Paginator->sort('investor_accreditation'); ?></th>
			<th><?php echo $this->Paginator->sort('student_education_level'); ?></th>
			<th><?php echo $this->Paginator->sort('student_insitution'); ?></th>
			<th><?php echo $this->Paginator->sort('student_institution_city'); ?></th>
			<th><?php echo $this->Paginator->sort('student_institution_state'); ?></th>
			<th><?php echo $this->Paginator->sort('who'); ?></th>
			<th><?php echo $this->Paginator->sort('other'); ?></th>
			<th><?php echo $this->Paginator->sort('completed_registration'); ?></th>
			<th><?php echo $this->Paginator->sort('how_heard'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('badge_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['hash_change_password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['work_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone_type']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['additional_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['country']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['race']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ethnicity']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['trep_company']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['trep_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['trep_founder']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['industry_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['stage_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['professional_company']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['professional_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['professional_industry']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_company']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_type_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_nola']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_nola_details']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_angellist']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_has_invested']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_has_invested_nola']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['investor_accreditation']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['student_education_level']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['student_insitution']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['student_institution_city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['student_institution_state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['who']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['other']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['completed_registration']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['how_heard']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bio']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['partner_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['badge_type_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Registration'), array('action' => 'register')); ?></li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
