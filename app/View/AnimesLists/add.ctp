<div class="animesLists form">
<?php echo $this->Form->create('AnimesList'); ?>
	<fieldset>
		<legend><?php echo __('Add Animes List'); ?></legend>
	<?php
		echo $this->Form->input('program_name');
		echo $this->Form->input('company');
		echo $this->Form->input('voice_actor');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('genre2');
		echo $this->Form->input('televising_year');
		echo $this->Form->input('picture_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Animes Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
