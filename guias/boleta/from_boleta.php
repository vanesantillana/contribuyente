<!-- Modal Factura -->
			<div class="modal fade" id="myModal9" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Boleta de Pago del Trabajador</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form role="form" method="post" action="guias/boleta/boleta.php" enctype="multipart/form-data" target="_blank">
				           <div id="row">
				           <h4><b>Datos Necesarios de la Boleta</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-institution" style="font-size:15px"></span> Nombre de Empresa:</label>
				              <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre">
				            </div>	
				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-vcard-o" style="font-size: 15px"></span> N° de RUC:</label>
				              <input type="text" class="form-control" name="ruc" placeholder="XXXXXXXXXXX">
				            </div>
				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              	<label ><span class="fa fa-unsorted" style="font-size: 15px"></span> Tipo de Boleta:</label>
				              	<select class="form-control" name="tipo">
									<option value="AFP">AFP</option>
									<option value="ONP">ONP</option>
		      					</select>
				            </div>

				          </div>

				          <div id="row">
							<h4><b>Datos Necesarios del Trabajador</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-male" style="font-size:15px"></span> Nombre:</label>
				              <input type="text" class="form-control"  name="nombre" placeholder="Trabajador">			            
				            </div>
							<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-money" style="font-size:15px"></span> Sist. Pensión:</label>
				              <input type="text" class="form-control" name="pension" placeholder="INTEGRA">
				            </div>
				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-globe" style="font-size:15px"></span> Nacionalidad</label>
				              <input type="text" class="form-control"  name="nacionalidad" value="Peruana" placeholder="Peruana">
				            </div>
				            
				          </div>
							
						<div id="row">
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-suitcase" style="font-size:15px"></span> Cargo u Ocupación</label>
				              <input type="text" class="form-control"  name="rubro" placeholder="Gerente">
				            </div>
				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				        		<label ><span class="fa fa-calendar-o"></span> Fecha de Ingreso:</label>
		      					<input class="form-control" name="fecha" id="fecha" type="date">
				        	</div>	
				        	<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              	<label ><span class="fa fa-sort" style="font-size: 15px"></span> Estado Civil:</label>
				              	<select class="form-control" name="estado">
									<option value="soltero">Soltero</option>
									<option value="casado">Casado</option>
		      					</select>
				            </div>	      

				        </div>
				        <div id="row">
				        	
				        	<div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-address-card" style="font-size:15px"></span> Documento de Identidad:</label>
				              <input type="text" class="form-control"  name="dni" placeholder="XXXXXXXX">
				            </div>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-picture-o" style="font-size:15px"></span> Logo:</label>
				              <input id="logo" name="logo" type="file" />
				            </div>
				        </div>
				          <div class="row">
			                    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
			                        <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Vista Previa" name="submit" />			                     
			                    </div>
			            	</div>
				        </form> 
					  </div>
			        </div>
			      </div>
			      
			    </div>
			</div>
