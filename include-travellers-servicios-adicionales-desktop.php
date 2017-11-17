<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_casas_cambio">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/casa_cambio.svg"   class="center-block">
              <!-- <p><?php echo $serv2; ?></p> -->
                      <p> Casas de cambio</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_casas_cambio" ><?php echo $btn1; ?></a>
          </div>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_taxis">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/taxis.svg"  class="center-block">
              <!-- <p><?php echo $serv4; ?></p> -->
                      <p> Lavado de autos</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_taxis" ><?php echo $btn1; ?></a>
        </div>
    </div>



	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 2222
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_casas_cambio" class="content_servicio collapse">
            <div id="content_casas_cambioancla" class="anclita"></div>
              <div class="container">
              <h4 class="divider azul"><?php the_title(); ?></h4>
               <div class="close_servicio" data-target="#serv2"> </div>
              <div class="row">
                  <div class="col-md-6 col-md-push-6">
                      <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                  </div>
                      <div class="col-md-6 col-md-pull-6 ">
                      <div class="desc_servicio">
                        <?php the_content(); ?>
                      </div>
                      </div>
              </div>
              </div>
            </div><!-- casas de cambio -->
	<?php endwhile; else: ?>
	<?php endif; ?>

	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 2223
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_taxis" class="content_servicio collapse">
        <div id="content_taxisancla" class="anclita"></div>
        <div class="container">
        <h4 class="divider amarillo"><?php the_title(); ?></h4>
        <div class="close_servicio" data-target="#serv4"> </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<?php the_content(); ?>
					</div>
				</div>
            </div>
        </div>
    </div> <!-- content taxis -->
	<?php endwhile; else: ?>
	<?php endif; ?>


	</div>
</div>








