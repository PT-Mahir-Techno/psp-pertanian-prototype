<div class="drawer drawer-end">
	<input id="my-drawer" type="checkbox" class="drawer-toggle">
	<div class="drawer-content">

		<!-- top part -->
		<section class="lg:px-8 px-4 py-4 flex justify-between items-center">
			<div class="flex items-center">
				<img src="./assets/indonesia-flag.png" class="object-contain h-auto w-6 mr-3">
				<p class="mr-2 text-sm lg:block hidden">Indonesia</p>
				<i class="fas fa-angle-down"></i>
			</div>

			<div class="lg:flex lg:space-x-8 items-center" x-data="{showSearch: false}" x-cloak>
				<div class="flex space-x-4" x-show="!showSearch">
					<a href="#"><i class="text-lg fab fa-instagram"></i></a>
					<a href="#"><i class="text-lg fab fa-youtube"></i></a>
					<a href="#"><i class="text-lg fab fa-twitter"></i></a>
					<a href="#"><i class="text-lg fab fa-facebook"></i></a>
					<a class="lg:hidden" @click="showSearch = true"><i class="text-lg fas fa-search"></i></a>
				</div>

				<div class="bg-base-gray rounded px-2" :class="{'lg:block hidden': !showSearch}">
					<input type="text" class="border-0 p-1 bg-transparent" placeholder="Cari ..." @blur="showSearch = false">
					<button><i class="fas fa-search"></i></button>
				</div>
			</div>
		</section>

		<!-- logo & mobile sticky header -->
		<section class="bg-base-gray py-4 lg:px-8 px-4 sticky lg:static top-0 z-[999] shadow-lg lg:shadow-none">
			<div class="relative lg:block flex items-center justify-between">
				<a href="/" class="block">
					<img class="lg:block hidden" src="./assets/logo-psp-1.png">
					<div class="lg:hidden flex space-x-2">
						<img class="w-10" src="./assets/logo-sticky.png">
						<div>
							<h2 class="font-bold text-sm">DIREKTORAT JENDERAL</h2>
							<h2 class="font-semibold text-xs">PRASARANA & SARANA PERTANIAN</h2>
						</div>
					</div>
				</a>
				<div class="flex items-center justify-between space-x-4">
					<button class="
						rounded-full bg-blue-900 border border-white w-6 h-6 flex justify-center items-center
						lg:absolute lg:right-0 lg:top-0 lg:w-8 lg:h-8
					">
						<i class="fas fa-blind fa-fw text-white lg:text-base text-xs"></i>
					</button>

					<!-- drawer -->
					<label for="my-drawer" class="block lg:hidden drawer-button">
						<i class="fas fa-bars text-3xl" role="button"></i>
					</label>
				</div>
			</div>
		</section>

		<!-- navigation  -->
		<nav class="lg:flex hidden lg:flex-row flex-col lg:justify-between bg-secondary py-4 px-8 font-semibold text-gray-600">
			<a href="/" class="hover:text-white transition-colors duration-300">Beranda</a>
			<a href="/tentang-kami.php" class="hover:text-white transition-colors duration-300">Tentang Kami</a>
			<div class="dropdown dropdown-hover">
				<div tabindex="0">Aplikasi <i class="fas fa-angle-down ml-1"></i></div>
				<div tabindex="0" class="dropdown-content shadow-xl card compact bg-white py-2 w-[800px] grid grid-cols-4 gap-4">
					<section class="border-r border-gray-100">
						<a href="https://pelaporan.psp.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">MPO</a>
						<a href="https://bastb20.psp.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">BASTB</a>
						<a href="http://sipetani.pertanian.go.id:8081/simanis/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SIMANIS PSP</a>
						<a href="http://sikomantap.psp.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SIKOMANTAP</a>
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SAKIP KEMENTAN</a>
					</section>
					<section class="border-r border-gray-100">
						<a href="http://sigap-upg.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SIGAP PROTANI</a>
						<a href="https://psp.pertanian.go.id/berita-acara/publikasi/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SUREL PSP</a>
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">E-PLANNING KEMENTAN</a>
						<a href="http://simpel.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">PERIZINAN</a>
						<a href="https://e-katalog.lkpp.go.id/productsearchcontroller/listproduk?tkdn_produk=1&jenis_produk=lokal&komoditasSlug=alat-dan-mesin-pertanian-sektoral&language=id&commodityId=137" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">KATALOG ALSINTAN</a>
					</section>
					<section class="border-r border-gray-100">
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">E-PUBLIKASI</a>
						<a href="https://www.pertanian.go.id/wbs/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">WBS PERTANIAN</a>
						<a href="http://pestisida.id/simpes_app/index.php" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">PESTISIDA TERDAFTAR</a>
						<a href="http://pestisida.id/pupuk_app/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">PUPUK TERDAFTAR</a>
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">STATISTIK</a>
					</section>
					<section class="border-r border-gray-100">
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">E-PETANI</a>
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">SP4N LAPOR</a>
						<a href="https://psp.pertanian.go.id/tentang-kami/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">PENGADAAN</a>
						<a href="https://11ap.pertanian.go.id/lspro/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">LS PRO ALSINTAN</a>
						<a href="https://mail.pertanian.go.id/" target="_blank" class="block py-2 px-4 w-full hover:bg-gray-200">E-MAIL KEMENTAN</a>
					</section>
				</div>
			</div>
			<a href="#" class="hover:text-white transition-colors duration-300">Pedoman</a>
			<div class="dropdown dropdown-hover">
				<div tabindex="0">Berita & Acara <i class="fas fa-angle-down ml-1"></i></div>
				<div tabindex="0" class="dropdown-content shadow-xl card compact bg-white py-2 w-full">
					<a href="/berita.php" class="block py-2 px-4 hover:bg-gray-200">Berita</a>
					<a href="/berita.php" class="block py-2 px-4 hover:bg-gray-200">Acara</a>
				</div>
			</div>
			<div class="dropdown dropdown-hover">
				<div tabindex="0">Informasi Publik <i class="fas fa-angle-down ml-1"></i></div>
				<div tabindex="0" class="dropdown-content overflow-visible shadow-xl card compact bg-white py-2 w-72">
					<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">PPID - PSP</a>
					<div class="dropdown dropdown-right group">
						<div class="flex justify-between items-center py-2 px-4 hover:bg-gray-200">
							LHKASN / LHKPN <i class="fas fa-angle-right ml-1"></i>
						</div>
						<div class="dropdown-content hidden group-hover:block shadow-xl card compact bg-white py-2 w-full">
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">LHKASN</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">LHKPN</a>
						</div>
					</div>
					<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Arsip Surat</a>
					<a href="/informasi.php" class="block py-2 px-4 hover:bg-gray-200">Daftar Informasi Publik</a>
					<div class="dropdown dropdown-right group">
						<div class="flex justify-between items-center py-2 px-4 hover:bg-gray-200">
							Layanan Publik <i class="fas fa-angle-right ml-1"></i>
						</div>
						<div class="dropdown-content hidden group-hover:block shadow-xl card compact bg-white py-2 w-full">
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Pendaftaran AUTP dan AUTS/K</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Pendaftaran Pestisida</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Pendaftaran Pupuk</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Pupuk Bersubsidi</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Sertifikasi ALSINTAN</a>
							<a href="#" class="block py-2 px-4 hover:bg-gray-200">SOP Pelayanan ALSINTAN</a>
							<a href="#" class="block py-2 px-4 hover:bg-gray-200">Prosedur Memperoleh Informasi Publik</a>
						</div>
					</div>
					<div class="dropdown dropdown-right group">
						<div class="flex justify-between items-center py-2 px-4 hover:bg-gray-200">
							Regulasi <i class="fas fa-angle-right ml-1"></i>
						</div>
						<div class="dropdown-content hidden group-hover:block shadow-xl card compact bg-white py-2 w-full">
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Peraturan</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Perjanjian / Kerjasama</a>
						</div>
					</div>
					<div class="dropdown dropdown-right group">
						<div class="flex justify-between items-center py-2 px-4 hover:bg-gray-200">
							Laporan Kinerja <i class="fas fa-angle-right ml-1"></i>
						</div>
						<div class="dropdown-content hidden group-hover:block shadow-xl card compact bg-white py-2 w-full">
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Aset Unit Kerja</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">DIPA</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">LAKIP</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Laporan Keuangan Audit</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Laporan Tahunan</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">RENJA / RKT</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">RENSTRA</a>
							<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">RKA-KL</a>
						</div>
					</div>
					<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Statistik</a>
					<a href="/arsip.php" class="block py-2 px-4 hover:bg-gray-200">Tata Cara Pengaduan Penyalahgunaan Wewenang</a>
					<a href="#" class="block py-2 px-4 hover:bg-gray-200">Data Pegawai</a>
				</div>
			</div>
			<div class="dropdown dropdown-hover">
				<div tabindex="0">Peringatan & Evakuasi <i class="fas fa-angle-down ml-1"></i></div>
				<div tabindex="0" class="dropdown-content shadow-xl card compact bg-white py-2 w-full">
					<a href="/arsip.php" class="block py-2 px-4 w-full hover:bg-gray-200">Informasi Bencana & Covid 19</a>
					<a href="/arsip.php" class="block py-2 px-4 w-full hover:bg-gray-200">Prosedur Evakuasi</a>
				</div>
			</div>
			<a href="/hubungi.php" class="hover:text-white transition-colors duration-300">Hubungi Kami</a>
			<a href="/faq.php" class="hover:text-white transition-colors duration-300">FAQ</a>
		</nav>