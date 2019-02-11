<?php
/**
 * esto ya es de beto
 *
 * @
 */

get_header(); ?>

<header class="sq-main-header">
	<div class="sq-container">
		<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->



<div class="sq-container sq-clearfix">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
                
                

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>


    <div class="beto-instagram">
        <blockquote class="instagram-media" style="background: #FFF; border: 0; border-radius: 3px; box-shadow: 0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width: 540px; min-width: 326px; padding: 0; width: calc(100% - 2px);" data-instgrm-captioned="" data-instgrm-permalink="https://www.instagram.com/p/BarkXlnFXDm/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12">
        <div style="padding: 16px;">
        
        &nbsp;
        <div style="display: flex; flex-direction: row; align-items: center;">
        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
        </div>
        </div>
        <div style="padding: 19% 0;"></div>
        <div style="display: inline-block; height: 50px; margin: 0 auto 12px; width: 50px;"></div>
        <div style="padding-top: 8px;">
        <div style="color: #3897f0; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px;">Ver esta publicación en Instagram</div>
        </div>
        <div style="padding: 12.5% 0;"></div>
        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
        <div>
        <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
        <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
        <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
        </div>
        <div style="margin-left: 8px;">
        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
        <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg);"></div>
        </div>
        <div style="margin-left: auto;">
        <div style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
        <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
        <div style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
        </div>
        </div>
        &nbsp;
        <p style="margin: 8px 0 0 0; padding: 0 4px;"><a style="color: #000; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none; word-wrap: break-word;" href="https://www.instagram.com/p/BarkXlnFXDm/?utm_source=ig_embed&amp;utm_medium=loading" target="_blank" rel="noopener">Первый фанарт</a></p>
        <p style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap;">Una publicación compartida por <a style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px;" href="https://www.instagram.com/betovw9rhcp/?utm_source=ig_embed&amp;utm_medium=loading" target="_blank" rel="noopener"> Roberto Valencia Mejía</a> (@betovw9rhcp) el <time style="font-family: Arial,sans-serif; font-size: 14px; line-height: 17px;" datetime="2017-10-25T18:17:38+00:00">25 de Oct de 2017 a las 11:17 PDT</time></p>
        
        </div></blockquote>
        <script async src="//www.instagram.com/embed.js"></script>
        <blockquote class="instagram-media" style="background: #FFF; border: 0; border-radius: 3px; box-shadow: 0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width: 540px; min-width: 326px; padding: 0; width: calc(100% - 2px);" data-instgrm-permalink="https://www.instagram.com/p/hpujK2ODVw/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12">
        <div style="padding: 16px;">
        
        &nbsp;
        <div style="display: flex; flex-direction: row; align-items: center;">
        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
        </div>
        </div>
        <div style="padding: 19% 0;"></div>
        <div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px;"></div>
        <div style="padding-top: 8px;">
        <div style="color: #3897f0; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px;">Ver esta publicación en Instagram</div>
        </div>
        <div style="padding: 12.5% 0;"></div>
        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
        <div>
        <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
        <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
        <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
        </div>
        <div style="margin-left: 8px;">
        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
        <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg);"></div>
        </div>
        <div style="margin-left: auto;">
        <div style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
        <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
        <div style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
        </div>
        </div>
        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
        </div>
        &nbsp;
        <p style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap;"><a style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none;" href="https://www.instagram.com/p/hpujK2ODVw/?utm_source=ig_embed&amp;utm_medium=loading" target="_blank" rel="noopener">Una publicación compartida por Roberto Valencia Mejía (@betovw9rhcp)</a> el <time style="font-family: Arial,sans-serif; font-size: 14px; line-height: 17px;" datetime="2013-12-08T07:18:39+00:00">7 de Dic de 2013 a las 11:18 PST</time></p>
        
        </div></blockquote>
        <script async src="//www.instagram.com/embed.js"></script>
        
    </div>

</div>





<?php get_footer(); ?>