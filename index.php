<html>

	<head>
		<title>Spiner</title>
		<meta charset="UTF-8">
	</head>

	<body>
	<?php 

	// string
	// index.php?slider_one=jamon&slider_two=queso&slider_three=atun&slider_four=chorizo

	$slider_one = $_GET['slider_one'];
	$slider_two = $_GET['slider_two'];
	$slider_three = $_GET['slider_three'];
	$slider_four = $_GET['slider_four'];

	$slider_one_array = str_split($slider_one, 1);
	$slider_two_array = str_split($slider_two, 1);
	$slider_three_array = str_split($slider_three, 1);
	$slider_four_array = str_split($slider_four, 1);

/*	print_r($slider_one_array);
	print_r($slider_two_array);
	print_r($slider_three_array);
	print_r($slider_four_array);*/

	?>

	<style type="text/css">
		.spiner-wrapper{
			width: 408px;
			height: 408px;
			border: 1px solid green;
			position: relative;
		}
		.slider{
			position: absolute;
			/*border: 1px solid blue;*/
			height: 202px;
			width: 202px;
		}
		.char{
			/*border: 1px solid red;*/
			height: 200px;
			position: absolute;
			width: 20px;
			left: 0;
			top: 0;
			transform-origin: bottom center;
			text-align: center;
		}
		<?php for ($i=0; $i < count($slider_one_array); $i++) { 
			$deg_1 = $i * 6;
			echo '.slider-one .char-'.$i.'{ transform: rotate('.$deg_1.'deg); }';
		} ?>
		<?php for ($i=0; $i < count($slider_two_array); $i++) { 
			$deg_2 = $i * 6;
			echo '.slider-two .char-'.$i.'{ transform: rotate('.$deg_2.'deg); }';
		} ?>
		<?php for ($i=0; $i < count($slider_three_array); $i++) { 
			$deg_3 = $i * 6;
			echo '.slider-three .char-'.$i.'{ transform: rotate('.$deg_3.'deg); }';
		} ?>
		<?php for ($i=0; $i < count($slider_four_array); $i++) { 
			$deg_4 = $i * 6;
			echo '.slider-four .char-'.$i.'{ transform: rotate('.$deg_4.'deg); }';
		} ?>
		.slider-one{
			top: 0;
			left: 204px;
		}
		.slider-two{
			top: 204;
			left: 204px;
			transform-origin: center center;
			transform: rotate(90deg);
		}
		.slider-three{
			top: 204px;
			left: 0px;
			transform-origin: center center;
			transform: rotate(180deg);
		}
		.slider-four{
			top: 0;
			left: 0;
			transform-origin: center center;
			transform: rotate(270deg);
		}
		.slider-inner{
			position: absolute;
			width: 200px;
			height: 200px;
			/*border: 1px solid green;*/
		}
		.slider-inner-one{
			transform-origin: bottom left;
			<?php $deg_1x = ((90 - $deg_1) / 2); ?>
			transform: rotate(<?php echo $deg_1x ?>deg);
		}
		.slider-inner-two{
			transform-origin: bottom left;
			<?php $deg_2x = ((90 - $deg_2) / 2); ?>
			transform: rotate(<?php echo $deg_2x ?>deg);
		}
		.slider-inner-three{
			transform-origin: bottom left;
			<?php $deg_3x = ((90 - $deg_3) / 2); ?>
			transform: rotate(<?php echo $deg_3x ?>deg);
		}
		.slider-inner-four{
			transform-origin: bottom left;
			<?php $deg_4x = ((90 - $deg_4) / 2); ?>
			transform: rotate(<?php echo $deg_4x ?>deg);
		}
	</style>
		<div class="spiner-wrapper">

			<div class="slider-one slider">
				<div class="slider-inner-one slider-inner">
					<?php for ($i=0; $i < count($slider_one_array); $i++) { 
						echo '<span class="char char-'.$i.'">'.$slider_one_array[$i].'</span>';
					} ?>					
				</div>
			</div>

			<div class="slider-two slider">
				<div class="slider-inner-two slider-inner">
					<?php for ($i=0; $i < count($slider_two_array); $i++) { 
						echo '<span class="char char-'.$i.'">'.$slider_two_array[$i].'</span>';
					} ?>
				</div>
			</div>

			<div class="slider-three slider">
				<div class="slider-inner-three slider-inner">
					<?php for ($i=0; $i < count($slider_three_array); $i++) { 
						echo '<span class="char char-'.$i.'">'.$slider_three_array[$i].'</span>';
					} ?>
				</div>
			</div>

			<div class="slider-four slider">
				<div class="slider-inner-four slider-inner">
					<?php for ($i=0; $i < count($slider_four_array); $i++) { 
						echo '<span class="char char-'.$i.'">'.$slider_four_array[$i].'</span>';
					} ?>
				</div>
			</div>

		</div>
	</body>

</html>