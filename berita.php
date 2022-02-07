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

	<section class="container py-16 space-y-16">
		<!-- latest news -->
		<section class="bg-base-gray rounded-xl flex lg:flex-row flex-col items-center shadow-md relative">
			<span class="absolute -top-5 left-0 shadow lg:static bg-primary lg:rounded-xl rounded-lg lg:py-4 lg:px-6 py-1 px-4 font-bold text-white lg:text-base text-sm lg:mr-8">
				Berita&nbsp;Terkini
			</span>
			<div id="latest-news" class="flex flex-grow overflow-hidden relative lg:p-0 p-4 w-full lg:w-auto">
				<div class="splide__track w-5/6">
					<ul class="splide__list">
						<?php foreach (range(0, 5) as $i) { ?>
							<li class="splide__slide">
								<h3 class="font-semi-bold font-semi-bold truncate text-sm">
									Alokasi dan Harga Eceran Tertinggi Pupuk Bersubsidi Sektor Alokasi dan Harga Eceran Tertinggi Pupuk Bersubsidi Sektor Alokasi dan Harga Eceran Tertinggi Pupuk Bersubsidi Sektor
								</h3>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</section>

		<section class="grid lg:grid-cols-7 gap-16">
			<!-- berita -->
			<main class="lg:col-span-5 space-y-12">
				<header class="bg-base-gray rounded-lg shadow-md overflow-hidden">
					<div class="border-l-8 border-primary px-6 py-4">
						<h3 class="font-semibold text-xl">Daftar Berita</h3>
					</div>
				</header>

				<?php foreach (range(0, 2) as $i) { ?>
					<article class="lg:flex lg:space-x-8 space-y-6">
						<a href="#" class="lg:w-5/12">
							<img src="https://picsum.photos/400" class="max-w-full w-full aspect-video object-cover rounded-lg">
						</a>
						<div class="lg:w-7/12">
							<div class="flex space-x-6 items-center mb-4">
								<a href="#" class="btn btn-primary btn-sm">Pupuk</a>
								<time datetime="2022-04-24" class="text-sm text-gray-500">
									<i class="fas fa-calendar-alt text-primary mr-2"></i>2022-04-24
								</time>
								<p class="text-sm text-gray-500">
									<i class="fas fa-user-alt text-primary mr-2"></i>Ahmad
								</p>
							</div>

							<a href="#" class="hover:text-primary">
								<h2 class="font-semibold text-lg leading-relaxed mb-2">Harga Pupuk Naik, Pemerintah Berikan Akan Jaminan</h2>
								<p class="leading-relaxed">Berdasarkan data Ditjen PSP Kementan RI, kebutuhan pupuk untuk petani mencapai 22,57 - 26,18 juta ton atau senilai Rp 63-65 triliun dalam lima ...</p>
							</a>
						</div>
					</article>
				<?php } ?>

				<div class="btn-group justify-center">
					<button class="btn btn-outline border-gray-200">Previous</button>
					<button class="btn btn-active">1</button>
					<button class="btn btn-outline border-gray-200">2</button>
					<button class="btn btn-outline border-gray-200">3</button>
					<button class="btn btn-outline border-gray-200">4</button>
					<button class="btn btn-outline border-gray-200">Next</button>
				</div>
			</main>

			<!-- Kategori -->
			<aside class="lg:col-span-2 space-y-12">
				<header class="bg-base-gray rounded-lg shadow-md overflow-hidden">
					<div class="border-l-8 border-primary px-6 py-4">
						<h3 class="font-semibold text-xl">Kategori Berita</h3>
					</div>
				</header>

				<ul class="menu bg-base-gray rounded-xl shadow-lg p-4 max-h-[500px] overflow-auto">
					<li class="mb-2 bg-white rounded-lg shadow-md"><a class="flex justify-between">Pupuk <i class="fas fa-angle-right text-gray-500"></i></a></li>
					<li class="mb-2 bg-white rounded-lg shadow-md"><a class="flex justify-between">Umum <i class="fas fa-angle-right text-gray-500"></i></a></li>
					<li class="mb-2 bg-white rounded-lg shadow-md"><a class="flex justify-between">Kebijakan <i class="fas fa-angle-right text-gray-500"></i></a></li>
					<li class="mb-2 bg-white rounded-lg shadow-md"><a class="flex justify-between">Pembinaan <i class="fas fa-angle-right text-gray-500"></i></a></li>
					<li class="mb-2 bg-white rounded-lg shadow-md"><a class="flex justify-between">Pertanian <i class="fas fa-angle-right text-gray-500"></i></a></li>
				</ul>
			</aside>
		</section>
	</section>

	<?php include './includes/bottom-section.php' ?>
	<?php include './includes/scripts.php' ?>
	<script>
		new Splide('#latest-news', {
			rewind: true,
			autoplay: true,
			interval: 3000,
			pagination: false,
			classes: {
				arrows: 'splide__arrows mt-2',
				prev: 'splide__arrow--prev left-auto right-0 lg:mr-12 mr-8',
			},
		}).mount();
	</script>
</body>

</html>