<?php     
	$sql = "SELECT * FROM modules";
	$modules_list = $connect ->query($sql);
	echo $connect->error;
	$nb_modules = $modules_list->num_rows;
?>

<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 inline-list-custom">
		
		<?php while ($row = $modules_list-> fetch_object()):?>	
			<!-- Begin project -->
			<li>
				<figure class="thumbnail">
					<div class="thumbnail-img">
						<div class="thumbnail-hover"><a href="project-<?php echo $row->id_modules;?>.html"></a></div>
						<a href="project-<?php echo $row->id_modules;?>.html"><img src="img/projects/<?php echo $row->id_modules?>-1.jpg" alt="project-<?php echo $row->id_modules;?>" /></a>
					</div>
					<figcaption class="thumbnail-caption"><a class="caption-link" href="project-<?php echo $row->id_modules;?>.html"><?php echo $row->titre;?></a></figcaption>
				</figure>
			</li>
			<!-- End project -->
			<?php endwhile;?>

		</ul>
	</div>
</div>