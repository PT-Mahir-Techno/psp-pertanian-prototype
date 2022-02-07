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

	<main class="container py-16 space-y-12">
		<!-- map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.836403698468!2d106.82413261436113!3d-6.285224463269732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f21bb6bd6c91%3A0x13fcdea1a6489d88!2sDitjen%20Psp%20Kementerian%20Pertanian!5e0!3m2!1sid!2sid!4v1643805441174!5m2!1sid!2sid" style="border:0;" allowfullscreen="true" loading="lazy" width="100%" height="500" class="rounded-lg shadow-lg"></iframe>

		<section class="grid lg:grid-cols-2">
			<!-- contact form -->
			<div class="bg-primary p-8 space-y-8">
				<input type="text" placeholder="Nama Lengkap *" class="input w-full">
				<div class="grid lg:grid-cols-2 gap-8">
					<input type="text" placeholder="No Handphone *" class="input w-full">
					<input type="text" placeholder="Alamat Email *" class="input w-full">
				</div>
				<input type="text" placeholder="Subjek *" class="input w-full">
				<textarea placeholder="Pesan *" class="textarea w-full h-48"></textarea>
			</div>

			<!-- contact information -->
			<div class="bg-base-gray p-8 prose">
				<h4>ALAMAT</h4>
				<p>
					Kantor Pusat Kementerian Pertanian Gedung D Lantai 8
					Jl. Harsono RM. No. 3 Ragunan – Pasar Minggu – Jakarta Selatan 12550 <br>
					DKI Jakarta
				</p>

				<p>
					Email: ditjen.psp@pertanian.go.id <br>
					website : https://psp.pertanian.go.id <br>
					Telp/Fax : (021) 7816082/7816083
				</p>

				<h4>JAM OPERATIONAL:</h4>
				<p>Senin – Jumat 08.00 – 16.00</p>

				<h4>MEDIA SOSIAL :</h4>
				<p>
					Facebook : PSPKementan <br>
					Instagram : @pspkementan <br>
					Twitter : @pspkementan1 <br>
					Youtube : PSPKementan
				</p>
			</div>
		</section>
	</main>

	<?php include './includes/bottom-section.php' ?>
	<?php include './includes/scripts.php' ?>
</body>

</html>