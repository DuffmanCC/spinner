<html>

	<head>
		<title>Spiner</title>
		<meta charset="UTF-8">
	</head>

	<body>
	
	<?php 

	$slider_one = $_GET['slider_one'];
	$slider_two = $_GET['slider_two'];
	$slider_three = $_GET['slider_three'];
	$slider_four = $_GET['slider_four'];

	$slider_one_array = str_split($slider_one, 1);
	$slider_two_array = str_split($slider_two, 1);
	$slider_three_array = str_split($slider_three, 1);
	$slider_four_array = str_split($slider_four, 1);

	?>

	<style type="text/css">
		.spiner-wrapper{
			width: 400px;
			height: 400px;
			/*border: 1px solid green;*/
			position: relative;
			top: 100px;
			left: 100px;
		}
		.slider{
			position: absolute;
			/*border: 1px solid blue;*/
			height: 200px;
			width: 200px;
		}
		.char{
			border: 1px solid red;
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
			left: 200px;
		}
		.slider-two{
			top: 200;
			left: 200px;
			transform-origin: center center;
			transform: rotate(90deg);
		}
		.slider-three{
			top: 200px;
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
			top: -10px;
			left: 0px;
		}
		.slider-inner-three{
			transform-origin: bottom left;
			<?php $deg_3x = ((90 - $deg_3) / 2); ?>
			transform: rotate(<?php echo $deg_3x ?>deg);
			top: -10px;
		}
		.slider-inner-four{
			transform-origin: bottom left;
			<?php $deg_4x = ((90 - $deg_4) / 2); ?>
			transform: rotate(<?php echo $deg_4x ?>deg);
			top: -10px;
			left: -10px;
		}
		.circle-ext{
			border: 2px solid black;
			width: 430px;
			height: 430px;
			top: -13px;
			left: -17px;
			position: absolute;
			border-radius: 50%;
		}
		.circle-int{
			border: 2px solid black;
			width: 350px;
			height: 350px;
			top: 24px;
			left: 22px;
			position: absolute;
			border-radius: 50%;			
		}
		<?php $angle = [15, 75, 90, 105, 165, 180, 195, 255, 270, 285, 345, 360] ?>
		<?php $k = $angle[array_rand($angle, 1)]; ?>
		<?php $rand_number = $k +3240; ?>
		.arrow{
			width: 50px;
			height: 50px;
			position: absolute;
			top: 170px;
			left: 180px;
			transform-origin: center center;
			transform: rotate(<?php echo $rand_number ?>deg);
			-webkit-animation: spin 5s ease-out;
		}
		@keyframes spin {
		    from {transform:rotate(0deg);}
		    to {transform:rotate(<?php echo $rand_number ?>deg);}
		}
	</style>
		<div class="inputs">
			<form>
				<p>
					<label>Slide 1:</label>
					<input type="text" name="slider_one">
				</p>
				<p>
					<label>Slide 2:</label>
					<input type="text" name="slider_two">
				</p>
				<p>
					<label>Slide 3:</label>
					<input type="text" name="slider_three">
				</p>
				<p>
					<label>Slide 4:</label>
					<input type="text" name="slider_four">
				</p>
				<p>
					<input type="submit" name="submit" value="Send">
				</p>
			</form>
		</div>
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

			<div class="circle-ext"></div>
			<div class="circle-int"></div>
			<div class="arrow"><img src="navigation.svg"></div>

		</div>
	</body>

</html>