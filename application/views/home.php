<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/home.css">-->
	<title>Home</title>
</head>
<body >
	    <div id="inicio" >
        	<nav class="navbar navbar-default navbar-static-top">
            	<div class="container" >
                	<div class="navbar-header" ">
                    	<a class="navbar-brand">
                        	Prueba de Suficiencia Academica Universidad autonoma tomas frias
                    	</a>
               		</div>
            	</div>
        	</nav>
        	<div class="container"  >
       				<div class="row">
            			<div class="col-md-8 col-md-offset-2" >
              		  		<div class="panel panel-default">
                   				<div class="panel-heading" >
                            		INTRODUSCA SUS DATOS
                   				</div>
                   				<div class="panel-body col-md-12">
                   				   <div class="col-md-4">
                                <img  src="<?= base_url()?>estilos/images/login.jpg" style="width: 300px; height: 350px">
                             </div>
                       				<form class="form-horizontal col-md-8" action="<?= base_url() ?>postulante/login" method="post">
                               					<div class="form-group">
                                    				<label for="username" class="col-md-5 control-label">NOMBRES</label>
                                    				<div class="col-md-7">
                                       		 			<input id="username" type="text" class="form-control" name="username" value="" required autofocus placeholder="Nonbre">
                                       		 		</div>
                                				</div>
    		                                <div class="form-group">
    		                                    <label for="apellido_pat" class="col-md-5 control-label">APELLIDO PATERNO</label>
    		                                    <div class="col-md-7">
    		                                        <input id="apellido_pat" type="text" class="form-control" name="apellido_pat" value="" required autofocus placeholder="Apellido Paterno">
    		                                      </div>
    		                                </div>
    		                                <div class="form-group">
    		                                    <label for="apellido_mat" class="col-md-5 control-label">APELLIDO MATERNO</label>
    		                                    <div class="col-md-7">
    		                                        <input id="apellido_mat" type="text" class="form-control" name="apellido_mat" value="" required autofocus placeholder="Apellido Materno">
    		                                      </div>
    		                                </div>
                                				<div class="form-group">
                                    				<label for="ci" class="col-md-5 control-label">C.I.</label>
                                    				<div class="col-md-7">
                                       		 			<input id="ci" type="int" class="form-control" name="ci" required placeholder="Carnet de Indentidad">
        											               </div>
                                				</div>
    		                                <div class="form-group">
    		                                    <label for="carrera" class="col-md-5 control-label" >CARRERA</label>
    		                                    <div class="col-md-7">
    		                                       <select id="carrera"  name="carrera" class="form-control" required >
    		                                            <option>Elige tu carrera</option>
    		                                            <option value="1">Arquitectura</option>
    		                                            <option value="4">auditoria</option>
    		                                            <option value="5">macanica</option>
    		                                            <option value="6">Carrera3</option>

    		                                          </select>
    		                                     </div>
    		                                </div>
                                				<div class="form-group">
                                    				<div class="col-md-12 ">
                                            <label  class="col-md-5 control-label" ></label>
                                        				<button type="submit" class="btn btn-primary col-md-7">INGRESAR</button>
                                    				</div>
                                				</div>
                       				</form>             
                              <button type="submit" class="btn btn-primary col-md-12">ingresar como administrador</button>
                    			</div>
                			</div>
            			</div>
        			</div>
          </div>
			</div>
    	
</body>
</html>