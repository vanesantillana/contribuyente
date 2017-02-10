<!-- Modal Nuevo Regimen -->
 <div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog modal-lg">

	  <div class="modal-content">
	    <div class="modal-header" style="background-color:#0b5394">
	      <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Pago Fácil Nuevo Régimen Único Simplificado</strong></h4>
	    </div>
	    <div class="modal-body">
	      <div>
		<form name="formulario" method="post" action="guias/nuevoreg/nuevoreg.php" target="_blank">
		  <div id="row">
		    <h4><b>Datos Necesarios</b></h4>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-user"></span> N° de RUC:</label>
		      <input type="text" name="ruc" class="form-control" id="mi-ruc" placeholder="XXXXXXXXXXX">
		    </div>

		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-calendar"></span> Periodo:</label>
		      <input type="text" name="anio" class="form-control"  id="mi-periodo" placeholder="2017">
		    </div>

		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
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
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> Total Ingresos Brutos del Mes</label>
		      <input type="text" name="ingresos" class="form-control"  id="mi-importe" placeholder="0">
		    </div>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> Total Compras del Mes:</label>
		      <input type="text" name="compras" class="form-control"  id="mi-importe" placeholder="0">
		    </div>	
		    
		  </div>	

		  <div id="row">
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> Percepciones:</label>
		      <input type="text" name="percepciones" class="form-control"  id="mi-importe" placeholder="0">
		    </div>				            
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <center>
				<div class="captcha">
				  <img src="http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image"></img>
				</div>
		      </center>
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-picture-o" style="font-size:15px"></span> Ingresa la imagen:</label>
		      <input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="XXXX" >
		    </div>				  
		  </div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
		      <h4><b>¿Es la primera vez que declara para este período?</b></h4>
		    </div>
		  </div>
		  <div class="row">
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">	
		      <label >&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-toggle-off"></span>Si marca NO, ingrese su compensación:</label><br>
		      <input id="valor" type="checkbox" name="check" checked="checked" />
		      <label for=valor class=cb-label></label>
		      
		    </div>	
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">	
		      <label ><span class="fa fa-money"></span> Compensación y/o Pagos Efectuados:</label>
		      <hr style="margin-bottom: -9px">
		      <input type="text" name="compensacion" class="form-control" id="m-t-asociado" placeholder="0">
		    </div>
		    
		  </div>
		  <div class="row">
		    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
		      <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Vista Previa" />			                     
		    </div>
		  </div>
		</form> 
	      </div>
	    </div>
	  </div>
	  
	</div>
      </div>