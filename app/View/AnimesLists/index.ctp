<div class="animesLists index">
	<div id="nav">
		<ul>
			<li><a href="">秘密の部屋</a></li>
		</ul>
	</div>
	<h2>今日の日付は
		<?php echo date('Y年m月d日'); ?>
		です。</h2>
	<p><?php echo __('
| 最終更新日：2016/01/14 |　'); ?></p>
	<p><?php echo __('
新作TVアニメの放送開始日,放送局一覧を載せてます。詳細は公式サイトでの確認をお願いします。
間違っている箇所があれば『お問い合わせフォーム』から知らせて頂けるとありがたいです。
	'); ?></p>


	<p><?php echo __('※基本的に再放送は掲載していません。'); ?></p>
	<p><?php echo __('⇒ 今までの作品リストへ'); ?></p>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('サムネ'); ?></th>
			<th><?php echo $this->Paginator->sort('タイトル'); ?></th>
			<th><?php echo $this->Paginator->sort('制作会社'); ?></th>
			<th><?php echo $this->Paginator->sort('声優'); ?></th>
			<th><?php echo $this->Paginator->sort('ジャンル'); ?></th>
			<th><?php echo $this->Paginator->sort('サブジャンル'); ?></th>
			<th><?php echo $this->Paginator->sort('放映日'); ?></th>


	</tr>
	</thead>
	<tbody>
	<?php foreach ($animesLists as $animesList): ?>
	<tr>
		<td id="pic" align="center"><?php echo  $this->Html->image( h($animesList['AnimesList']['picture_url'])); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['program_name']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['company']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['voice_actor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($animesList['Genre']['genre_name'], array('controller' => 'genres', 'action' => 'view', $animesList['Genre']['id'])); ?>
		</td>
		<td><?php echo h($animesList['AnimesList']['genre2']); ?>&nbsp;</td>
		<td><?php echo h($animesList['AnimesList']['televising_year']); ?>&nbsp;</td>



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

