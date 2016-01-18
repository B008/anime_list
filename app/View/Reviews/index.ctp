<div class="reviews index">
	<h2><?php echo __('Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('animes_list_id'); ?></th>
			<th><?php echo $this->Paginator->sort('review_rank'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['created']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['AnimesList']['program_name'], array('controller' => 'animes_lists', 'action' => 'view', $review['AnimesList']['id'])); ?>
		</td>
		<td><?php echo h($review['Review']['review_rank']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['review']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['User']['user_name'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['Review']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Animes Lists'), array('controller' => 'animes_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animes List'), array('controller' => 'animes_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>