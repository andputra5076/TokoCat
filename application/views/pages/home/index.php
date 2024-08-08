<main role="main" class="container">

	<?php $this->load->view('layouts/_alert') ?>

	<!-- Image Slider -->
	<div id="imageSlider" class="carousel slide mb-3" data-ride="carousel">
		<div class="carousel-inner">
			<?php
			$dir = "images/slider/";
			$files = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
			$active = true;
			foreach ($files as $file) {
				echo '<div class="carousel-item ' . ($active ? 'active' : '') . '"><img src="' . base_url($file) . '" class="d-block w-100" alt="' . basename($file) . '"><div class="zoom-icon"></div></div>';
				$active = false;
			}
			?>
		</div>
		<a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row">
		<div class="col-md-9">
			<!-- Kategori dan Urutan Harga -->
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
							<span class="float-right">
								Urutkan harga: <a href="<?= base_url('shop/sortby/asc') ?>" class="badge badge-primary">Termurah</a> | <a href="<?= base_url('shop/sortby/desc') ?>" class="badge badge-primary">Termahal</a>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Daftar Produk -->
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<?php foreach ($content as $row) : ?>
							<div class="col-md-6">
								<!-- Card untuk Setiap Produk -->
								<div class="card mb-3">
									<a href="<?= base_url("images/product/$row->image") ?>" target="_blank" onclick="openImage(this);">
										<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top zoom-in">
									</a>
									<div class="card-body">
										<h5 class="card-title"><?= $row->product_title ?></h5>
										<p class="card-text"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
										<p class="card-text"><?= $row->description ?></p>
										<a href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-primary"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
									</div>
									<div class="card-footer">
										<!-- Form untuk Menambahkan ke Keranjang -->
										<form action="<?= base_url('cart/add') ?>" method="POST">
											<input type="hidden" name="id_product" value="<?= $row->id ?>">
											<div class="input-group">
												<input type="number" name="qty" value="1" class="form-control">
												<div class="input-group-append">
													<button class="btn btn-success" type="submit">Add to cart</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<!-- Pagination -->
			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>

		<!-- Sidebar -->
		<div class="col-md-3">
			<!-- Pencarian -->
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Search
						</div>
						<div class="card-body">
							<form action="<?= base_url('shop/search') ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" class="form-control" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
									<div class="input-group-append">
										<button class="btn btn-dark" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Kategori -->
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Category
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="<?= base_url('home') ?>">Semua kategori</a></li>
							<?php foreach (getCategories() as $category) : ?>
								<li class="list-group-item"><a href="<?= base_url("shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<!-- Toko -->
	<div class="row" id="toko">
		<div class="col-md-12">
			<h1 class="text-center">Informasi</h1>
			<div class="card mb-3 toko-card">
				<div class="card-body">
					<p>PT Dua Insan Cemerlang menyediakan Cat Lantai Khusus Epoxy dan menyediakan jasa pemasangan Epoxy Lantai</p>
					<p>Toko terletak di Perumahan Rajeg Asri Blok F7 No. 12 A, Kabupaten. Tangerang </p>
					<p>Toko Buka pada :</p>
					<ul class="list-unstyled"> <!-- Tambahkan class list-unstyled untuk menghilangkan titik-titik -->
						<li>Senin - Jumat: 08.00 - 20.00</li>
						<li>Sabtu - Minggu: 09.00 - 18.00</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	




</main>