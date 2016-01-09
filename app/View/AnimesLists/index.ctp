<div class="animesLists index">
	<h2><?php echo __('Animes Lists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('program_name'); ?></th>
			<th><?php echo $this->Paginator->sort('company'); ?></th>
			<th><?php echo $this->Paginator->sort('voice_actor'); ?></th>
			<th><?php echo $this->Paginator->sort('genre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('genre2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($animesLists as $animesList): ?>
	<tr>
		<td><?php echo h($animesList['AnimesList']['id']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['created']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['modified']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['program_name']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['company']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['voice_actor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($animesList['Genre']['genre_name'], array('controller' => 'genres', 'action' => 'view', $animesList['Genre']['id'])); ?>
		</td>
		<td><?php echo h($animesList['AnimesList']['genre2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $animesList['AnimesList']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $animesList['AnimesList']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $animesList['AnimesList']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $animesList['AnimesList']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Animes List'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
