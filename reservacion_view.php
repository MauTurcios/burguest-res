<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Delicious</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/prueba.ico"/>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        
        <link rel="stylesheet" href="assets/css/bootstrap1.min.css">
        
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                
                width: 70%;
                margin: auto;
                
                
                
            }
        </style>
        <!--alerts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets_alerts/js/bootstrap.min.js"></script>

        <!-- Custom functions file -->
        <script src="assets_alerts/js/functions.js"></script>
        <!-- Sweet Alert Script -->
        <script src="assets_alerts/js/sweetalert.min.js"></script>

        <link href="assets_alerts/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        
        <!-- Scroll Menu -->
        <link href="assets_alerts/css/sweetalert.css" rel="stylesheet">
        
        <!--script de firebse-- AGREGUE LOS SCRIPTS DE CLOUD FIREOSTRE-->
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"> </script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"> </script>
    
    </head>

    <body>
        <!--banner-->
        <section id="banner">
          <div class="bg-color">
            <header id="header">
                <div class="container">
                    <div id="mySidenav" class="sidenava">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a  href="#event">Croki</a>
                      <a  href="#contact">Formulaio</a>
                      <a  href="index.php/reservacion_controller/logout">Salir</a>
                    </div>
                    <!-- Use any element to open the sidenav -->
                    <span onclick="openNav()" class="pull-right menu-icon">☰</span>
                </div>
            </header>
            <div class="container">
                <div class="row">
                     <div class="inner text-center">
                        <img src="assets/img/fondo.png" class="logo-name">
                        <h2>Eslogan</h2>
                        <p>Reserva tu mesa</p>
                     </div>
                </div>
            </div>
          </div>
        </section>
        <!-- / banner -->
        <!-- event -->
        <section id="event">
            <center><h1 class="header-h">Croki del restaurante:</h1>
            <p style="font-size: 18px;">Aca puedes observar las zonas y mesas del restaurante:</p>
            <!--Espacio SVG-->
            <!--ACA HABIA UN CODIGO PHP, AHORAQ TENDRIA QUE HABER UN JS QUE NO HE HECHO.-->
            <?php require_once('croko.svg'); ?>
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <div class="inner text-center">
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ event -->
        <!-- contact -->
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="header-h">Reserva tu mesa</h1>
                        <p class="header-p">Llena la campos con tus datos personales para realizar la reservacion.</p>
                    </div>
                </div>
                <div class="row msg-row">
                    <div class="col-md-4 col-sm-4 mr-15">
                        <div class="media-2">
                            <div class="media-left">
                                <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                            </div>
                            <div class="media-body">
                                <h4 class="dark-blue regular">Numero de contacto</h4>
                                <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Establecimiento</span></p>
                            </div>
                        </div>
                        <div class="media-2">
                            <div class="media-left">
                                <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                            </div>
                            <div class="media-body">
                                <h4 class="dark-blue regular">Horario:</h4>
                                <p class="light-blue regular alt-p"> Lunes a sabado 09.00 am - 9:00 pm</p>
                                <p class="light-blue regular alt-p"> Domingos 08:00 am - 03.00 pm
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <div id="errormessage"></div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group label-floating is-empty">
                                    <label>Nombre y apelido del responsable:</label>
                                    ´<input type="text" id="responsable" name="responsable" class="form-control" value="" maxlength="18">
                                <div class="validation"></div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <label>Fecha:</label>
                                <input type="date" id="fecha" name="fecha" class="form-control label-floating is-empty" max="2019-12-31">
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                                <label>Zona:</label>
                                <input type="text" id="zona" name="zona" class="form-control label-floating pad-form" readonly>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <!--ACA.VA.LA.HORA.DE.LA.RESERVACION -->
                                <label>Hora de llegada:</label>
                                <select id="hora" name="hora" class="form-control label-floating pad-form">
                                    <option>09.00 AM</option>
                                    <option>10.00 AM</option>
                                    <option>11.00 AM</option>
                                    <option>12.00 PM</option>
                                    <option>01.00 PM</option>
                                    <option>02.00 PM</option>
                                    <option>03.00 PM</option>
                                    <option>04.00 PM</option>
                                    <option>05.00 PM</option>
                                    <option>06.00 PM</option>
                                    <option>07.00 PM</option>
                                    <option>08.00 PM</option>
                                    <option>09.00 PM</option>
                                </select>
                                <br/>
                                <br/>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <label>Telefono:</label>
                                <input type="text" id="telefono" name="telefono" class="form-control label-floating is-empty">
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <label>Cantidad máxima de personas:</label>
                                <input type="number" id="cant_personas" name="cant_personas" class="form-control label=floating is-empty"readonly>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 btnpad">
                            <div class="contacts-btn-pad">
                               <submit name="submit" id="submit" value="Guardar" class="btn btn-success" onclick="Add_res()">Reservar</submit>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer class="footer text-center">
            <div class="footer-top">
                <div class="row">
                    <div class="widget">
                        <h4 class="widget-title">Burgues</h4>
                        <div class="social-list">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                     </div>
                </div>
            </div>
        </footer>
        <!-- / footer -->
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="?assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/custom.js"></script>
        
        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#config-web-app -->
        <script src="res.js"></script>
    </body>
</html>
    <!-- / contact -->
    <!-- footer -->