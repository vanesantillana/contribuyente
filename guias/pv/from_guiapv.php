<!-- Modal Pagos Varios -->
<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog modal-lg">

	  <div class="modal-content">
	    <div class="modal-header" style="background-color:#0b5394">
	      <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Pagos Varios</strong></h4>
	    </div>
	    <div class="modal-body">
	      <div>
		<form role="form" method="post" action="guias/pv/guiapv.php" target="_blank">
		  <div id="row">
		    <h4><b>Datos Necesarios Para Realizar El Pago En Todos Los Casos</b></h4>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-user"></span> N° de RUC:</label>
		      <input type="text" class="form-control" id="mi-ruc" name="ruc" placeholder="XXXXXXXXXXX">
		    </div>

		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-calendar"></span> Periodo:</label>
		      <input type="text" class="form-control"  id="mi-periodo" name="anio" placeholder="2017">
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
		      <label ><span class="fa fa-list-alt"></span> Código Tributo ó Multa:</label>
		      <input type="text" class="form-control" id="mi-codigo" placeholder="XXXX" name="codtribu">
		    </div>

		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> Importe a Pagar:</label>
		      <input type="text" class="form-control"  id="mi-importe" placeholder="0" name="importe">
		    </div>

		  </div>
		  <div class="row">
		    <h4><b>&nbsp;&nbsp;&nbsp;Marque lo que Desea Pagar</b></h4>
		    <div class="col-md-3">
		      <label ><span class="fa fa-toggle-off"></span>Tributo</label><br>
		      <input id="tributo" type="checkbox" name="tributo" checked="checked" />
		      <label for=tributo class=cb-label></label>
		      <hr style="visibility: hidden;">
		      
		    </div>
		    <div class="col-md-3">
		      <label ><span class="fa fa-toggle-off"></span> Multas</label><br>
		      <input id="multas" type="checkbox" name="multas"/>
		      <label for=multas class=cb-label></label>
		      <hr style="visibility: hidden;">
		    </div>
		    <div class="col-md-3">
		      <label ><span class="fa fa-toggle-off"></span> Costas y Gastos</label><br>
		      <input id="gastos" type="checkbox" name="gastos"/>
		      <label for=gastos class=cb-label></label>
		      <hr style="visibility: hidden;">
		    </div>
		    
		    <div class="col-md-3">
		      <label ><span class="fa fa-toggle-off"></span>Fraccionamientos</label><br>
		      <input id="frac" type="checkbox" name="frac"/>
		      <label for=frac class=cb-label></label>
		      <hr style="visibility: hidden;">
		    </div>
		  </div>				
		  <div id="row">
		    
		    <h4><b>Datos Adicionales Por Tipo de Pago</b></h4>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-external-link"></span> Tributo Asociado:</label>
		      <input type="text" class="form-control" id="m-t-asociado" placeholder="XXXX" name="trimul">
		    </div>

		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-vcard-o" style="font-size:15px"></span> N° del Fraccionamiento:</label>
		      <input type="text" class="form-control"  id="mi-t-fraccionamiento" placeholder="XXXXXXXXXXXXXX" name="fraccionamiento">
		    </div>

			<div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <center>
				<div class="captcha">
				  <img id="captcha_img" src="http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image"></img>
				</div>
		      </center>
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-picture-o" style="font-size:15px"></span> Ingresa la imagen:</label>
		      <input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="XXXX" >
		    </div>

		  </div>
		  <div class="row">
		    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
		      <input class='navbar-right btn btn-primary' id="refresh" style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Vista Previa" />			                     
		    </div>
		  </div>
		</form> 
	      </div>
	    </div>
	  </div>
	  
	</div>
      </div>