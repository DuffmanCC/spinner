<html>

	<head>
		<title>Profile</title>
		<meta charset="UTF-8">
		<script src="https://use.fontawesome.com/eb5d24480e.js"></script>
	</head>

	<body>
		<?php 
			$elements = 5;
			$angle = 360 / $elements;
			$angle_in = $angle * -1;
			$elements++;
		 ?>	

		<style type="text/css">
			.fa{
				font-size: 60px;
			}
			.user{
				border: 1px solid black;
				width: 100px;
				height: 150px;
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
				border-radius: 5px;
				transform-origin: center center;
				position: absolute;
				z-index: 99;
				background: white;
			}
			.parent{
				top: 325px;
				right: 350px;
			}
			.family{
				width: 800px;
				height: 800px;
				border: 1px solid black;
				position: relative;
			}
			.user-rotate{
				width: 100px;
				height: 300px;
				position: absolute;
				top: 100px;
				left: 350px;
				transform-origin: bottom center;
			}
			<?php for ($i=1; $i < $elements; $i++) { 
				$neg = -1;
				echo '.user-rotate-'.$i.'{ transform: rotate('.$angle * $i.'deg); }';
				echo '.user-'.$i.'{ transform: rotate('.$angle * $i * $neg.'deg); }';
				echo '.connexion-'.$i.'{ transform: rotate('.$angle * $i.'deg); }';
			} ?>
			.user-rotate-long{
				height: 400px;
				top: 0px;
			}
			.connexions{
				position: absolute;
				left: 50px;
				top: 100px;
			}
			.connexion{
				width: 1px;
				height: 200px;
				position: absolute;
				top: 100px;
				left: 350px;
				transform-origin: bottom center;
				border-left: 1px solid black;
				z-index: 0;
			}
		</style>
		<div class="family">
			<div class="connexions">
			<?php for ($i=1; $i < $elements; $i++): ?>
				<div class="connexion-<?php echo $i ?> connexion"></div>
			<?php endfor ?>				
			</div>
			<div class="user parent">
				<i class="fa fa-user-o" aria-hidden="true"></i>
				<div class="name">Parent</div>
				<div class="description">Description</div>
			</div>
			<?php for ($i=1; $i < $elements; $i++): ?>
				<div class="user-rotate-<?php echo $i ?> user-rotate <?php if ($i % 2 == 0) { echo 'user-rotate-long_x'; } ?>">
					<div class="user user-<?php echo $i ?>">
						<i class="fa fa-user-o" aria-hidden="true"></i>
						<div class="name">Name <?php echo $i ?></div>
						<div class="description">Description</div>
					</div>				
				</div>
			<?php endfor ?>
		</div>
	</body>

</html>