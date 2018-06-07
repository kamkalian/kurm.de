<?php
/*
Template Name: Messwarte Template
*/

include "ESP8266API.php";

?>
<?php get_header(); ?>

<div id="main">

	<h1 class="text"><?php the_title(); ?></h1>
	<?php
		
	
		if(post_password_required()){
			echo my_password_form();
		}else{
			
		?>
		<div class="row">
		<div class="col oneThird">
			<div class="zimmer">
			Kinderzimmer
			<?php 
			$d = ESP8266API::getLastValueFrom(2);
			echo $d['msrTemp']."°C, ".$d['msrHum']."%rH";
			?>
			</div>
			<div class="zimmer">
			Wohnzimmer
			<?php 
			$d = ESP8266API::getLastValueFrom(4);
			echo $d['msrTemp']."°C, ".$d['msrHum']."%rH";
			?>
			</div>
		</div>
		<div class="col oneThird">
			<div class="zimmer">Flur</div>
			<div class="zimmer">Badezimmer</div>
		</div>
		<div class="col oneThird">
			<div class="zimmer">
			Schlafzimmer
			<?php 
			$d = ESP8266API::getLastValueFrom(1);
			echo $d['msrTemp']."°C, ".$d['msrHum']."%rH";
			//ESP8266API::showReport(1);
			?>
			</div>
			<div class="zimmer">
			Küche
			<?php 
			$d = ESP8266API::getLastValueFrom(3);
			echo $d['msrTemp']."°C, ".$d['msrHum']."%rH";
			?>
			</div>
		</div>
		
	</div><?php 
			
			
		}?>

	
	
	
	
</div>
<?php get_footer(); ?>
