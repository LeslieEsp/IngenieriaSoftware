<?php
$data=$this->Modelo->verganado();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<head>
<title>Ganado</title>
<style type="text/css">
<!--
body {
  
  background: url(https://raw.githubusercontent.com/LeslieEsp/IngenieriaSoftware/master/imagenes/sheep-690198_1920.jpg) no-repeat;
  background-size: cover;

}
.Estilo4 {
  font-weight: bold;
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 18px;
}
.Estilo5 {
  font-weight: bold;
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 18px;
}
.Estilo11 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 18px;
}
-->
</style>
</head>

<body> 

  <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
      
      <!--tabla de datos-->
       <div class="card login-form col-md-9 " >
                        <div class="card-body">

<center>
              <h1><tr>
    <td height="89"><div align="center"><img src="https://raw.githubusercontent.com/LeslieEsp/IngenieriaSoftware/master/imagenes/logovic2.png" width="480" height="220"></div></td>
  </tr></h1>

              <p>Ganado</p> 
              <div class="row">
              
             <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
              <table  class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Raza</th> 
                  <th>Fecha_nacimiento</th>
                  <th>Estado</th>
                  <th>Fecha_muerte</th>
                </tr>
              <?php 
              	foreach($data as $fila)
              	{
               ?>
                <tr>
                  <td class="form"><?=$fila['id'];?></td>
                  <td><?=$fila['Raza'];?></td> 
                  <td><?=$fila['Fecha_Naci'];?></td>
                  <td><?=$fila['Estado'];?></td>
                  <td><?=$fila['Fecha_Muerte'];?></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td> 
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              <?php 
              }
              ?>

              </table>
            </center>
          </div>
               
               <center>
               <div class="card-body col-md-9">
              <a type="submit"  href="agr" class="btn btn-light bt-block col-md-2" style="background-color: 
              lightgreen">Agregar</a> 

              <a type="submit"  href="edi" class="btn btn-light bt-block col-md-2" style="background-color: 
              lightgreen">Editar</a> 

              <a type="submit"  href="eli" class="btn btn-light bt-block col-md-2" style="background-color: 
              lightgreen">Eliminar</a> 
              <a type="submit"  href="prin" class="btn btn-light bt-block col-md-2" style="background-color: 
              lightgreen">Regresar</a> 
              </center>
              </div>
              </div>
            </div>


            


<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/custom.js"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    <script type="text/javascript">
    function ConfirmDemo() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Seguro que deseas Eliminar?");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
    alert("¡Gracias por aceptar!");
    }
    //Detectamos si el usuario denegó el mensaje
    else {
    alert("¡Haz denegado el mensaje!");
    }
    }
  </script>
    

</body>
</html>