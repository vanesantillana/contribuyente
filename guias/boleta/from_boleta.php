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
			          	<form name="formulario" role="form" method="post" action="guias/boleta/boleta.php" enctype="multipart/form-data" target="_blank">
				           <div id="row">
				           <h4><b>Datos Necesarios de la Boleta</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-institution" style="font-size:15px"></span> Nombre de Empresa:</label>
				              <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre" required>
				            </div>	
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-vcard-o" style="font-size: 15px"></span> N° de RUC:</label>
				              <input type="text" class="form-control" name="ruc" placeholder="XXXXXXXXXXX" required>
				            </div>
				          </div>
				          <div id="row">
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-map-marker" style="font-size:15px"></span> Dirección:</label>
				              <input type="text" class="form-control" name="direccion" placeholder="Direccion de la empresa">
				            </div>	
				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				        		<label ><span class="fa fa-calendar-o"></span> Fecha de Boleta:</label>
		      					<input class="form-control" name="fecha_e" id="fecha_e" type="date" required>
				        	</div>
				        	<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-map-marker" style="font-size:15px"></span> Ciudad:</label>
				              <input type="text" class="form-control" name="ciudad" placeholder="Arequipa" value="Arequipa">
				            </div>

				          </div>
							
				          <div id="row">
							<h4><b>Datos Necesarios del Trabajador</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-male" style="font-size:15px"></span> Nombre:</label>
				              <input type="text" class="form-control"  name="nombre" placeholder="Trabajador" required>      
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-globe" style="font-size:15px"></span> Nacionalidad</label>
				              <input type="text" class="form-control"  name="nacionalidad" value="Peruana" placeholder="Peruana">
				            </div>
		                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				        		<label ><span class="fa fa-calendar-o"></span> Fecha de Ingreso:</label>
		      					<input class="form-control" name="fecha" id="fecha" type="date">
				        	</div>
				          </div>
							
						<div id="row">
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-suitcase" style="font-size:15px"></span> Cargo u Ocupación</label>
				              <input type="text" class="form-control"  name="cargo" placeholder="Ej. Gerente" required>
				            </div>
				      
							<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-money" style="font-size:15px"></span> Sist. Pensión:</label>
				              	<select class="form-control" id="pension" name="pension" onchange="AFP()">
									<option value="AFP">AFP</option>
									<option value="ONP">ONP</option>
		      					</select>
				            </div>	
				        	<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              	<label ><span class="fa fa-sort" style="font-size: 15px"></span> Estado:</label>
				              	<select class="form-control" name="estado">
									<option value="soltero">Sin hijos</option>
									<option value="casado">Con hijos</option>
		      					</select>
				            </div>	      

				        </div>
				        <div id="row">
				        	
				        	<div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-address-card" style="font-size:15px"></span> Documento de Identidad:</label>
				              <input type="text" class="form-control"  name="dni" placeholder="XXXXXXXX" required>
				            </div>
				 
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-picture-o" style="font-size:15px"></span> Logo:</label>
				              <input id="logo" name="logo" type="file" />
				            </div>
				        </div>
				        <div id="row">
				        	 <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				            </div>
				        </div>

				        <div id="row">
				        <h4><b>Remuneraciones del trabajador</b></h4>
				     
				        	<div class="col-md-12 col-sm-12 col-xs-12 form-group">
				        		<div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-money" style="font-size:15px"></span> Haber mensual:</label>
				              		<input type="number" class="form-control" step="0.01" name="mensual" placeholder="En soles S/." required>
				              		</div> 
							<div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              		 <label ><span class="fa fa-toggle-off"></span> Remuneraciones opcionales</label><br>
				              		<input name="remuneracion" id="remuneracion" type="checkbox" onchange="Remuneraciones()"/>
				              		<label for=remuneracion class=cb-label></label>
				              		</div>
			            	</div>
			           
				        	
							<div id="remuneracion_opcional">
								<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Horas Extras:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="horas_extras" placeholder="En soles S/.">      
				            	</div>
								<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Bonif. Nocturna:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="boni_nocturna" placeholder="En soles S/.">      
				            	</div>
				            	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Otras Remunerac.:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="otras_remuneraciones" placeholder="En soles S/.">      
				            	</div>
				            	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Gratificaciones:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="gratificaciones" placeholder="En soles S/.">      
				            	</div>
				            	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Reintegros:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="reintegros" placeholder="En soles S/.">      
				            	</div>
				            	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Vacaciones:</label>
				              		<input type="number" class="form-control" step="0.01" value=0 name="vacaciones" placeholder="En soles S/.">    
				            	</div>
							</div>
				        </div>
					    <div id="row">
							<h4><b>Descuentos al trabajador</b></h4>
			       				<div id="AFP" >
			       				<h5 style="text-align: center;"><b>Descuentos por AFP</b></h5>
								<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Nombre de la AFP:</label>
				              		<input type="text" class="form-control"  name="nombre_afp" placeholder="Integra-Prima-Profuturo">      
				            	</div>
								<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> SPP. Aporte Obligatorio:</label>
				              		<input type="number" class="form-control" step="0.01" name="spp1" placeholder="En porcentaje (%)">      
				            	</div>
				            	<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> SPP. Com. Variable:</label>
				              		<input type="number" class="form-control" step="0.01" name="spp2" placeholder="En porcentaje (%)">      
				            	</div>
				            	<div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> SPP Prima de Seg.:</label>
				              		<input type="number" class="form-control" step="0.01" name="spp3" placeholder="En porcentaje (%)">
				            	</div>
							    </div>
							    <h5 style="text-align: center;"><b>Opcionales</b> <input style="opacity: 1;" type="checkbox" id="des_opcionales" onchange="Descuentos()"/></h5>
							    <div id="desc_opcionales">
							    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              		<label ><span class="fa fa-male" style="font-size:15px"></span> Por inasistencia/tardanza (S/.):</label>
				              		<input type="number" class="form-control" step="0.01" name="inasistencia" placeholder="En soles S/.">      
				            	</div>
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
<script>
	$("#remuneracion_opcional").hide();
	$("#desc_opcionales").hide();
	function Remuneraciones(){
	    if($('#remuneracion').is(":checked"))   
	        $("#remuneracion_opcional").show();
	    else
	        $("#remuneracion_opcional").hide();	
	}
	function Descuentos(){
	    if($('#des_opcionales').is(":checked"))   
	        $("#desc_opcionales").show();
	    else
	        $("#desc_opcionales").hide();	
	}
	function AFP(){
		if($("select#pension" ).val()=='AFP')
		   $("#AFP").show();
		else
		   $("#AFP").hide();	
	}
	AFP();
</script>