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
		<h1 class="font-bold lg:text-4xl text-2xl text-center mb-8">DAFTAR INFORMASI PUBLIK</h1>
		<p class="text-lg leading-relaxed text-center mb-16 lg:w-1/2 mx-auto">Pertanyaan seputar Direktorat Jendral Prasarana dan Sarana Pertanian Kementrian Pertanian Republik Indonesia</p>

		<?php $downloadables = [
			'Surat Menteri Pertanian No. 134/Hk.310/M/12/2019',
			'Surat Edaran Pupuk Organik Dan Pembenah Tanah Yang Standard Mutunya Diatur SNI',
			'PPID Ditjen PSP Alur Permohonan Informasi',
			'PPID Ditjen PSP Selayang Pandang',
			'Rekap Renja-Kl Krisna 2019 Pagu Alokasi',
			'Laporan Kinerja Ditjen PSP Ta.2019',
			'Laporan Kinerja Ditjen PSP Ta.2018',
			'Laporan Kinerja Sekretariat Direktorat PSP Ta.2018',
			'Laporan Tahunan SKM 2019',
			'Laporan Tahunan Ditjen PSP Ta.2018',
			'Rekap Pupuk Dan Pembenah Tanah Terdaftar 2017-2019',
			'Rekap Renja-Kl Krisna 2020 Pagu Alokasi',
			'SKM Semester 1 2019',
			'Rencana Kerja 2016 Formulir 2 Dan 3',
			'Rekap 1 2 3 Krisna PSP Ta 2018',
		]; ?>

		<div class="overflow-x-auto">
			<table class="table w-full">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul</th>
						<th>Unduh</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($downloadables as $no => $title) { ?>
						<tr>
							<td><?= $no + 1 ?></td>
							<td><?= $title ?></td>
							<td><a class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</main>

	<?php include './includes/bottom-section.php' ?>
	<?php include './includes/scripts.php' ?>
</body>

</html>