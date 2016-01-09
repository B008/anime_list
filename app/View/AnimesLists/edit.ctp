<div class="animesLists form">
<?php echo $this->Form->create('AnimesList'); ?>
	<fieldset>
		<legend><?php echo __('Edit Animes List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('program_name');
		echo $this->Form->input('company');
		echo $this->Form->input('voice_actor');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('genre2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AnimesList.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AnimesList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Animes Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
