<div class="reviews view">
<h2><?php echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($review['Review']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($review['Review']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Animes Lists'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['AnimesLists']['id'], array('controller' => 'animes_lists', 'action' => 'view', $review['AnimesLists']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Rank'); ?></dt>
		<dd>
			<?php echo h($review['Review']['review_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reviews'); ?></dt>
		<dd>
			<?php echo h($review['Review']['reviews']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['Users']['id'], array('controller' => 'users', 'action' => 'view', $review['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['id']), array(), __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Animes Lists'), array('controller' => 'animes_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animes Lists'), array('controller' => 'animes_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
