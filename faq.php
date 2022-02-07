<!DOCTYPE html>
<html lang="en">

<head>
	<?php include './includes/links.php' ?>
</head>

<body>
	<?php include './includes/top-section.php' ?>

	<!-- banner header -->
	<header>
		<img src="/assets/banner-header-2.png" class="w-full lg:aspect-[9/2] aspect-[9/4] object-cover">
	</header>

	<main class="container py-16">
		<h1 class="font-bold lg:text-4xl text-2xl text-center mb-8">FREQUENTLY ASKED QUESTION</h1>
		<p class="text-lg leading-relaxed text-center mb-16 lg:w-1/2 mx-auto">Pertanyaan seputar Direktorat Jendral Prasarana dan Sarana Pertanian Kementrian Pertanian Republik Indonesia</p>

		<!-- faq accordion -->
		<?php foreach (range(1, 10) as $i) { ?>
			<article class="collapse collapse-plus border-b border-gray-200">
				<input type="checkbox">
				<h2 class="collapse-title font-bold text-gray-600 py-6 capitalize" data-lorem="4-8w"></h2>
				<div class="collapse-content prose">
					<h3 class="capitalize mt-8" data-lorem="6-10w"></h3>
					<div data-lorem="2-3p"></div>
					<h3 class="capitalize" data-lorem="6-10w"></h3>
					<div data-lorem="2-3p"></div>
				</div>
			</article>
		<?php } ?>
	</main>

	<?php include './includes/bottom-section.php' ?>
	<?php include './includes/scripts.php' ?>
	<script src="/lib/loremjs/lorem.js"></script>
</body>

</html>