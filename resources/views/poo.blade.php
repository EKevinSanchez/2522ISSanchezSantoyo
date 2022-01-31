
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

	<script src="js/modernizr.js"></script>

	<link rel="shortcut icon" href="favicon.png" >
</head>
<body>

<section id="portfolio">

<div class="row">

   <div class="twelve columns collapsed">

      <h1>Escoge el animal a ver</h1>

      <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

           <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-01" title="">
                  <img alt="" src="images/poo/perro.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>Perro</h5>
                        
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
            </div>

         <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-02" title="">
                  <img alt="" src="images/poo/gato.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>Gato</h5>
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
         </div>

      </div>

   </div>
   <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/poo/perro.jpg" alt="" />

		      <div class="description-box">
			      <h4>Perro</h4>
			      <p>{{$datos}}</p>
		      </div>

            <div class="link-box">
               <a href="{{route('portafolio-emmanuel')}}">VER</a>
		         <a class="popup-modal-dismiss">CERRAR</a>
            </div>

	      </div>

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/poo/gato.jpg" alt="" />

		      <div class="description-box">
			      <h4>gato</h4>
			      <p>{{$datos2}}</p>
		      </div>
</section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
</body>
</html>