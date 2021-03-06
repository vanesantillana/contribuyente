<!-- Modal Arrendamiento-->
<div class="modal fade" id="myModal3" role="dialog">
	<div class="modal-dialog modal-lg">

	  <div class="modal-content">
	    <div class="modal-header" style="background-color:#0b5394">
	      <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Para Arrendamiento</strong></h4>
	    </div>
	    <div class="modal-body">
	      <div>
		<form name="formulario" id="formu" method="post" action="guias/arrenda/arrenda.php" target="_blank" >
		  <div id="row">
		    <h4><b>Datos Necesarios del Arrendador</b></h4>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-user"></span> N° de RUC:</label>
		      <input type="text" name="ruc" class="form-control" id="mi-ruc" placeholder="XXXXXXXXXXX" required>
		    </div>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-user"></span> Nombre del contribuyente:</label>
		      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan Salas Perez">
		    </div>
		    </div>
		  <div id="row">
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-calendar"></span> Periodo:</label>
		      <input type="text" name="anio" class="form-control"  id="mi-periodo" placeholder="2017" value="2017">
		    </div>

		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-calendar-o"></span> Mes:</label>
		      <select class="form-control" name="mes">
			<option value="01">Enero</option>
			<option value="02">Febrero</option>
			<option value="03">Marzo</option>
			<option value="04">Abril</option>
			<option value="05">Mayo</option>
			<option value="06">Junio</option>
			<option value="07">Julio</option>
			<option value="08">Agosto</option>
			<option value="09">Septiembre</option>
			<option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		      </select>
		    </div>
		    
		  </div>
		  <div id="row">	
		    <h4><b>Datos Necesarios del Inquilino</b></h4>					    
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-list-alt"></span> Código del Documento de Indentidad:</label>
		      <select class="form-control" name="cod">
			<option value="6">RUC</option>
			<option value="1">DNI o Libreta Electoral</option>
			<option value="2">Carné de Fuerzas Policiales</option>
			<option value="3">Carné de Fuerzas Armadas</option>
			<option value="4">Carné de Extranjería</option>
			<option value="7">Pasaporte</option>
		      </select>
		    </div>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-envelope-square"></span> Número del Documento de Indentidad:</label>
		      <input type="text" name="num" class="form-control"  id="mi-importe" placeholder="XXXXXXXX">
		    </div>	
		    
		  </div>
		  
		  <div id="row">		
		    <h4><b>¿Es ésta una declaración recitificatoria / sustitutoria?</b></h4>	
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <!--<label ><span class="fa fa-toggle-off"></span> Llene el Monto:</label><br>-->
		      <input id="declaracion" type="checkbox" onchange="activar()" name="check" />
		      <label for=declaracion class=cb-label></label>
		      <hr class="espacio">
		    </div>
			<div id="orden">
			    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
			      <label ><span class="fa fa-external-link"></span> N° de Orden u operación:</label>
			      <hr style="margin-bottom: -9px">
			      <input type="text" name="operacion" class="form-control"  id="mi-t-fraccionamiento" placeholder="0" ><br>
			    </div>
		    </div>
		    <div id="reemplazo">
			    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
			      <hr class="espacio">
			      <hr class="espacio">
			      <hr class="espacio">
			    </div>
		    </div>
		    				  
		  </div>
		  
		  <div id="row">
		    <h4><b>Monto del Alquiler</b></h4>				         	
		    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
		      <label ></label>
		      <label ><span class="fa fa-money"></span> Importe (S/.):</label>
		      <input type="number" step="0.01" name="monto" class="form-control"  id="mi-t-fraccionamiento" placeholder="0" required>
		    </div>
		   
		    
		  </div>
		  <div class="row">
		    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
		      <input class='navbar-right btn btn-primary' id="refresh2" style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Vista Previa" />			                     
		    </div>
		  </div>
		</form> 
	      </div>
	    </div>
	  </div>
	  
	</div>
      </div>
      <script>
      	function activar(){
	    if($('#declaracion').is(":checked")){
	        $("#orden").show();
	        $('#reemplazo').hide();
	    }   
	    else{
	        $("#orden").hide();
	        $('#reemplazo').show();
	    }

	}
		activar();
      </script>