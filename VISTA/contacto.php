<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneHub</title>
    <link rel="stylesheet" type="text/css" href="VISTA/css/style.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>
    <div class=" col-2 col-md-1 fixed-right-bottom">
        <a href="https://wa.me/34722677154" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path><path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path><path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path><path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path><path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>

    <div class="container-fluid fondo_4 d-flex flex-column ">
      <div style="height: 6em;" class="row"></div>      <!--FOTO CONTAINER-->
        
        <div class="row mb-5">
            <div class="col">
                <p style="text-shadow: black 0.1em 0.1em 0.2em" class="text-white text-center display-4 text-uppercase  fw-bold"> ¡CONTÁCTANOS!</p>
            </div>
        </div>
        <div class="row justify-content-center">

        
        <div  class="col-10 col-sm-8  col-lg-6 col-xl-6 m-3 p-3 bg-body bg-opacity-25 rounded">
            <form id="miFormulario" class="form-floating">
              <div class="row">
                <div class="col form-floating p-2 m-1">
                  <input type="text" class="form-control" id="nombre_contacto" placeholder="" style="height: 40px;">
                    <label  for="nombre_contacto">Nombre*</label>
                </div>
                <div class="col form-floating p-2 m-1">
                  <input type="text" class="form-control" id="apellido_contacto" placeholder="" style="height: 40px;">
                   <label  for="apellido_contacto">Apellido*</label>
                </div>
              </div>
                <div class="row">
                <div class="col form-floating p-2 m-1">
                  <input type="text" class="form-control" id="email_contacto" placeholder="" style="height: 40px;">
                  <label  for="email_contacto">Correo*</label>
                </div>
              </div>
              <div class="row">
                <div class="col form-floating p-2 m-1">
                  <input type="text" class="form-control" id="consulta_contacto" placeholder="" style="height: 100px">
                      <label  for="consulta_contacto">Consulta*</label>
                </div>
              </div>
              <div class="row">
                <div class="col-7">
              <div class="row">
                <div class="form-check form-switch   m-1">
                  <input class="form-check-input" type="checkbox" role="switch" id="check1">
                  <label class="form-check-label text-white " for="check1">Quiero recibir ofertas y novedades.</label>
                </div>
              </div>
              <div class="row">
                <div class="form-check form-switch m-1">
                  <input class="form-check-input" type="checkbox" role="switch" id="check2">
                  <label class="form-check-label text-white" for="check2">Acepto los términos y condiciones.</label>
                </div>
                
              </div>
              </div>
              <div class="col-5 align-self-center">
                <div class="row">
                  <button id="boton_submit" type="submit"  class="btn btn-outline-light shadow-lg">Enviar</button>
                </div>
              </div>
            </div>
            <div id="mensajesValidacion_contacto"></div>
            
            </form>
          </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    



    <script src="VISTA/js/validacion_contacto.js"></script>
</body>
</html>