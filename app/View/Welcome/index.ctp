<center>
	<div id="myCarousel" class="carousel slide">
	  <div class="carousel-inner" align="center">
	  	<?php
	  	$active = 'active';
	  	foreach ($images as $key => $value) {
	  		if($value['Picture']['dir'] != 'img/capa')
	  			$value['Picture']['dir'] = 'img/pictures/'.$value['Picture']['dir'];
	  		echo '<div class="'.$active.' item"><img src="'.$value['Picture']['dir'].'/'.$value['Picture']['picture_path'].'" alt=""></div>';
	  		$active = null;
	  	}
	  	?>
	  </div>
	  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><div class="control1">&lsaquo;</div></a>
	  <a class="carousel-control right" href="#myCarousel" data-slide="next"><div class="control1">&rsaquo;</div></a>
	</div>
</center>