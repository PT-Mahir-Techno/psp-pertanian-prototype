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
		<h1 class="font-bold lg:text-4xl text-2xl text-center mb-8">ARSIP DAN SURAT</h1>
		<p class="text-lg leading-relaxed text-center mb-16 lg:w-1/2 mx-auto">Pertanyaan seputar Direktorat Jendral Prasarana dan Sarana Pertanian Kementrian Pertanian Republik Indonesia</p>

		<!-- filter -->
		<section class="grid lg:grid-cols-3 lg:gap-8 gap-4 mb-12">
			<div class="form-control">
				<label class="label">
					<span class="label-text">Kata Pencarian:</span>
				</label>
				<input type="text" placeholder="Masukkan kata pencarian" class="input input-bordered">
			</div>
			<div class="form-control">
				<label class="label">
					<span class="label-text">Jenis:</span>
				</label>
				<select class="select select-bordered w-full">
					<option selected="selected">Semua Jenis</option>
					<option>Arsip</option>
					<option>Surat</option>
					<option>Produk Hukum</option>
				</select>
			</div>
			<div class="form-control">
				<label class="label">
					<span class="label-text">Kata Pencarian:</span>
				</label>
				<select class="select select-bordered w-full">
					<option selected="selected">Semua Tahun</option>
					<option>Arsip</option>
					<option>Surat</option>
					<option>Produk Hukum</option>
				</select>
			</div>
		</section>

		<!-- document list -->
		<section class="space-y-12">
			<?php foreach (range(0, 6) as $i) { ?>
				<article class="lg:flex lg:space-x-8 space-y-6">
					<a href="#" class="lg:w-3/12">
						<img src="https://picsum.photos/400" class="max-w-full w-full aspect-video object-cover rounded-lg">
					</a>
					<div class="lg:w-9/12">
						<div class="flex space-x-6 items-center mb-4">
							<a href="#" class="btn btn-primary btn-sm">
								<?= $i % 2 ? 'ARSIP' : ($i % 3 ? 'SURAT' : 'PRODUK HUKUM') ?>
							</a>
							<time datetime="2022-04-24" class="text-sm text-gray-500">
								<i class="fas fa-calendar-alt text-primary mr-2"></i>2022-04-24
							</time>
							<p class="text-sm text-gray-500">
								<i class="fas fa-user-alt text-primary mr-2"></i>Ahmad
							</p>
						</div>

						<a href="#" class="hover:text-primary">
							<h2 class="font-semibold text-lg leading-relaxed mb-2">Pemalsuan Surat Ditjen PSP</h2>
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
		</section>
	</main>

	<?php include './includes/bottom-section.php' ?>
	<?php include './includes/scripts.php' ?>
</body>

</html>