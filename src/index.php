<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<link rel="icon" href="./assets/potential.svg" />
	<title>Potential - Home</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Potential, home of the unknown!" />
	<meta name="keywords" content="ws,potential" />

	<meta name="metro4:init" content="false">

	<!-- CSS-->
	<link rel="stylesheet" href="./css/libs/metro-all.min.css">
	<link rel="stylesheet" href="./css/libs/metro-theme.css">

	<style>


	</style>
</head>

<body class="h-100">
	<div class="h-100" id="app">
		<!-- Master Navigation -->
		<?php include './components/navigation.php'; ?>

		<!-- Master Content -->
		<main class="pt-13">
			<div data-role="carousel" data-auto-start="true" data-bullet-style="circle" data-effect="fade" data-period="3000" data-duration="500" style="max-height: 100%; background-color: rgba(0, 0, 0, 0);">
				<div v-for="(url, name) in {'Eye of Potential': './assets/art/Eye%20Of%20Potential.jpg', 'Kingdom Heart\'s Sky': './assets/art/Kingdom%20Hearts%20Sky.jpg', 'Pierce the Veil': './assets/design/Pierce%20The%20Veil.jpg'}" class="slide h-100 p-10 fg-white d-flex flex-content-end flex-justify-center flex-wrap" :data-cover="url">
					<span style="font-size: 3vw;"> {{ name }} </span>
				</div>
			</div>

			<div class="m-3">
				<div class="mb-3 d-flex flex-justify-start border-bottom border-size-3 bd-lightGray">
					<!-- LEFT -->
					<div class="ml-3">
						<h2>Works</h2>
					</div>

					<!-- RIGHT -->
			    <div class="ml-auto mr-3">
						<button onclick="" title="View all" class="image-button">
							<span class="icon mif-plus"></span>
							<span class="caption">View all</span>
						</button>
					</div>
				</div>

				<div class="d-flex-column-sm d-flex-md">
					<div v-for="item in [1, 2, 3, 4, 5]" class="m-2 card image-header">
						<div class="card-header fg-white" style="background-image: url();">
							NAME
						</div>
						<div class="card-content p-2">
							<p class="fg-gray">DATE</p>
							DESCRIPTION
						</div>
						<div class="card-footer">
							<button onclick="" title="Preview" class="mt-2 image-button">
								<span class="icon mif-eye"></span>
								<span class="caption">Preview</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Master Footer -->
		<?php include './components/footer.php'; ?>
	</div>

	<!-- JS -->
	<script src="./js/libs/jquery-3.3.1.min.js"></script>
	<script src="./js/libs/metro.min.js"></script>
	<script src="./js/libs/vue.min.js"></script>

	<script src="./js/gui.js"></script>
</body>

</html>
