<footer class="container-fluid padding-footer">
	<div class="d-flex align-items-center pb-5">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-brasscom-azul.png" alt="">
		<hr class="w-100 azul-claro" style="height: 11px;">
	</div>
	<!-- <div>
		<?php
		// if (has_nav_menu('primary')) {
		// 	wp_nav_menu(array(
		// 		'theme_location' => 'primary',
		// 		'container' => false,
		// 		'fallback_cb' => false,
		// 		'menu_class' => 'menu navbar-nav flex-row mb-0 gap-2 justify-content-around flex-wrap',
		// 		'add_li_class'  => 'nav-item'
		// 	));
		// }
		?>
	</div> -->

	<div class="row flex-column flex-sm-row justify-content-sm-around mt-sm-5 pb-4">
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter1'); ?>
		</div>
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter2'); ?>
		</div>
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter3'); ?>
		</div>
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter4'); ?>
		</div>
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter5'); ?>
		</div>
		<div class="col-4 col-lg widget">
			<?php dynamic_sidebar('accordionfooter6'); ?>
		</div>
	</div>




	<div class="d-flex flex-column-reverse gap-4 gap-lg-0 flex-lg-row justify-content-lg-between align-items-center pt-4">
		<div class="d-flex align-items-center justify-content-start">
			<p class="cinza fs-13 m-0 pe-2">Todos os direitos reservados © 2021 - BRASSCOM - Criação</p>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-oxigen.png" alt="logo O2">
		</div>
		<div class="d-flex gap-4">
			<a href="" class="text-white bg-azul-escuro btn-footer"><img class="pe-2" src="<?php bloginfo('template_url'); ?>/assets/images/user-amarelo.png" alt="">Área do associado</a>
			<a href="" class="text-white bg-azul-escuro btn-footer"><img class="pe-2" src="<?php bloginfo('template_url'); ?>/assets/images/denuncia-amarelo.png" alt="">Canal de Denúncias</a>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<script>
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 3,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>
<script>
	var swiper2 = new Swiper(".mySwiper2", {
		spaceBetween: 30,
		thumbs: {
			swiper: swiper,
		},
	});
</script>
<script>
	var swiper3 = new Swiper(".swiperVideos", {
		slidesPerView: 2,
		spaceBetween: 30,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>
<script>
	var swiper4 = new Swiper(".swiperEventos", {
		slidesPerView: 1,
		spaceBetween: 20,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>
<script>
	var swiper5 = new Swiper(".swiperSocial", {
		slidesPerView: 4,
		spaceBetween: 5,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>


<!-- CONFG. ACCORDION HEADER -->
<script>
	jQuery(document).ready(function() {
		jQuery(function() {
			jQuery('.menu .menu-item a').on('click', function() {
				jQuery(this).parent().find('.sub-menu').stop().slideToggle();
				jQuery(this).addClass('active');
			});
		});
	});
</script>

<!-- CONFG. ACCORDION FOOTER -->
<script>
	jQuery(document).ready(function() {
		jQuery(function() {
			jQuery('.widget .widget-title').on('click', function() {
				if (window.innerWidth <= 575) {
					jQuery(this).parent().find('.menu').stop().slideToggle();
					jQuery(this).toggleClass('active');
				}
			});
		});
	});
</script>
</body>

</html>