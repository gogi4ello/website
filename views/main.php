<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading panel-title">The hot 100</div>
	<!-- List group -->
	<ul class="list-group">
		<?php foreach($results as $item) : ?>
		<li class="list-group-item list-group-item-custom">
            <a href="/<?= urlclean($item->artist . ' ' . $item->chart_item_title, '-'); ?>.html" class="list-group-href"><strong class="track_title"><?= $item->chart_item_title; ?></strong><br><span class="artist_name"><?= $item->artist; ?></span></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>