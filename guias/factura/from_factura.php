<!-- Modal Factura -->
			<div class="modal fade" id="myModal4" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Generador de Factura</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form role="form" action="guias/factura/doc_factura.php" method="post" enctype="multipart/form-data" target="_blank">
				           <div id="row">
				           <h4><b>Datos Necesarios Para Generar una Factura de muestra</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-institution" style="font-size:15px"></span> Nombre de empresa:</label>
				              <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre" required>
				            </div>	
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-vcard-o" style="font-size: 15px"></span> N° de RUC:</label>
				              <input type="text" class="form-control" name="ruc" placeholder="XXXXXXXXXXX" required>
				            </div>

				          </div>

				          <div id="row">

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-male" style="font-size:15px"></span> Nombre del titular de la empresa:</label>
				              <input type="text" class="form-control"  name="nombre_titular" placeholder="Dueño de la empresa" required>
				            </div>
							            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-map-marker" style="font-size:15px"></span> Direccion:</label>
				              <input type="text" class="form-control" name="direccion" placeholder="Urbanización-Distrito-Ciudad" required>
				            </div>
	            
				          </div>
							
							 <div id="row">
				          	

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-suitcase" style="font-size:15px"></span> Rubro y/o ocupacion de la empresa</label>
				              <input type="text" class="form-control"  name="rubro" placeholder="Construccion-Mecanica-etc." required>
				            </div>

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-picture-o" style="font-size:15px"></span> Logo:</label>
				              <input id="logo" name="logo" type="file" required/>
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
