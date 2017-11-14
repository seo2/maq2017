<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div class="container">
  			<div class="row">
				<?php
				require_once("_lib/config.php");
				require_once("_lib/MysqliDb.php");
				$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
				
				$url  = 'http://107.20.253.116:10000/totem/rest/front/getCategorias';
				$url  = 'http://52.45.110.155:8080/totem/rest/front/getCategorias';
				$lang = $_GET['lang'];
							
				if($lang=='Esp'){
					$idioma = 1;
				}elseif($lang=="Ing"){
					$idioma = 2;
				}elseif($lang=="Por"){
					$idioma = 3;
				}
				
				// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
				$ch = curl_init();
				
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"edificio\":86,\n \"idioma\":\"$lang\"\n}");
				curl_setopt($ch, CURLOPT_POST, 1);
				
				$headers = array();
				$headers[] = "Cache-Control: no-cache";
				$headers[] = "Content-Type: application/json";
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				
				$result = curl_exec($ch);
				if (curl_errno($ch)) {
				    echo 'Error:' . curl_error($ch);
				}
				curl_close ($ch);


				$json = json_decode($result, true);
				
				//print_r($json);
				
				
				foreach(  $json['objetoRetorno'] as $value ){
				?>
				<div class="panel panel-primary">
					<div class="panel-heading">
				<?
					$id_categoria = $value['id_categoria'];
					echo '<h3><span class="label label-info">'.$value['id_categoria'] .'</span> '.$value['nombre_categoria'] .'</h3>'; 
				?>
					</div>
					<div class="panel-body" style="word-wrap: break-word;">
						<div class="row">
							<div class="col-sm-4">
								<?php echo '<p><img src="'.$value['imagen_categoria'] .'" class="img-responsive"></p>'; ?>
							</div>
						</div>
				<?
					    echo '<p>'.$value['orden_categoria'] .'</p>';
					    //echo '<p>'.$value['sub_categorias'] .'</p>';
						foreach(  $value['sub_categorias'] as $sc ){
						    echo '<p>'.$sc['id_subcategoria'] .' '.$sc['nombre_subcategoria'] . '</p>';
						    //echo '<p><img src="'.$sc['imagen_subcategoria'] .'" class="img-responsive"></p>';
						    
							$existe = false;
							$id_subcategoria 	 = $sc['id_subcategoria'];
							$nombre_subcategoria = $sc['nombre_subcategoria']; 
							$imagen_subcategoria = $sc['imagen_subcategoria'];  
							$participante = $db->rawQuery("select * from pak_categorias where id_categoria = $id_categoria and id_subcategoria = $id_subcategoria");
							if($participante){
								foreach ($participante as $p) {
									$existe = true;
								}
							} 
							if(!$existe){
								$data = Array (
									"idioma" 				=> $idioma,
									"id_categoria" 			=> $id_categoria,
									"id_subcategoria" 		=> $id_subcategoria,
									"nombre_subcategoria" 	=> $nombre_subcategoria,
									"imagen_subcategoria"	=> $imagen_subcategoria
								);
								
								$mk125_ID = $db->insert ('pak_categorias', $data);
							} 
						}
				?>
					</div>
</div>
				<?
				}
				  		
				
				
				?> 		
  			</div>	
  		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
