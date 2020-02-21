<?php  include('header.php'); ?>

	<h2>My Favorite Movies <?= count($movies) ?></h2>
	<ul>
		<?php foreach($movies as $movie) { ?>
			<li><?= $movie ?></li>
		<?php } ?>
	</ul>
	<p>
		<?php print_r($movies) ?>
	</p>
	<p>
		<?= array_sum(range(10,20)) ?>	
	</p>
	<h3>
		<?php print_separated("Hello", "-") ?>
	</h3>

<?php  
	include('footer.php');
?>












