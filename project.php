<?php     

    $sql = "SELECT * FROM modules WHERE id_modules =" .$_GET['project'];
    $the_module = $connect->query($sql);
    echo $connect->error;
    $nb_modules = $the_module->num_rows;

?>

<div class="row">
    <?php if ($nb_modules > 0):
        while($row = $the_module -> fetch_object()):?>
	<div class="small-12 medium-7 large-7 columns">
	<?php echo $row->content;?>
	</div>
	<div class="small-12 medium-5 large-5 columns">
		<div class="lined-list">
			<ul>
				<li><strong>Rôle:</strong> <?php echo $row->role;?></li>
				<li><strong>Responsable:</strong> <?php echo $row->responsable;?></li>
				<li><strong>Centre:</strong> <?php echo $row->centre;?></li>
				<li><strong>Année:</strong> <?php echo $row->year;?></li>
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<hr class="project-detail-hr" />
		
		<!-- Begin project image -->
		<div class="project-img">
			<img src="img/projects/<?php echo $row->img1?>" alt="<?php echo $row->alt_img1?>" />
			<h6><?php echo $row->alt_img1?></h6>
		</div>
		<!-- End project image -->
		
		<!-- Begin project image -->
		<div class="project-img">
			<img src="img/projects/<?php echo $row->img2?>" alt="<?php echo $row->alt_img2?>" />
			<!--OU <img src="img/projects/<?php echo $row->id_modules?>-3.jpg" alt="Versioning" />-->
			<h6><?php echo $row->alt_img2?></h6>
		</div>
		<!-- End project image -->
		
		<!-- Begin project image -->
		<div class="project-img">
			<img src="img/projects/<?php echo $row->img3?>" alt="<?php echo $row->alt_img3?>" />
			<h6><?php echo $row->alt_img3?></h6>
		</div>
		<!-- End project image -->
		
	</div>
</div>
<?php endwhile;?>

<?php 
else: echo "erreur404 de contenu";
endif;?>