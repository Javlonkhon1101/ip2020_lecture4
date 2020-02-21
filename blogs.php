<?php  include('header.php'); ?>

<h2>My Blog Posts</h2>
	<?php  
		 	// $post = file_get_contents('./posts/post1.txt');
		 	// print $post;

		 	// file_put_contents('./posts/post1.txt', "\nAccessed!", FILE_APPEND);
	?>
	
	<?php  
		$postPaths = glob("./posts/post*.txt");	
		foreach($postPaths as $postPath) {
	?>
			<?php  $lines = file($postPath); ?>
			<h3><?= $lines[0] ?></h3>
			<?php for($i=1;$i<count($lines);$i++) { ?>
				<p>
					<?=  $lines[$i] ?>
				</p>
			<?php } ?>
			<p><span class="lastModified">Last Modified: <?= date("F d Y H:i:s.", filemtime($postPath)) ?></span></p>

			
	<?php } ?>

<?php  include('footer.php'); ?>