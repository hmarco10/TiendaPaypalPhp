<?php

   require_once("class/class.php");

   $obj=new Trabajo();
   $id=strip_tags($_GET["id"]);
   $productos=$obj->getProductosPorId($id);

?>

<html>
   <head>
		<title>..::Mi carrito::..</title>
       <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" type="text/css" href="css/detalle.css">
       <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
       <script type="text/javascript" src="js/funciones.js"></script>
    </head>
         <body>
           <div class="cabez">
              <div id="header">
                <?php require_once("header.php") ?>
                 <div id="logo">
                    <a class="brand" href="index.php">Carro de compras</a>
                 </div>
              </div>
           </div>
           <div id="principal">
           <!--********************menu****************************************-->
            <!--********************contenedor******************************** -->
              <div id="content">
                    <div id="contenedor">
                          <br>
                          <?php foreach ($productos as $pro):?>
                          <h1><?php echo $pro["producto"]; ?></h1>
                                <div id="foto_detalle">
                                   <img src="fotos/<?php echo $pro["name"]."big.jpg"; ?>">
                                </div><br>
                                <div id="detalles">
                                    <p><?php echo $pro["producto"]; ?></p>
                                    <p><?php echo $pro["vig"]; ?></p>
                                    <p><?php echo $pro["precio"]; ?></p>
                                    <p><?php echo $pro["empresa"]; ?></p>
                                    <p><?php echo $pro["idioma"]; ?></p>
                                    <p><?php echo $pro["edad"]; ?></p>
                                </div>
                                <div id="video">
                                    <p style="text-align:left;"><?php echo $pro["video"]; ?></p>
                                    <!--a href="carrito.php?id=<?php echo $pro['id']; ?>&action=add">Comprar</a-->
                                    <button onclick="add2(<?php echo $pro['id'];?>,'add');" class="btn">Comprar</button>
                                </div>
                          <?php endforeach; ?>
                    </div><br><br>
              </div>
              <br><br>
                 <!--********************contenedor****************************************-->

              <footer id="footer">@HMAVG 2019 Seguridad De APlicaciones</footer>
            </div>
      </body>
</html>