<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Add Review'); ?></legend>
	<?php
		echo $this->Form->input('animes_list_id');
		echo $this->Form->input('review_rank');
		echo $this->Form->input('review');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Animes Lists'), array('controller' => 'animes_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animes List'), array('controller' => 'animes_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>