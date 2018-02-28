<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<style>
			body{
				background:grey;
			}
			#wheelDiv {
				height: 600px;
				width: 600px;
				margin: auto;
			}
			#wheelDiv>svg {
				height: 100%;
				width: 100%;
			}
			@media (max-width: 600px) {
				#wheelDiv {
					height: 350px;
					width: 350px;
				}
			}
			@media (max-width: 400px) {
				#wheelDiv {
					height: 300px;
					width: 300px;
				}
			}
		</style>
	</head>
	<body>
		<?=$content_for_layout ?>
	</body>
</html>