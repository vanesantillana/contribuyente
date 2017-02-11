<!-- Modal Honorario-->
 <div class="modal fade" id="myModal5" role="dialog">
	<div class="modal-dialog modal-lg">

	  <div class="modal-content">
	    <div class="modal-header" style="background-color:#0b5394">
	      <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Recibo por Honorarios</strong></h4>
	    </div>
	    <div class="modal-body">
	      <div>
		<form name="formulario" method="post" action="guias/honorarios/honorario.php" target="_blank">
		  <div id="row">
		    <h4><b>Datos Necesarios del Trabajador</b></h4>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-child" style="font-size:15px"></span> Nombre Completo:</label>
		      <input type="text" name="nombre1" class="form-control" placeholder="Juan Perez Sanchez">
		    </div>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-map-marker" style="font-size:15px"></span> Dirección:</label>
		      <input type="text" name="direccion1" class="form-control" placeholder="Urbanización-Distrito-Ciudad">
		    </div>
		   </div>
		  <div id="row">
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-user"></span> N° de RUC:</label>
		      <input type="text" name="ruc1" class="form-control" placeholder="XXXXXXXXXXX">
		    </div>

		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-mobile-phone" style="font-size:20px"></span> Teléfono / Celular:</label>
		      <input type="text" name="telefono1" class="form-control" placeholder="999-999-999">
		    </div>
		  </div>
		  <div id="row">
		    <h4><b>Datos Necesarios del Cliente</b></h4>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-child" style="font-size:15px"></span> Nombre Completo:</label>
		      <input type="text" name="nombre2" class="form-control" placeholder="Maria Alvarez Ponce">
		    </div>
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-map-marker" style="font-size:15px"></span> Dirección:</label>
		      <input type="text" name="direccion2" class="form-control" placeholder="Urbanización-Distrito-Ciudad">
		    </div>
		   </div>
		  <div id="row">
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-vcard" style="font-size:15px"></span> Identificado con:</label>
		      <select class="form-control" name="identificado">
				<option value="RUC">RUC</option>
				<option value="DNI o Libreta Electoral">DNI o Libreta Electoral</option>
				<option value="Carné de Fuerzas Policiales">Carné de Fuerzas Policiales</option>
				<option value="Carné de Fuerzas Armadas">Carné de Fuerzas Armadas</option>
				<option value="Carné de Extranjería">Carné de Extranjería</option>
				<option value="Pasaporte">Pasaporte</option>
		      </select>
		    </div>

		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-vcard-o" style="font-size:15px"></span> N° de Identificación:</label>
		      <input type="text" name="ruc2" class="form-control" placeholder="XXXXXXXXXXX">
		    </div>
		  </div>


		  <div id="row">
			<h4><b>Datos Generales</b></h4>			
		    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-suitcase" style="font-size:15px" ></span> Concepto:</label>
		      <input type="text" name="concepto" class="form-control"  placeholder="Elaboración de expediente...">
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> La Suma Escrita:</label>
		      <input type="text" name="suma" class="form-control" placeholder="Trescientos Cincuenta">
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-money"></span> Total por honorarios:</label>
		      <input type="text" name="total" class="form-control" placeholder="350">
		    </div>
		  </div>

		  <div id="row">
		  	<div class="col-md-6 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-commenting"  style="font-size:15px" ></span> Observación:</label>
		      <input type="text" name="observacion" class="form-control" placeholder="Elaborado desde 01/01/17 al 01/02/17">
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-legal"  style="font-size:15px" ></span> Inciso:</label>
		      <input type="text" name="inciso" class="form-control" placeholder="Articulo N°33">
		    </div>
		    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
		      <label ><span class="fa fa-calendar-o"></span> Fecha:</label>
		      <input class="form-control" name="fecha" id="fecha" type="date">
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