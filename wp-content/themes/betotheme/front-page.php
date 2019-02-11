

<?php get_header(); ?>



    <?php while(have_posts()): the_post(); ?>
    
    <style>
        div.img-parallax1{background-image: url(<?php the_field( 'parallax1' ); ?> );}
        div.img-parallax2{background-image: url(<?php the_field( 'parallax2' ); ?> );}
        div.img-parallax3{background-image: url(<?php the_field( 'parallax3' ); ?> );}
    </style>
    
    
    <div class="img-parallax1">
        <div class="parallax-oscuro">
                <div data-aos="fade-right" class="foto-perfil" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"> </div>
                <p data-aos="fade-right" class="saludo">Hola, soy</p>
                <h2 data-aos="fade-right"  class=titulo-parallax> <?php the_field( 'titulo1' ); ?> </h2>
                <div data-aos="fade-right" class="texto-parallax">
                    <?php the_field( 'texto1' ); ?>
            </div>    
        </div>
           <?php if ( get_field( 'parallax1') ) { ?>
             
            <?php } ?>                                      
                                                   
       
    </div>
        
  <!--acaba el parallax -->
  
    <div class="contenedor-inicio">
            <h2 data-aos="fade-up" class=titulo-contenedor> <?php the_field( 'titulo2' ); ?> </h2>
                <div class="contenedor-videos">
                    <div class="contenido-embed"><?php the_field( 'video1' ); ?></div>
                    <div class="contenido-embed"><?php the_field( 'video2' ); ?></div>
                    <div class="contenido-embed"><?php the_field( 'video3' ); ?></div>
                    </div>
                </div>   
            </div>
       
       </div>
        <?php if ( get_field( 'parallax2') ) { ?>
	 
        <?php } ?>
    </div>    
        
<!--acaban los videos -->
  <div class="contenedor-instagram">
    <div data-aos="fade-up" class="titulo-instagram"><?php the_title('<h2>', '</h2>'); ?></div>
    <div class="contenido-instagram"> <?php the_content(); ?></div>
  </div>
<?php endwhile; ?>
  


<?php get_footer(); ?>



	