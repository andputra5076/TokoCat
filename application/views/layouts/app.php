<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title><?= isset($title) ? $title : "Toko Cat" ?> - Toko Cat</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/font-awesome/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css">
	<!-- Font Awesome CSS CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-tuvq5M/ixxbNzmBp+lvM81m2zezcPugXYaZADbT7JGeUJvH3pUKjcYdHJkh8sPJp1wOGLQ66vcCZ8z7tKu4sQQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		/* Custom Styles */
		.navbar-brand {
			font-weight: bold;
			font-size: 1.5rem;
		}

		.navbar-nav .nav-link {
			font-size: 1.1rem;
			margin-right: 10px;
			transition: color 0.3s ease;
		}

		.navbar-nav .nav-item {
			margin-right: 10px;
		}

		.dropdown-menu .dropdown-item {
			font-size: 1rem;
			transition: background-color 0.3s ease;
		}

		.card {
			border: none;
			transition: transform 0.3s ease;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
			/* Add box shadow for better visual effect */
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
			/* Adjust box shadow on hover */
		}

		body {
			background-color: #f2f2f2;
			/* Ganti dengan warna yang Anda inginkan */
		}

		.card-img-top {
			max-height: 4%;
			object-fit: cover;
		}

		.btn-primary {
			background-color: #007bff;
			border-color: #007bff;
			transition: background-color 0.3s ease;
		}

		.btn-primary:hover {
			background-color: #0056b3;
			border-color: #0056b3;
		}

		.carousel-item {
			transition: transform 1s ease-in-out;
		}

		.carousel-item img {
			transition: transform 0.3s ease;
		}

		.zoom-in {
			transition: transform 0.3s ease;
		}

		.zoom-in:hover {
			transform: scale(1.05);
			cursor: zoom-in;
		}

		/* Adjustments */
		.carousel-control-prev,
		.carousel-control-next {
			width: 5%;
		}

		.carousel-control-prev-icon,
		.carousel-control-next-icon {
			filter: invert(1);
		}

		.carousel-control-prev:hover,
		.carousel-control-next:hover {
			background-color: rgba(0, 0, 0, 0.5);
		}

		/* Footer Card */
		.card-footer {
			background-color: #343a40;
			/* Warna abu-abu gelap */
			color: #fff;
			/* Warna teks putih */
			padding: 10px;
			/* Padding */
		}

		.footer-heading {
			color: #fff;
			font-size: 18px;
			font-weight: bold;
		}

		.footer-text {
			color: #ccc;
			font-size: 14px;
		}

		.footer-menu li {
			margin-bottom: 5px;
		}

		.footer-menu li a {
			color: #ccc;
			font-size: 14px;
			text-decoration: none;
			transition: color 0.3s;
		}

		.footer-menu li a:hover {
			color: #fff;
		}

		.social-icon {
			color: #ccc;
			font-size: 20px;
			margin-right: 5px;
			transition: color 0.3s;
		}

		.social-icon {
			margin-right: 10px;
			/* Jarak antara setiap ikon */
			transition: color 0.3s;
			/* Efek transisi untuk perubahan warna */
		}

		.social-icon:hover {
			color: red;
			/* Warna saat hover, ganti sesuai kebutuhan */
		}

		.instagram:hover {
			color: #C13584;
			/* Warna Instagram saat hover */
		}

		.twitter:hover {
			color: #00acee;
			/* Warna Instagram saat hover */
		}

		.facebook:hover {
			color: #0000ff;
			/* Warna Instagram saat hover */
		}

		.layanan-card {
			/* Ungu kalem */
			border: 1px solid #ff840c;
			border-radius: 5px;
			transition: transform 0.3s ease-in-out;
			color: #000000;
			/* Warna teks putih */
			padding: 20px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* Pusatkan teks */
		}

		.layanan-card:hover {
			transform: scale(1.05);
			box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
		}

		.toko-card {
			background-color: #ff840c;
			/* Ungu kalem */
			border: 1px solid #ced4da;
			border-radius: 5px;
			transition: transform 0.3s ease-in-out;
			color: #fff;
			/* Warna teks putih */
			padding: 20px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* Pusatkan teks */
		}

		.toko-card:hover {
			transform: scale(1.05);
			box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
		}

		.profil-card {
			/* Ungu kalem */
			border: 1px solid #ff840c;
			border-radius: 5px;
			transition: transform 0.3s ease-in-out;
			color: #000000;
			/* Warna teks putih */
			padding: 20px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* Pusatkan teks */
		}

		.profil-card:hover {
			transform: scale(1.05);
			box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
		}

		.lowongan-card {
			background-color: #ff840c;
			/* Ungu kalem */
			border: 1px solid #ced4da;
			border-radius: 5px;
			transition: transform 0.3s ease-in-out;
			color: #fff;
			/* Warna teks putih */
			padding: 20px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* Pusatkan teks */
		}

		.lowongan-card:hover {
			transform: scale(1.05);
			box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
		}

		/* Tambahkan gaya dan animasi yang sesuai untuk kelas lainnya */


		.map-container {
			position: relative;
			overflow: hidden;
			padding-top: 56.25%;
			/* Aspect ratio 16:9 */
		}

		/* Facebook */
		.social-icon.facebook .icon-facebook::before {
			content: "\f09a";
			/* Unicode untuk ikon Facebook */
		}

		/* Twitter */
		.social-icon.twitter .icon-twitter::before {
			content: "\f099";
			/* Unicode untuk ikon Twitter */
		}

		/* Instagram */
		.social-icon.instagram .icon-instagram::before {
			content: "\f16d";
			/* Unicode untuk ikon Instagram */
		}

		/* Youtube */
		.social-icon.youtube .icon-youtube::before {
			content: "\f167";
			/* Unicode untuk ikon Youtube */
		}

		.map-container iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: 0;
		}
	</style>
</head>

<body>
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
	<!-- End Navbar -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End Content -->

	<?php if ($page != 'pages/auth/login' && $page != 'pages/auth/register' && $page != 'pages/cart/index' && $page != 'pages/category/form' && $page != 'pages/category/index' && $page != 'pages/checkout/index' && $page != 'pages/checkout/success' && $page != 'pages/myorder/index' && $page != 'pages/myorder/confirm' && $page != 'pages/myorder/detail' && $page != 'pages/order/detail' && $page != 'pages/order/index' && $page != 'pages/product/index' && $page != 'pages/product/form' && $page != 'pages/profile/form' && $page != 'pages/profile/index' && $page != 'pages/user/index' && $page != 'pages/user/form') : ?>
		<!-- Footer -->
		<?php $this->load->view('layouts/footer') ?>
		<!-- End Footer -->
	<?php endif; ?>

	<script src="<?= base_url(); ?>/assets/libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= base_url(); ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/app.js"></script>
	<script>
		// Slider otomatis setiap 4 detik
		$('#imageSlider').carousel({
			interval: 4000
		});
	</script>
	<script>
		$(document).ready(function() {
			$('.zoom-in').hover(
				function() {
					$(this).addClass('transition');
				},
				function() {
					$(this).removeClass('transition');
				}
			);
		});
	</script>
	<script>
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function(e) {
				e.preventDefault();

				const targetId = this.getAttribute('href').substring(1);
				const targetElement = document.getElementById(targetId);
				const targetOffset = targetElement.getBoundingClientRect().top + window.pageYOffset;
				const startPosition = window.pageYOffset;
				const distance = targetOffset - startPosition - 130; // Ubah nilai margin atas di sini
				const duration = 800; // Durasi animasi dalam milidetik

				let start = null;
				window.requestAnimationFrame(step);

				function step(timestamp) {
					if (!start) start = timestamp;
					const progress = timestamp - start;
					window.scrollTo(0, easeInOut(startPosition, distance, progress, duration));
					if (progress < duration) window.requestAnimationFrame(step);
				}

				function easeInOut(start, distance, elapsedTime, duration) {
					if ((elapsedTime /= duration / 2) < 1) return distance / 2 * elapsedTime * elapsedTime + start;
					return -distance / 2 * ((--elapsedTime) * (elapsedTime - 2) - 1) + start;
				}
			});
		});
	</script>


</body>

</html>