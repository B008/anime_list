<div class="genres view">
<h2><?php echo __('Genre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre Name'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['genre_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Genres'), array('action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('List Animes Lists'), array('controller' => 'animes_lists', 'action' => 'index')); ?> </li>

	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Animes Lists'); ?></h3>
	<?php if (!empty($genre['AnimesList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>

		<th><?php echo __('Program Name'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Voice Actor'); ?></th>
		<th><?php echo __('Genre Id'); ?></th>
		<th><?php echo __('Genre2'); ?></th>

	</tr>
	<?php foreach ($genre['AnimesList'] as $animesList): ?>
		<tr>

			<td><?php echo $animesList['program_name']; ?></td>
			<td><?php echo $animesList['company']; ?></td>
			<td><?php echo $animesList['voice_actor']; ?></td>
			<td><?php echo $animesList['genre_id']; ?></td>
			<td><?php echo $animesList['genre2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'animes_lists', 'action' => 'view', $animesList['id'])); ?>
				<?php echo $this->Html->link(('Edit'), array('controller' => 'animes_lists', 'action' => 'edit', $animesList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'animes_lists', 'action' => 'delete', $animesList['id']), array(), __('Are you sure you want to delete # %s?', $animesList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
