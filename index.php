 <!DOCTYPE html>
 <html lang="es">

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="icon" type="image/png" href="favicon.png" />
 	<title>El Arturo | Inicio</title>
 	<!-- Libraries -->
 	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
 	<link rel="stylesheet" href="node_modules/hover.css/css/hover-min.css">
 	<link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
 	<link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css">
 	<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
 	<!-- Custom styles -->
 	<link rel="stylesheet" href="css/styles.css?v=1">
 	<link rel="stylesheet" href="css/icons-responsive.css?v=1">

 	<!-- Facebook Pixel -->
 	<?php include 'include/facebook-pixel.php' ?>

 </head>

 <body>

 	<!-- Slider main container -->
 	<div class="swiper-container bg-elarturo">
 		<!-- Additional required wrapper -->
 		<div class="swiper-wrapper">
 			<!-- Slides -->
 			<div class="swiper-slide bg-size-img bg-pasado">
 				<div class="img-config-position pasado-personaje">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalBiografia">
 						<img src="icons/pasado/personaje.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position pasado-guitarra">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalSoundCloudVoiceNotes">
 						<img src="icons/pasado/guitarra.png" class="animate__animated animate__swing hvr-buzz-out" alt="elarturo.mx" style="background: transparent;">
 					</a>
 				</div>
 				<div class="img-config-position pasado-poster">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalCarouselPasadoInfancia">
 						<img src="icons/pasado/poster.png" class="animate__animated animate__wobble hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position pasado-amplificador">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalCarouselPasadoLibreta">
 						<img src="icons/pasado/amplificador.png" class="animate__animated animate__heartBeat hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position pasado-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalPasadoCoyote">
 						<img src="icons/pasado/coyote.png" class="animate__animated animate__wobble hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 			<div class="swiper-slide bg-size-img bg-ya-lo-decidi">
 				<div class="img-config-position decidi-personajes" style="cursor: unset;">
 					<img src="icons/ya-lo-decidi/personajes.png" class="hvr-grow" usemap="#image_map_decidi">
 					<map name="image_map_decidi">
 						<area id="id_modal_brazo_decidi" alt="Ya lo decidí - Brazo" title="Ya lo decidí - Brazo" href="#" coords="631,362 623,371 621,379 620,393 620,407 620,420 621,441 624,454 628,464 635,471 645,471 660,464 676,455 690,443 707,431 719,417 738,401 754,383 774,367 785,355 791,343 792,335 789,321 785,305 782,294 777,283 773,273 767,261 760,249 749,230 727,196 691,138 681,127 675,117 674,106 670,93 659,70 652,59 647,47 637,46 625,45 612,47 601,53 584,58 579,68 580,73 574,73 569,71 568,76 567,88 572,102 576,107 580,117 588,126 597,128 612,131 623,134 629,138 639,158 648,176 655,188 661,204 668,219 675,246 682,271 688,282 693,296 704,310 697,314 682,326 663,337 648,349 631,362 " shape="polygon">
 						<area id="id_modal_cabeza_decidi" alt="Ya lo decidí - Cabeza" title="Ya lo decidí - Cabeza" href="#" coords="413,426 449,442 441,435 439,425 454,413 464,401 465,387 462,379 469,367 478,354 465,341 463,326 464,296 464,290 471,289 476,288 478,266 479,250 480,237 477,223 472,210 469,192 448,166 431,160 404,153 374,161 340,179 331,190 313,211 310,236 309,257 312,272 327,282 337,299 335,335 328,340 336,351 347,358 354,364 356,374 356,389 357,405 370,410 386,410 398,411 413,425 " shape="polygon">
 						<area id="id_modal_brasier_decidi" alt="Ya lo decidí - Brasier" title="Ya lo decidí - Brasier" href="#" coords="26,519 40,643 67,656 116,675 157,690 197,700 265,709 266,698 286,682 288,664 288,644 289,623 293,614 301,603 297,600 283,614 264,630 242,632 222,633 206,631 200,622 207,605 220,570 231,540 236,518 244,501 255,491 256,486 244,484 236,492 208,552 191,593 184,612 180,618 126,609 107,603 82,594 64,580 53,572 47,508 26,519 " shape="polygon">
 					</map>
 				</div>
 				<div class="img-config-position decidi-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalDecidiCoyote">
 						<img src="icons/ya-lo-decidi/coyote.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position decidi-cel">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalDecidiCel">
 						<img src="icons/ya-lo-decidi/cel.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 			<div class="swiper-slide bg-size-img bg-vida-easy">
 				<div class="img-config-position easy-cuerpo">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalCarouselVidaEasyKenia">
 						<img src="icons/la-vida-era-mas-easy/cuerpo.png" class="hvr-grow" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position easy-cel">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalRecuerdos">
 						<img src="icons/la-vida-era-mas-easy/cel.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position easy-hojas">
 					<a href="https://carta-natal.es/virgo.php" target="_BLANK">
 						<img src="icons/la-vida-era-mas-easy/hojas.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position easy-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalLaVidaEraMasEasy">
 						<img src="icons/la-vida-era-mas-easy/coyote.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 			<div class="swiper-slide bg-size-img bg-mami-perfecta">
 			</div>
 			<div class="swiper-slide bg-size-img bg-ya-valio-madres">
 			</div>
 			<div class="swiper-slide bg-size-img bg-y-que">
 				<div class="img-config-position yque-personaje" style="cursor: unset">
 					<img src="icons/y-que/personaje.png" class="hvr-grow" usemap="#image_map">
 					<map name="image_map">
 						<area href="https://marvin.com.mx/elarturo-sabino-date-cuenta-altiplano-records-regional-urbano/" target="_BLANK" title="ElArturo y Sabino se encuentran para hablar de desamor" coords="230,307 249,297 269,294 284,294 302,292 311,291 318,295 324,308 326,326 329,344 331,357 331,366 327,379 325,391 321,402 314,409 316,413 307,421 301,429 285,436 277,435 272,432 271,422 267,409 261,400 257,393 250,388 245,373 240,363 234,348 231,326 230,307 " shape="polygon">
 						<area href="#" id="id_modal_manos" title="Estudio - ElArturo" coords="159,630 165,619 173,613 187,607 197,608 202,616 203,628 209,637 222,647 237,656 245,657 254,657 263,659 271,657 277,653 285,653 299,655 310,653 317,650 327,644 341,634 340,630 345,627 360,639 368,649 372,657 377,667 373,670 363,670 349,676 343,679 335,684 326,692 319,699 312,707 301,717 295,726 286,730 277,731 265,728 262,737 254,742 243,742 234,739 227,736 222,732 222,725 220,722 212,722 205,717 195,704 191,699 186,692 180,664 169,647 159,630 " shape="polygon">
 					</map>
 				</div>
 				<div class="img-config-position yque-cuervo">
 					<a href="https://elarturo.lnk.to/YQue_" target="_BLANK">
 						<img src="icons/y-que/cuervo.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position yque-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalYqueCoyote">
 						<img src="icons/y-que/coyote.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position yque-lata">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalCarouselYqueFotos">
 						<img src="icons/y-que/lata.png" class="hvr-rotate" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 			<div class="swiper-slide bg-size-img bg-apenas-empezaba">
 				<div class="img-config-position empezaba-cuerpo">
 					<a href="https://elarturo.lnk.to/ApenasEmpezaba" target="_BLANK">
 						<img src="icons/apenas-empezaba/cuerpo.png" class="hvr-grow" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position empezaba-cenicero">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalApenasEmpezabaCenicero">
 						<img src="icons/apenas-empezaba/cenicero.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position empezaba-basura">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalApenasEmpezabaBasura">
 						<img src="icons/apenas-empezaba/bote-basura.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position empezaba-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalApenasEmpezaba">
 						<img src="icons/apenas-empezaba/coyote.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position empezaba-libreta">
 					<a href="https://es.wikipedia.org/wiki/Arturo_(estrella)" target="_BLANK">
 						<img src="icons/apenas-empezaba/libreta.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 			<div class="swiper-slide bg-size-img bg-presente">
 				<div class="img-config-position presente-productor">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalNewsletterMerch">
 						<img src="icons/presente/productor.png" class="hvr-grow" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position presente-guitarra">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalPresenteGuitarra">
 						<img src="icons/presente/guitarra.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position presente-coyote">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalNewsletter">
 						<img src="icons/presente/coyote.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position presente-corazon">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalCarouselPresenteReweb">
 						<img src="icons/presente/corazon.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 				<div class="img-config-position presente-nota">
 					<!-- Button trigger modal -->
 					<a href="#" data-toggle="modal" data-target="#modalNotaMusical">
 						<img src="icons/presente/nota-musical.png" class="hvr-buzz-out" alt="elarturo.mx">
 					</a>
 				</div>
 			</div>
 		</div>
 		<!-- If we need pagination -->
 		<div class="swiper-pagination"></div>

 		<!-- If we need navigation buttons -->
 		<div class="swiper-button-prev"></div>
 		<div class="swiper-button-next"></div>

 		<img src="icons/linea.png" class="line-pagination" alt="">

 		<div class="swiper-icons-social">
 			<a href="https://www.facebook.com/elarturoapa" class="hvr-buzz-out" target="_BLANK">
 				<img src="icons/redes/fb-icon.png" class="icon-redes animate__animated animate__backInLeft" alt="Redes sociales">
 			</a>
 			<a href="https://www.instagram.com/_elarturo/" class="hvr-buzz-out" target="_BLANK">
 				<img src="icons/redes/insta-icon.png" class="icon-redes animate__animated animate__backInLeft" alt="Redes sociales">
 			</a>
 			<!-- Button trigger modal -->
 			<a href="#">
 				<img id="icon-elarturo" src="icons/redes/musical.png" class="icon-redes animate__animated animate__backInDown" alt="Redes sociales">
 			</a>
 			<a href="https://www.youtube.com/channel/UCQJCchaiKV1SZKzFv-jT7Dw" class="hvr-buzz-out" target="_BLANK">
 				<img src="icons/redes/youtube-icon.png" class="icon-redes animate__animated animate__backInRight" alt="Redes sociales">
 			</a>
 			<a href="https://www.tiktok.com/@elarturoapa?lang=es" class="hvr-buzz-out" target="_BLANK">
 				<img src="icons/redes/tiktok-icon.png" class="icon-redes animate__animated animate__backInRight" alt="Redes sociales">
 			</a>
 		</div>

 	</div>

 	<!-- CLAIM -->
 	<?php include 'include/modals/general.php' ?>

 	<!-- PASADO -->
 	<?php include 'include/modals/pasado.php' ?>

 	<!-- YA LO DECIDÍ -->
 	<?php include 'include/modals/ya-lo-decidi.php' ?>

 	<!-- VIDA EASY -->
 	<?php include 'include/modals/vida-easy.php' ?>

 	<!-- Y QUE -->
 	<?php include 'include/modals/y-que.php' ?>

 	<!-- APENAS EMPEZABA -->
 	<?php include 'include/modals/apenas-empezaba.php' ?>

 	<!-- PASADO -->
 	<?php include 'include/modals/presente.php' ?>

 	<!-- CAROUSELS -->
 	<?php include 'include/modals/carousels.php' ?>

 	<!-- Modules web -->
 	<script src="node_modules/jquery/dist/jquery.min.js"></script>
 	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 	<script src="node_modules/swiper/swiper-bundle.min.js"></script>
 	<script src="node_modules/slick-carousel/slick/slick.js"></script>
 	<script src="node_modules/lodash/lodash.min.js"></script>
 	<script src="node_modules/image-map-resizer/js/imageMapResizer.min.js"></script>
 	<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

 	<!-- Main js -->
 	<script src="js/app.js?v=1"></script>

 </body>

 </html>