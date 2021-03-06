<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('primary_fname');
		echo $this->Form->input('primary_lname');
		echo $this->Form->input('secondary_fname');
		echo $this->Form->input('secondary_lname');
		echo $this->Form->input('title_id');
		echo $this->Form->input('title2_id');
		echo $this->Form->input('email');
		echo $this->Form->input('phone_1');
		echo $this->Form->input('phone_1_type');
		echo $this->Form->input('phone_2');
		echo $this->Form->input('phone_2_type');
		echo $this->Form->input('wedding_date');
		echo $this->Form->input('street_1');
		echo $this->Form->input('street_2');
		echo $this->Form->input('zip');
		echo $this->Form->input('status');
		echo $this->Form->input('referral_source');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Title2s'), array('controller' => 'title2s', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title2'), array('controller' => 'title2s', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Notes'), array('controller' => 'contact_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Note'), array('controller' => 'contact_notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Activities'), array('controller' => 'time_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Activity'), array('controller' => 'time_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
