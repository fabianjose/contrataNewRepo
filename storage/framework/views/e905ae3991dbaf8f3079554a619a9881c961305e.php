<?php $__env->startSection("content-page"); ?>


   
   

   <section class="background-seccion-1" style=" background-image: url('images/Seccion-1-Pagina-Web.jpg');">

<div class="row" style="margin-top: 110px;">
    <div class="col-sm-6 col-12" style="margin-top: 86px;text-align: right;margin-left: -30px;">
<!--
    <div>
        <div class="col text-center">

    
                <br><br><br>
            <div class="container" style="    width: 75%;    text-align: justify;     line-height: 255%;     margin-left: 220px;     font-family: 'poppins-regular';">
                         <div>
                                     <h2 style="line-height: 100%;    font-weight: bold;     margin-top: 14px;">¿ Como funciona <br>El mejor Internet?</h2>
                                   <p style=" " >   <span style="font-size: 50px; color:#5691ff">1.</span> <span style="font-size: 20px;     font-weight: 500;">Seleccione el uso</span> </p>
                                   <p class="texto-gris-home">De clic en el icono que mas se <br> <span class="texto-gris-home-2">ajuste a su necesidad.</span>   </p>
                         </div>

                        <div>
                                    <p style=" " >   <span style="font-size: 50px; color:#5691ff">2.</span> <span style="font-size: 20px;     font-weight: 500;">Seleccione el tipo de servicio</span> </p>
                                    <p class="texto-gris-home">Elija el tipo de servicio por el <br> <span class="texto-gris-home-2">que se encuentre interesado.</span>   </p>
                        </div>

                        <div>
                                    <p style=" " >   <span style="font-size: 50px; color:#5691ff">3.</span> <span style="font-size: 20px;     font-weight: 500;">Seleccione departamento y municipio</span> </p>
                                    <p class="texto-gris-home">Especifique cual es el departamento y municipio<br> <span class="texto-gris-home-2">donde quiere instalar el servicio.</span>   </p>
                        </div>
                        <div>
                                    <p style=" " >   <span style="font-size: 50px; color:#5691ff">4.</span> <span style="font-size: 20px;     font-weight: 500;">Compare y elija la mejor opcion</span> </p>
                                    <p class="texto-gris-home">Encuentra la opcion ideal que se<br> <span class="texto-gris-home-2">ajuste a tus necesidades.</span>   </p>
                        </div>

                      
            </div>
            </div>

    </div>
-->
<img class="img-textos" style=" height: 60%; " src="images/Pimer-elemento-texto.png"  alt="">   

    </div>




    <div class="col-sm-6 col-12" style="margin-top: 40px;">


    <?php if($errors->any()): ?>
                    <search-form :errors="<?php echo e($errors); ?>"/>
                    <?php else: ?>
                    <search-form />
                    <?php endif; ?>
        
  


</div>
</div>
    
    
</section>





<section class="background-seccion-2" style=" background-image: url('images/Seccion-2-Pagina-Web.jpg');">

            <div class="row">
                <div class="col text-center">
                    <div class="div">
                        <h1>Ofertas del mes</h1>
                    </div>
                </div>
            </div>

           

            <div class=" justify-content-center container p-3" id="planes-destacados"  style="margin-top: -75px;">
                 <high-plans></high-plans>
             </div>
</section>





  
       
   <!-- 

        <div class="main-section-bg" style="position:relative;background: transparent;margin-top:-15%;" >

            
            <div class="about-section" style="background: transparent;">
                <div class="d-flex flex-column about-sub p-3" style="padding-left: 100px;
                        padding-right: 100px;">
                    <div class="fila-de-botones-sobre-buscador d-flex flex-row flex-wrap justify-content-center  text-heebo" >
                        <div class="botones-sobre-buscador col-6 col-sm-2 col-md-2 col-lg-2 p-2 my-2">
                            <div class="row align-items-start justify-content-center text-white">
                                <div class="rounded-circle about-number p-1 mb-1 text-center bg-dark-blue">1</div>
                                <p class="btn btn-1" class="col-12 col-md-8 col-lg-8 about-text  mt-1" class="texto-btn"  >
                                    
                                   Selecciona el uso
                                </p>
                            </div>
                        </div>
                        <div class="botones-sobre-buscador col-6 col-sm-3 col-md-3 col-lg-3 p-2 my-2">
                            <div class="row align-items-start justify-content-center text-white">
                                <div class="rounded-circle about-number p-1 mb-1 text-center bg-dark-blue">2</div>
                                <p class="btn btn-1" class="col-12 col-md-8 col-lg-8 about-text mt-1" class="texto-btn" >
                                    Selecciona el tipo de servicio
                                </p>
                            </div>
                        </div>
                        <div class="botones-sobre-buscador col-6 col-sm-4 col-md-4 col-lg-4 p-2 my-2">
                            <div class="row align-items-start justify-content-center text-white">
                                <div class="rounded-circle about-number p-1 mb-1 text-center bg-dark-blue">3</div>
                                <p class="btn btn-1" class="col-12 col-md-8 col-lg-8 about-text mt-1" class="texto-btn"  >
                                   Selecciona Departamento y Municipìo
                                </p>
                            </div>
                        </div>
                        <div class="botones-sobre-buscador col-6 col-sm-3 col-md-3 col-lg-3 p-2 my-2">
                            <div class="row align-items-start justify-content-center text-white">
                                <div class="rounded-circle about-number p-1 mb-1 text-center bg-dark-blue">4</div>
                                <p class="btn btn-1" class="col-12 col-md-8 col-lg-8 about-text  mt-1" class="texto-btn"   >
                                   Encuentra la Mejor Opción
                                </p>
                            </div>
                        </div>
                    </div>                
                    <?php if($errors->any()): ?>
                    <search-form :errors="<?php echo e($errors); ?>"/>
                    <?php else: ?>
                    <search-form />
                    <?php endif; ?>
                    
                </div>
                <section class="contador1">
                <div class="bg-ic d-flex flex-row justify-content-around flex-wrap align-items-center" style="z-index:3">
                          <config-counters :counters="<?php echo e(json_encode($configs)); ?>" class="col-10 col-sm-10 col-md-7 col-lg-7 col-xl-7"></config-counters>
                     </div>
                </section>
             
            </div>
            
            <section class="section-search mb-3" style="min-height: 500px; padding-top: 0%;margin-top: 0%;">
                
                    
                <div class=" justify-content-center container p-3" id="planes-destacados" >
                 <high-plans></high-plans>
             </div>
             <div style="    text-align: center;
"> 
    <img src="<?php echo e(asset('images/logoCI-1.png')); ?>"    class="logo-home-2" >     
             </div>
             
            
            </section>
            <section class="section-form formulario-centro" >
                       
                    <div class="row  justify-content-center  pb-5  " style="align-items: center;">
                        <div class="col-12 col-sm-3 text-center">
                            <h5 class="text-white text-ws texto-formulario-centro1" >Resolvemos todas tus <br> dudas en una llamada</h5>
                            <h2 class="text-white text-ws texto-formulario-centro2">¡Contáctanos!</h2>
                        </div>

                        <div class="col-12 col-sm-4 px-3">
                             <input id="nombre1" style="" class="form-control text-form mt-1  p-2"  type="text" name="" placeholder="Nombre"/>
                             <input id="celular1" style="" class="form-control text-form mt-1 p-2" type="text" name="" placeholder="Celular"/>
                             <input id="email1" style="" class="form-control text-form mt-1 p-2" type="text" name="" placeholder="Email"/>
                        </div>
                        <div class="col-12 col-sm-3">
                            <button id="btn-enviar" onclick="correo2();" class="btn text-white" style="background: rgb(13,217,244);font-size: 25px;">ENVIAR</button>
                        </div>
                    </div>
<script src=""></script>
<script>

function correo2(){                   
        var nombre = document.getElementById('nombre1').value;
        var num = document.getElementById('celular1').value;
        var mensaje = document.getElementById('email1').value;
        var t= num.length; 


        if(t == 10 || t == 7){ 



        Email.send({
        SecureToken : "06009ff8-2c43-499f-865a-b92f62e04395",
        To : 'espejofabian@gmail.com',
        From : "admin@internetcolombia.co",
        Subject : "llamar al cliente ",
        Body : " El cliente es de Contrata internet El cliente se llama: " + nombre + " el numero de telefono es:  "+ num + " y el mensaje es:  " + mensaje

        }).then(


        );

          console.log('sale')
          alert("Mensaje Enviado Correctamente")
          }


          else { alert('numero escrito invalido');
                  }             

              

                }
            
</script>
                
            </section>

            <section class="contador2" style="margin-top: 0px;">
                <div class="bg-ic2 d-flex flex-row justify-content-around flex-wrap align-items-center" style="z-index:3">
                          <config-counters :counters="<?php echo e(json_encode($configs)); ?>" class="col-10 col-sm-10 col-md-7 col-lg-7 col-xl-7"></config-counters>
                     </div>
                </section>

          
            <section class="section-blog" style="padding-top: 3rem;">
                <h1 class="text-center text-ws" style="font-weight: 800;">Nuestras Publicaciones de Blog</h1> <br>
                
            </section>-->

            <!--section id="blog" class="container">
<?php /*
	$url = "https://contratainternet.co/blog/wp-json/wp/v2/posts?_embed"; $ch = curl_init($url);  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$post = curl_exec($ch);
	$post = json_decode($post,true);
?>
				<div class="row" >


                                   <div class="col-12 col-md-4" style="text-align: -webkit-center;">
                    

                                            <div class="thumbnail" style="width: 100%; background-position:center;height: 230px;background-size: cover; background-image: url('<?=$post[0]["_embedded"]["wp:featuredmedia"][0]["source_url"] ?>');" alt=""></div> 
                                                            <div class="fondo-blog">
                                                            <br>
                                                                        <div class="titulo-blog limitado4">
                                                                        <?php print_r($post[0]["title"]["rendered"]);?>
                                                                        </div> 
                                                                <br>                         
                                                                    <div class="texto-blog limitado1 ">
                                                                        
                                                                        <span> <?php  print_r($post[0]["excerpt"]["rendered"]);?> </span>   
                                                                    </div>


                                                                <br>
                                                                <div style="">
                                                                        <a href="<?php print_r($post[0]["link"]);?>"> <img src="{{asset('images/leermas.png')}}" width=100%; alt="">   </a> 
                                                                </div>


                                                        </div>


                                            </div>

 


                                  

					<div class="col-12 col-md-4" style="text-align: -webkit-center;">
						<div class="thumbnail" style="width: 100%;background-position:center;background-size: cover; height: 230px; background-image: url('<?=$post[1]["_embedded"]["wp:featuredmedia"][0]["source_url"] ?>');" alt=""></div>
                      <div class="fondo-blog">
                      <br>
                      <div class="titulo-blog limitado5">
                      <?php print_r($post[1]["title"]["rendered"]);?>
                      </div>  

                      
                    
                        <br> 
						<div class="texto-blog limitado2">
                            
                        <?php  print_r($post[1]["excerpt"]["rendered"]);?>
                        </div>
                        <br>

                    
                        <div style="">
                          <a href="<?php print_r($post[1]["link"]);?>"> <img src="{{asset('images/leermas.png')}}" width=100%; alt="">   </a> 
                        </div>


                      </div>
					</div>
					<div class="col-12 col-md-4" style="text-align: -webkit-center;">
						<div class="thumbnail" style="width: 100%; background-position:center;height: 230px;background-size: cover; background-image: url('<?=$post[2]["_embedded"]["wp:featuredmedia"][0]["source_url"] ?>');" alt=""></div>
                     <div class="fondo-blog">
                      <br>
                     <div class="titulo-blog limitado6">
                      <?php print_r($post[2]["title"]["rendered"]);?>
                     </div>  

                    	<br> 
					<div class="texto-blog limitado3">
                            
                    	<?php print_r($post[2]["excerpt"]["rendered"]);?>
                    </div>
                    <br>
                    <div style="">
                          <a href="<?php print_r($post[2]["link"]);?>"> <img src="{{asset('images/leermas.png')}}" width=100%; alt="">   </a> 
                        </div>
                     </div>
					</div
                <?php */?>
            </section-->
            




          
           
       
     
       



<style>
                         
                        </style>
                        
                        <script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado1", 213);
	});
                        </script>

<script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado2", 213);
	});
                        </script>
                           <script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado3", 213);
	});
                        </script>
                         <script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado4",130);
	});
                        </script>
                           <script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado5",80);
	});
                        </script>
                           <script>
     function ellipsis_box(elemento, max_chars){
	limite_text = $(elemento).text();
	if (true)
	{
	limite = limite_text.substr(0, max_chars)+" ...";
	$(elemento).text(limite);
	}
    }
    

	$(function()
	{
	ellipsis_box(".limitado6",80);
	});
                        </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("layouts.landing", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ContrataNewRepo\resources\views/landing.blade.php ENDPATH**/ ?>