<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
    <div class="col-xs-6">
        <div class="box_servicio" id="serv1xsbox">
          <a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#serv1xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/casa_cambio.svg"  class="center-block">
             <!--  <p><?php echo $serv1; ?></p> -->
             <p>Casas de cambio</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv1xs"><?php echo $btn1; ?></a>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="box_servicio" id="serv2xsbox">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#serv2xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/taxis.svg"  class="center-block">
             <!--  <p><?php echo $serv2; ?></p>-->
              <p> Lavado de autos</p>
          </a>
        </div>
        <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv2xs"><?php echo $btn1; ?></a>
        </div>
    </div>

    <?php
        $args = array(
        'post_type'     => array('servicios_generales'),
        'p'         => 2222
        );
      $the_query = new WP_Query ($args);
        $i = 0;
        if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          $i++;
    ?>


      <div id="serv1xs" class="content_servicio collapse">
          <div id="serv1xsancla" class="anclita"></div>
          <div class="container">
              <h4 class="divider verde"><?php the_title(); ?></h4>
          <div class="close_servicio" data-target="#serv1xs"></div>
          <div class="row">
                  <div class="col-md-6 col-md-push-6">

                  <div class="desc_servicio">
                      <?php the_content(); ?>
                   </div>
                </div>
                 <!-- row -->
        </div> <!-- container -->
      </div> <!-- content casas de cambio -->
      </div>
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
	<div id="serv2xs" class="content_servicio collapse">
        <div id="serv2xsancla" class="anclita"></div>
        <div class="container">
        	<h4 class="divider azul"><?php the_title(); ?></h4>
            <div class="close_servicio" data-target="#serv2xs"> </div>
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
    </div><!-- content lavado de autos -->

	<?php endwhile; else: ?>
	<?php endif; ?>

  </div>
</div>








