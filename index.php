<?php include './includes/top-section.php' ?>

<!-- header with slider -->
<header id="header" class="relative">
	<div class="splide__track">
		<ul class="splide__list">
			<?php foreach (range(0, 5) as $i) { ?>
				<li class="splide__slide">
					<div class="relative w-full h-full">
						<img src="https://picsum.photos/1024/768" class="object-cover w-full h-full">
						<div class="absolute inset-0 flex flex-col justify-end items-start lg:py-16 lg:px-16 py-12 px-8 bg-gradient-to-t from-black">
							<h2 class="text-white lg:text-left text-center lg:text-4xl text-xl font-bold lg:w-2/3 leading-snug mb-6">PSP Kementan: Harga Eceran Tertinggi (HET) Pupuk Bersubsidi</h2>
							<a href="#" class="btn btn-primary lg:m-0 mx-auto">Selengkapnya</a>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</header>

<!-- main section -->
<section class="container py-16 space-y-16">
	<!-- latest news -->
	<section class="bg-base-content rounded-xl flex lg:flex-row flex-col items-center shadow-md relative">
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

	<!-- news, goverment, news, sidebar -->
	<section class="grid lg:grid-cols-7 gap-16">
		<main class="lg:col-span-5 space-y-16">
			<!-- informasi pejabat -->
			<section id="goverment" class="bg-base-content rounded-xl shadow-lg relative">
				<div class="splide__track">
					<ul class="splide__list">
						<?php foreach (range(0, 5) as $i) { ?>
							<li class="splide__slide">
								<article class="lg:p-16 p-4 flex flex-col justify-between relative h-full">
									<div class="lg:w-2/3">
										<h2 class="lg:text-4xl lg:text-left text-center text-sky-700 font-semibold">IR. ALI JAMIL, MP, PH.D</h2>
										<p class="lg:text-2xl lg:text-left text-center text-sm mt-2">Direktur Jenderal Prasarana dan Sarana Pertanian Kementerian Pertanian</p>
									</div>
									<div class="lg:w-1/2 w-7/12">
										<p class="lg:text-xl text-sm leading-relaxed font-semibold">Tugas Ditjen PSP Kementan</p>
										<p class="lg:text-xl text-sm lg:leading-relaxed lg:mb-6 mb-3">Menyelenggarakan perumusan dan pelaksanaan kebijakan penyediaan prasarana dan sarana di bidang pertanian</p>
										<a href="#" class="lg:hidden inline-flex btn btn-primary btn-sm mb-4">Selengkapnya</a>
										<a href="#" class="lg:inline-flex hidden btn btn-primary">Selengkapnya</a>
									</div>
									<img src="/assets/govt-1.png" alt="Dirjen PSP Ali Jamil" class="absolute right-0 bottom-0 w-1/2">
								</article>
							</li>
						<?php } ?>
					</ul>
				</div>
			</section>

			<!-- news -->
			<section class="space-y-12">
				<header class="bg-base-content rounded-lg shadow-md overflow-hidden">
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

				<a href="#" class="btn btn-primary btn-outline w-full lg:w-auto">
					<i class="fas fa-angle-double-right mr-2"></i> Lihat Berita Selengkapnya
				</a>
			</section>
		</main>

		<!-- direktorat list & event calendar -->
		<aside class="lg:col-span-2">
			<div class="bg-base-content rounded-xl p-4 space-y-6 shadow-lg">
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-1.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">SEKRETARIAT DIREKTORAT JENDRAL PSP</p>
				</a>
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-2.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">DIREKTORAT PERLUASAN DAN PERLINDUNGAN LAHAN</p>
				</a>
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-3.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">DIREKTORAT IRIGASI PERTANIAN</p>
				</a>
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-1.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">DIREKTORAT PEMBIAYAAN PERTANIAN</p>
				</a>
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-2.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">DIREKTORAT ALAT DAN MESIN PERTANIAN</p>
				</a>
				<a href="#" class="flex flex-col items-center w-5/6 mx-auto">
					<div class="bg-gray-50 rounded-full w-24 h-24 p-1 flex items-center justify-center">
						<img src="/assets/illust-3.png" class="max-w-full object-contain">
					</div>
					<p class="text-center mt-1 font-bold text-sm">DIREKTORAT PUPUK DAN PESTISIDA</p>
				</a>

				<!-- event calendar -->
				<div class="space-y-4">
					<p class="bg-white shadow-lg p-4 rounded-xl text-lg font-semibold text-center">
						<i class="fas fa-calendar-alt mr-2 text-primary"></i>
						Agenda Kegiatan
					</p>
					<div id="color-calendar"></div>
					<div class="bg-white shadow-lg py-4 px-6 rounded-xl flex space-x-4">
						<div class="text-primary font-semibold">
							<p class="text-3xl">24</p>
							<p class="text-lg -mt-2">May</p>
						</div>
						<div class="text-sky-900 font-semibold">
							<h5>Another test event</h5>
							<table class="text-sm mt-1">
								<tr>
									<td>When:</td>
									<td class="font-normal text-gray-500">12:30 - 14:00</td>
								</tr>
								<tr>
									<td>Where:</td>
									<td class="font-normal text-gray-500">La Priere Coffee</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</aside>
	</section>
</section>

<!-- events -->
<section class="bg-base-content py-16">
	<div class="container">
		<h3 class="text-center text-2xl font-bold text-gray-600 lg:mb-6 mb-4">ACARA PSP KEMENTAN RI</h3>
		<p class="lg:w-1/2 text-center lg:text-lg mx-auto lg:mb-16 mb-10 leading-relaxed">
			Informasi seputar Acara dan kegiatan di Direktorat Jendral Prasarana dan Sarana Pertanian Kementerian Pertanian Republik Indonesia
		</p>

		<div id="events" class="relative mb-14">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
					<li class="splide__slide">
						<a href="#" class="relative rounded-lg overflow-hidden block shadow">
							<img src="https://picsum.photos/400" class="aspect-video object-cover w-full max-w-full">
							<h4 class="text-white bg-black/50 text-center p-4 block absolute inset-0 opacity-0 hover:opacity-100 transition-opacity">
								Eiusmod duis veniam proident excepteur ea consectetur quis voluptate.
							</h4>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="flex justify-center">
			<a href="#" class="btn btn-primary btn-outline w-full lg:w-auto">
				<i class="fas fa-angle-double-right mr-2"></i> Lihat Seluruh Acara
			</a>
		</div>
	</div>
</section>

<!-- aplikasi psp -->
<section class="py-16 container">
	<h3 class="text-center text-2xl font-bold text-gray-600 mb-6">APLIKASI PSP KEMENTAN RI</h3>
	<p class="lg:w-1/2 text-center text-lg mx-auto mb-12 leading-relaxed">Aplikasi seputar aktivitas dan kegiatan Direktorat Jendral Prasarana dan Sarana Pertanian Kementerian Pertanian Republik Indonesia</p>

	<div class="grid lg:grid-cols-4 gap-10">
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
		<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
			<img src="/assets/app-1.png" class="w-full h-auto mb-12">
			<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
			<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
		</a>
	</div>
</section>

<!-- aplikasi terkait psp -->
<section class="py-16 bg-base-content">
	<div class="container">
		<h3 class="text-center text-2xl font-bold text-gray-600 mb-6">APLIKASI TERKAIT PSP KEMENTAN RI</h3>
		<p class="lg:w-1/2 text-center text-lg mx-auto mb-12 leading-relaxed">Aplikasi seputar aktivitas dan kegiatan Direktorat Jendral Prasarana dan Sarana Pertanian Kementerian Pertanian Republik Indonesia</p>

		<div class="grid lg:grid-cols-4 gap-10">
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
			<a href="#" class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl hover:scale-105 transition-transform">
				<img src="/assets/app-1.png" class="w-full h-auto mb-12">
				<h4 class="text-center text-xl font-semibold mb-4">SIKOMANTAP</h4>
				<p class="text-center mx-auto text-lg">Sistem Informasi Rekomendasi dan Pemantauan Penetapan LP2B (SIKOMANTAP)</p>
			</a>
		</div>
	</div>
</section>

<!-- gpr & social -->
<section class="container py-16">
	<div class="grid lg:grid-cols-7 gap-16">

		<!-- gpr -->
		<section class="lg:col-span-5 space-y-8">
			<header class="bg-base-content rounded-lg shadow-md overflow-hidden">
				<div class="border-l-8 border-primary px-6 py-4">
					<h3 class="font-semibold text-xl">Goverment Public Relation (GPR)</h3>
				</div>
			</header>

			<div id="gpr-kominfo-widget-container" class="mx-auto">
				<div id="gpr-kominfo-widget-header"></div>
				<div id="gpr-kominfo-widget-body">
					<ul id="gpr-kominfo-widget-list">
						<li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-infografis">
							<small class="gpr-kominfo-align-left"><b>Infografis</b></small>
							<small class="gpr-kominfo-align-right gpr-small-date">11-10-2021 06:00</small><br>
							<a href="http://www.kominfo.go.id/content/detail/37445/penanganan-sebaran-konten-hoaks-vaksin-covid-19-senin-11102021/0/infografis" target="_blank">Penanganan Sebaran Konten Hoaks Vaksin Covid-19 Senin (11/10/2021)</a><br>
							<small class="gpr-kominfo-align-right">GTPP Covid-19</small>
							<div class="gpr-kominfo-clear-fix"></div>
						</li>
						<li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-infografis">
							<small class="gpr-kominfo-align-left"><b>Infografis</b></small>
							<small class="gpr-kominfo-align-right gpr-small-date">11-10-2021 06:00</small><br>
							<a href="http://www.kominfo.go.id/content/detail/37442/penanganan-sebaran-konten-hoaks-covid-19-senin-11102021/0/infografis" target="_blank">Penanganan Sebaran Konten Hoaks Covid-19 Senin (11/10/2021)</a><br>
							<small class="gpr-kominfo-align-right">GTPP Covid-19</small>
							<div class="gpr-kominfo-clear-fix"></div>
						</li>
						<li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-infografis">
							<small class="gpr-kominfo-align-left"><b>Infografis</b></small>
							<small class="gpr-kominfo-align-right gpr-small-date">10-10-2021 06:00</small><br>
							<a href="http://www.kominfo.go.id/content/detail/37444/penanganan-sebaran-konten-hoaks-vaksin-covid-19-minggu-10102021/0/infografis" target="_blank">Penanganan Sebaran Konten Hoaks Vaksin Covid-19 Minggu (10/10/2021)</a><br>
							<small class="gpr-kominfo-align-right">GTPP Covid-19</small>
							<div class="gpr-kominfo-clear-fix"></div>
						</li>
						<li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-infografis">
							<small class="gpr-kominfo-align-left"><b>Infografis</b></small>
							<small class="gpr-kominfo-align-right gpr-small-date">10-10-2021 06:00</small><br>
							<a href="http://www.kominfo.go.id/content/detail/37441/penanganan-sebaran-konten-hoaks-covid-19-minggu-10102021/0/infografis" target="_blank">Penanganan Sebaran Konten Hoaks Covid-19 Minggu (10/10/2021)</a><br>
							<small class="gpr-kominfo-align-right">GTPP Covid-19</small>
							<div class="gpr-kominfo-clear-fix"></div>
						</li>
						<li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-infografis">
							<small class="gpr-kominfo-align-left"><b>Infografis</b></small>
							<small class="gpr-kominfo-align-right gpr-small-date">09-10-2021 06:00</small><br>
							<a href="http://www.kominfo.go.id/content/detail/37443/penanganan-sebaran-konten-hoaks-vaksin-covid-19-sabtu-09102021/0/infografis" target="_blank">Penanganan Sebaran Konten Hoaks Vaksin Covid-19 Sabtu (09/10/2021)</a><br>
							<small class="gpr-kominfo-align-right">GTPP Covid-19</small>
							<div class="gpr-kominfo-clear-fix"></div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- social -->
		<aside class="lg:col-span-2 space-y-8">
			<header class="bg-base-content rounded-lg shadow-md overflow-hidden">
				<div class="border-l-8 border-primary px-6 py-4">
					<h3 class="font-semibold text-xl">Social Media</h3>
				</div>
			</header>

			<iframe src="https://instagram.com/pspkementan" class="w-full h-96 rounded-xl"></iframe>
		</aside>
	</div>
</section>

<?php include './includes/bottom-section.php' ?>