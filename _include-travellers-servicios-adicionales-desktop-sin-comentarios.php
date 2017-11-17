<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
 <!--    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv1box">
          <a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#content_farmacia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-farmacia.png"  class="center-block">
                  <p><?php echo $serv1; ?></p>
                  <p>Farmacias</p>
          </a>
        </div>
        <div class="box_more_info">
          <a  data-toggle="collapse" data-target="#content_farmacia" ><?php echo $btn1; ?></a>
        </div>
    </div> -->


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_casas_cambio">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/casa_cambio.svg"   class="center-block">
              <p><?php echo $serv2; ?></p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_casas_cambio" ><?php echo $btn1; ?></a>
          </div>
    </div>


<!--     <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv3box">
          <a href="javascript:void(0);" class="borde_naranja" data-toggle="collapse" data-target="#content_agencia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/agencia.svg"  class="center-block">
              <p><?php echo $serv3; ?></p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_agencia" ><?php echo $btn1; ?></a>
          </div>
    </div> -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_taxis">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/taxis.svg"  class="center-block">
              <p><?php echo $serv4; ?></p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_taxis" ><?php echo $btn1; ?></a>
        </div>
    </div>

    <div id="content_farmacia" class="content_servicio collapse">
    	<div id="content_farmaciaancla" class="anclita"></div>
    	<div class="container">
        	<h4 class="divider verde">Farmacias</h4>
			<div class="close_servicio" data-target="#serv1"></div>
			<div class="row">
            	<div class="col-md-6 col-md-push-6">
                    <div class="head_agencia">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cruzverde.jpg" alt="" width="70" height="45">
                    </div>
                     <div class="desc_servicio">
                          <p>Todos los productos y servicios orientados a cuidar la salud están en Farmacias Cruz Verde,
                            una de las más importantes cadenas de farmacias chilenas. Una variada línea de
                            productos cosméticos completa la oferta. Lo mejor en servicio, con personal
                            capacitado y orientado a atender todas tus necesidades.
                            Horario. Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>
                              <a href="http://www.cruzverde.cl/" target="_blank" class="url_agencia">www.cruzverde.cl</a>
                	</div>
               </div>

				<div class="col-md-6 col-md-pull-6 ">
                    <div class="head_agencia">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/salcobrand.jpg" alt="" width="70" height="45">
                    </div>
                    <div class="desc_servicio">
                     <p>
                        La más completa farmacia que tiene además a su disposición de sus clientes
                        la zona de servicios, un lugar que cuenta con sillas de espera,
                         máquina de agua purificada y orientación farmacéutica.

                        Horario Lunes a domingos y festivos, de 10:30 a 21:30 hrs.
                     </p>
                     <a href="http://www.salcobrand.cl/" target="_blank" class="url_agencia">www.salcobrand.cl</a>

                    </div>
            	</div>
            </div>
          <!--   <h4 class="divider verde"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $tit3; ?></h4> -->
             <!-- row -->
		</div> <!-- container -->
	</div> <!-- content transfer -->



	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1615
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

    <div id="content_agencia" class="content_servicio collapse">
        <div id="content_agenciaancla" class="anclita"></div>
        <div class="container">
			<h4 class="divider naranja"><?php echo $serv3; ?></h4>
			<div class="close_servicio" data-target="#serv3"> </div>
            <div class="row">

                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="70" height="45">
                        </div>
                        <div class="desc_servicio text-center">
                            <p> En Cocha encuentra la mejor alternativa para tu viaje. Cruceros, pasajes, paquetes
                            turísticos y otros servicios que te ayudaran a disfrutar al máximo tu descanso.</p>
                            <p>Tel.: +562 464 18 00 </p>
                            <p>Mail : msolari@cocha.com</p>

                            <a href="http://www.cocha.cl/" target="_blank" class="url_agencia">www.cocha.cl</a>
                        </div>
                    </div>
                </div>


              </div>
        </div>
	</div> <!-- content agencia -->

	<?php
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1622
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

   <!--  <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv5box">
          <a href="javascript:void(0);" class="borde_rojo" data-toggle="collapse" data-target="#content_bancos">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bancos.svg"   class="center-block">
              <p><?php echo $serv5; ?></p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_bancos"><?php echo $btn1; ?></a>
          </div>
    </div> -->

<!--      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv6box">
          <a href="javascript:void(0);" class="borde_verde" data-toggle="collapse" data-target="#content_telefonia">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-telefonia.png"   class="center-block">
               <p><?php echo $serv5; ?></p>
                  <p>Telefonía</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_telefonia"><?php echo $btn1; ?></a>
          </div>
    </div> -->



<!--       <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio">
          <a href="javascript:void(0);" class="borde_verde_oscuro" data-toggle="collapse" data-target="#content_chip">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/arauco_chip.svg"  class="center-block">
              <p>Arauco Chip </p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_chip" ><?php echo $btn1; ?></a>
          </div>
      </div> -->

    <div id="content_bancos" class="content_servicio collapse">
        <div id="content_bancosancla" class="anclita"></div>
        <div class="container">
            <h4 class="divider rojo"><?php echo $serv5; ?></h4>
			<div class="close_servicio" data-target="#serv5"> </div>
			<div class="row">
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel">Telephone: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                            <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel"> Telephone: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                 </div>
				<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h<br>
                                  </p>
                                  <p class="tel">Tel.: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h <br>
                                  </p>
                                  <p class="tel"> Tel.: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                 </div>
				<?php }else{  ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/banco-de-chile.jpg" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco de Chile abierta de lunes a viernes, de 09:00 a 14:00 hrs. <br>
                              Haz todos tus trámites y luego vitrinéatelo todo!
                                  </p>
                                  <p class="tel">Banco de chile</p>

                                   <a href="http://www.bancochile.cl/" target="_blank" class="url_agencia">www.bancochile.cl</a>
                              </div>

                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Sucursal BBVA abierta de lunes a viernes, de 09:00 a 14:00 hrs.<br>
                            Haz todos tus trámites y luego ¡tómate ese delicioso café que estabas esperando!
                             <br>
                                  </p>
                                  <p class="tel"> Banco BBVA</p>
                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                       </div>
                     </div>
                 </div>

                     <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/banco_bci.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco BCI abierta de lunes a viernes, de 09:00 a 14:00 hrs.<br>
                              Haz todos tus trámites en un espacio cómodo y grato.
                                  </p>
                                  <p class="tel">Banco BCI</p>

                                   <a href="http://www.bci.cl/" target="_blank" class="url_agencia">www.bci.cl</a>
                              </div>

                       </div>
                 </div>



                   <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/falabella.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Sucursal Banco Falabella abierta de lunes a viernes de 09:00 a 21:00 Sábado - domingo y festivos 11:00 a 19:00 hrs. <br>
                              Haz todos tus trámites y luego anda a buscar el regalo para esa persona tan especial!
                                  </p>
                                  <p class="tel">Banco Falabella</p>

                                   <a href="http://www.bancofalabella.cl/" target="_blank" class="url_agencia">www.bancofalabella.cl</a>
                              </div>

                       </div>
                 </div>
				<?php } ?>
			</div> <!-- row -->
        </div>
    </div><!-- content bancos -->

    <div id="content_telefonia" class="content_servicio collapse">
        <div id="content_telefoniaancla" class="anclita"></div>
        	<div class="container">
            	<h4 class="divider verde">Telefonía</h4>
				<div class="close_servicio" data-target="#serv6"> </div>
			</div>
            <div class="row">
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/claro.png">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Los módulos de venta Claro ofrecen una gran variedad de productos y servicios de telefonía celular: planes mixtos,
                              planes cuenta exacta y prepagos con modernos equipos móviles. Y tú, ¿ya tienes un Smartphone?
                                  </p>
                                  <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>

                                   <a href="http://www.clarochile.cl/" target="_blank" class="url_agencia">www.clarochile.cl</a>
                              </div>

                       </div>
                 </div>
				<div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_entel.png" height="40">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Módulo de venta de planes, kit de prepago y tarjetas telefónicas. ¡Lo último en telefonía móvil al alcance de todos!
                             <br>
                                  </p>
                                  <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>
                                   <a href="http://www.entel.cl/" target="_blank" class="url_agencia">www.entel.cl</a>
                       </div>
                     </div>
                </div>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_movistar.jpg">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Encuentra aquí todos los servicios Movistar: contratación de planes y productos, pago de cuentas, servicio al cliente, entre otros.
                                  </p>
                                  <p class="tel">Horario de atención: de lunes a viernes de 10:00 a 21:00 hrs., sábado de 10:00 a 14:00. Domingo y festivos cerrado.</p>

                                   <a href="http://www.movistar.cl/" target="_blank" class="url_agencia">www.movistar.cl</a>
                              </div>

                       </div>
                 </div>
                <div class="clearfix"></div>
                <div class="col-md-4">
                    <div class="box_agencia">
                    	<div class="head_agencia">
                        	<img src="<?php bloginfo('template_url'); ?>/assets/img/vtr.png" >
                        </div>
                        <div class="desc_servicio text-center">
                        	<p> VTR ofrece en su tienda de Arauco Maipú servicios como recepción de pagos de los distintos servicios de la empresa y atención a clientes en televisión por cable, telefonía e internet. Encuentra solución a tus requerimientos en la mayor comodidad del mal.
                            </p>
                            <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>
							<a href="http://www.vtr.cl/" target="_blank" class="url_agencia">www.vtr.cl</a>
                        </div>
                    </div>
            	</div>
				<div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/wom.png" >
                             </div>
                             <div class="desc_servicio text-center">
                             <p> WOM ofrece un servicio de excelencia, data de alta calidad y a un precio justo, gracias al despliegue de nuestra red propia con cobertura nacional. Podrás encontrar en este módulo el equipo que andas buscando. ¡Te esperamos!

                                  </p>
                                  <p class="tel">Horario de atención: Lunes a domingos y festivos, de 10:30 a 21:30 hrs.</p>

                                   <a href="http://www.wom.cl/" target="_blank" class="url_agencia">www.wom.cl</a>
                              </div>

                       </div>
                 </div>
            </div> <!-- row -->
		</div>
	</div>
</div>








