<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap E-commerce Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="include/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="include/themes/css/bootstrappage.css" rel="stylesheet"/>

    <!-- global styles -->
    <link href="include/themes/css/flexslider.css" rel="stylesheet"/>
    <link href="include/themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="include/themes/js/jquery-1.7.2.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
    <script src="include/themes/js/superfish.js"></script>
    <script src="include/themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="include/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="#">My Account</a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                    <li><a href="<?php echo $helper->url("clientes","sesion") ?>">Iniciar Sesión</a></li>
                    <li><a href="<?php echo $helper->url("clientes","registrarCliente")?> ">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index.html" class="logo pull-left"><img src="include/themes/images//logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="./products.html">Woman</a>
                        <ul>
                            <li><a href="./products.html">Lacinia nibh</a></li>
                            <li><a href="./products.html">Eget molestie</a></li>
                            <li><a href="./products.html">Varius purus</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Man</a></li>
                    <li><a href="./products.html">Sport</a>
                        <ul>
                            <li><a href="./products.html">Gifts and Tech</a></li>
                            <li><a href="./products.html">Ties and Hats</a></li>
                            <li><a href="./products.html">Cold Weather</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Hangbag</a></li>
                    <li><a href="./products.html">Best Seller</a></li>
                    <li><a href="./products.html">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="header_text sub">
        <img class="pageBanner" src="include/themes/images/pageBanner.png" alt="New products" >

    </section>
    <section class="main-content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="span7">
                    <h4 class="title"><span class="text-center"><strong>Regristrase</strong></h4>
                    <form action="<?php echo $helper->url("clientes","crear")?>" method="post" class="form-stacked">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">Nombre</label>
                                <div class="controls">
                                    <input type="text" name="nombre" placeholder="Ingrese sus nombres" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Apellido</label>
                                <div class="controls">
                                    <input type="text" name="apellido" placeholder="Ingrese sus apellidos" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Cedula</label>
                                <div class="controls">
                                    <input type="text" name="cedula" placeholder="Ingrese sus cedula" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nick:</label>
                                <div class="controls">
                                    <input type="text" name="nick" placeholder="Ingrese su nick" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Contraseña:</label>
                                <div class="controls">
                                    <input type="password" name="password" placeholder="Ingrese su contraseña" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Correo:</label>
                                <div class="controls">
                                    <input type="text" name="email" placeholder="Ingrese su correo" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Telefono:</label>
                                <div class="controls">
                                    <input type="text" name="telefono" placeholder="Ingrese su telefono" class="input-xlarge">
                                </div>
                            </div>
                            <!--<div class="control-group">
                                <p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
                            </div>-->
                            <hr>
                            <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Registrar"></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-bar">
        <div class="row">
            <div class="span3">
                <h4>   Facebook</h4>
                <img src="include/themes/images/PrincipalS/facebook.png " width="110">
                <h4> Kwik E Mart</h4>
            </div>
            <div class="center">
                <h4>Instagram</h4>
                <br>
                <img src="include/themes/images/PrincipalS/instagram.png " width="80">
                <h4>Kwik E Mart</h4>
            </div>


        </div>
    </section>
    <!--<section id="copyright">
        <span>Copyright 2013 bootstrappage template  All right reserved.</span>
    </section>-->
</div>
<script src="include/themes/js/common.js"></script>
<script>
    $(document).ready(function() {
        $('#checkout').click(function (e) {
            document.location.href = "checkout.html";
        })
    });
</script>
</body>
</html>