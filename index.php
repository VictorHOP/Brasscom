<?php get_header(); ?>

<div class="position-relative" style="z-index: -2;">
    <?php query_posts(array(
        'post_type' => 'banner',
    ));

    if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="container-fluid p-0">
                <?php the_post_thumbnail('', array('class' => 'position-relative z-1 start-0 w-100')); ?>
                <div class="container">
                    <div class="position-absolute descricao-capa row" style="max-width: 1200px;">
                        <div class="col-9 pe-5">
                            <h1 class="text-white pe-5"><?php the_title(); ?></h1>
                            <button class="botao-amarelo px-5">Clique aqui para ler a carta</button>
                        </div>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<div class="position-relative">
    <?php query_posts(array(
        'post_type' => 'post',
    )); ?>
    <div class="container-fluid mb-4">
        <div class="row d-flex">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <div class="col-6 px-1 pt-1 position-relative">
                        <?php the_post_thumbnail('', array('class' => 'w-100')); ?>
                        <div class="d-flex justify-content-center align-items-center position-post">
                            <a href="" class="botao-post p-3 text-white col-9 fw400 fs-24"><?php the_title(); ?></a>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- SEÇÃO LGPD -->
    <!-- <section class="conteiner-fluid">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                
            </div>
        </div>
    </div>
</section> -->


    <section class="bg-azul-escuro text-white container-fluid pt-3" style="height: 800px;">

        <div class="container">
            <h2 class="py-5 mt-3">Inteligência</h2>
        </div>

        <div class="container position-relative" id="myGroup">



            <?php query_posts(array(
                'post_type' => 'inteligencia',
            ));

            if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part(''); ?>
                    <div class="row">
                        <div class="d-flex">
                            <div class="col-5">
                                <h4 class="botao-inteligencia py-4 ps-3 my-2 position-relative " type="button" data-toggle="collapse" data-target="#<?php echo $post->post_name; ?>" aria-expanded="false" aria-controls="collapseExample">
                                    <?php the_title(); ?>
                                </h4>
                            </div>
                            <div class="collapse" id="<?php echo $post->post_name; ?>" data-parent="#myGroup">
                                <div class="d-flex col-6 position-absolute top-0 justify-content-between">
                                    <div class="img-inteligencia">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="d-flex flex-column justify-content-start col-6 pt-5 ps-5">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <!-- <?php echo $post->post_name; ?> -->
        </div>
    </section>

    <section class="container">
        <div class="d-flex justify-content-around my-5 py-5">

            <div class="d-flex flex-column">
                <div class="azul-claro fs-80 d-flex align-items-center margin-negativa">
                    <fw300 class="fs-40">R$</fw300>
                    <fw900>494,7</fw900>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/bilhao.png" alt="bilhao">
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="azul-claro fs-80 d-flex align-items-center margin-negativa">
                    <fw900>6,8</fw900>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/pib.png" alt="pib">
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="azul-claro fs-80 d-flex align-items-center margin-negativa">
                    <fw900>1,6</fw900>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/milhao.png" alt="milhao">
            </div>

        </div>
        <div class="row mb-5">
            <p class="text-center azul-escuro fs-20 col-10 m-auto"><strong>A Brasscom começa 2021 de cara nova, representando a transformação digital do país, a inovação e a economia digital.</strong>
                Ao longo desses 17 anos, ampliamos nosso escopo de atuação, ganhamos mais visibilidade e relevância no Poder Público e Privado. Dobramos a quantidade de colaboradores, colecionamos conquistas e atraímos diversas empresas, chegando no marco de 90 associados!
                Nosso propósito é trabalhar <strong> por um Brasil mais Digital, Conectado e Inovador.</strong></p>
        </div>

    </section>

    <section class="container-fluid position-relative mb-5 pb-5">
        <img class="background-video" src="<?php bloginfo('template_url'); ?>/assets/images/background-secao-video.png" alt="">
        <div class="row container m-auto py-4 position-relative video-home mb-5 pb-5">
            <iframe class="video" width="983" height="550" src="https://www.youtube.com/embed/acLNAs4zlX8" title="Vídeo Institucional Brasscom" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="bg-azul-escuro container-fluid container-xxl position-relative" style="height: 800px;">
        <div class="logo-brasscom-grande">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-grande-brasscom.png" alt="logo brasscom">
        </div>

        <h2 class="text-center text-white py-5">Notícias</h2>

        <div class="row secao-noticia">

            <div class="swiper swiper-noticia mySwiper2">

                <div class="swiper-wrapper">

                    <?php query_posts(array(
                        'post_type' => 'noticia',
                    ));

                    if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>

                            <div class="swiper-slide d-flex justify-content-center imagem-swiper">
                                <?php the_post_thumbnail(); ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
            <div thumbsSlider="" class="col-12 secao-card-noticia swiper swiper-noticia mySwiper">

                <div class="d-flex swiper-wrapper" style="height: 400px;">
                    <?php query_posts(array(
                        'post_type' => 'noticia',
                    ));

                    if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <div class="col-4 swiper-slide text-white card-noticia">

                                <div class="d-flex">
                                    <p class="fs-14 pe-4">23.05.2021</p>
                                    <p class="fs-13">NOTÍCIAS BRASSCOM</p>
                                </div>
                                <a href="" class="fs-24 fw500 text-white"><?php the_title(); ?></a>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>

    <section class="container my-5 py-5">

        <div class="row justify-content-between">
            <div class="swiper swiperVideos col-8">
                <h2 class="azul-claro py-5">Vídeos</h2>
                <div class="swiper-wrapper">
                    <?php query_posts(array(
                        'post_type' => 'video',
                    ));

                    if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <?php $video = get_post_meta(get_the_ID(), 'video', true) ?>
                            <?php $link = substr("$video", -11);  ?>
                            <div class="swiper-slide">
                                <iframe width="350" height="185" style="border-radius: 3px;" src="https://www.youtube.com/embed/<?php echo "$link"; ?>" title="<?php the_title(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="azul-claro fs-20"><?php the_title() ?></p>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>

            </div>
            <div class="swiper swiperEventos col-4">
                <h2 class="azul-claro py-5">Eventos</h2>
                <div class="swiper-wrapper">
                    <?php query_posts(array(
                        'post_type' => 'evento',
                    ));

                    if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <div class="swiper-slide">
                                <?php the_post_thumbnail(); ?>
                                <p class="azul-claro fs-20"><?php the_title() ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr class="azul-claro">
    </div>

    <section class="container">

        <div class="swiper swiperSocial">
            <h2 class="azul-claro py-5">Social</h2>
    
            <div class="swiper-wrapper">
                <?php query_posts(array(
                    'post_type' => 'social',
                ));

                if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <div class="swiper-slide">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>


    <?php get_footer(); ?>