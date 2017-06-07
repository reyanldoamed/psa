<!DOCTYPE html>  
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<!-- Optional theme -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
    	<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body >
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container" >
            <div class="navbar-header" ">
                <a class="navbar-brand">
                    Prueba de Suficiencia Academica Universidad autonoma tomas frias
                 </a>
             </div>
             <?php if($this->session->userdata('login')){ ?>
             	<li>
             		<a href="<?= base_url() ?>postulante/login/logout">Cerra cession</a>
             	</li>
             <?php }else{ ?>
             <?php }?>
        </div>
    </nav>
  <form name="" method="post" action="<?= base_url()?>respuesta/resultado">
    <table  width="95%" style="border: 2px solid black; border-spacing: 15px;">
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de fisica</h4></b></th> 
      </tr>
      <?php
        $i=0;
        foreach($consulta->result() as $fila){
        $i++;
      ?>  
            <tr>
              <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?>  </b></td>
              <input type="hidden" name="idpre" value="">
            </tr>
            <tr>
              <td><b>Opcion A.</b>
                <input type="radio" name="pre<?= $i ?>" value="'.$pre<?= $i ?>.'" ><?= $fila->opcion1 ?>
              </td>
            </tr>
            <tr>
              <td><b>Opcion B.</b>
                <input type="radio" name="pre<?= $i ?>" value="<?= $fila->opcion2 ?>"><?= $fila->opcion2 ?>
              </td>
            </tr>
            <tr>
              <td><b>Opcion C.</b>
                <input type="radio" name="pre<?= $i ?>" value="<?= $fila->opcion3 ?>"><?= $fila->opcion3 ?>
                
              </td>
            </tr>
            <tr>
              <td><b>Opcion D.</b>
                <input type="radio" name="pre<?= $i ?>" value="<?= $fila->opcion4 ?>"><?= $fila->opcion4 ?>
                
              </td>
            </tr>
            <tr>
        <?php
        }
        ?>
      <!--area de matematicas-->
       
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Matematicas</h4></b></th> 
      </tr>
      <?php
        $i=0;
        foreach($consulta1->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><b><?= $i ?>.-<?= $fila->pregunta ?>  </b></td>
        <input type="hidden" name="idpre" value="">
      </tr>
      <td><b>Opcion A.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->opcion1 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->opcion2 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->opcion3 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->opcion4 ?>
          
        </td>
      </tr>
      <tr>
       <?php
        }
        ?>
    
      <!--area de histoia-->
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Historia</h4></b></th> 
      </tr>
       <?php
        $i=0;
        foreach($consulta2->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?> </b></td>
        <input type="hidden" name="idpre" value="">
      </tr>
      <tr>
        <td><b>Opcion A.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->opcion1 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->opcion2 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->opcion3 ?>
          
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->opcion4 ?>
          <
        </td>
      </tr>
      <?php
        }
        ?>

      <!-- area de literatura-->
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Literatura</h4></b></th> 
      </tr>
       <?php
        $i=0;
        foreach($consulta3->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?> </b></td>
        <input type="hidden" name="idpre" value="">
      </tr>
      <tr>
        <td><b>Opcion A.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->opcion1 ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->opcion2 ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->opcion3 ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->opcion4 ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
  
      <?php
        }
        ?>
      <tr>
        <td style="background-color: #f9f;" align="center";><button type="submit" class="btn btn-danger">TERNIMAR EXAMEN</button></td>

      </tr>
    </table>
  </form>
</body>
</html>
