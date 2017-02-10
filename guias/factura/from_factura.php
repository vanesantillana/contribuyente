<!-- Modal Factura -->
			<div class="modal fade" id="myModal4" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Factura</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form role="form" action="guias/factura/doc_factura.php" method="post" enctype="multipart/form-data" target="_blank">
				           <div id="row">
				           <h4><b>Datos Necesarios Para Generar una Factura de muestra</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span> Nombre de empresa:</label>
				              <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre">
				            </div>	
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span> N° de RUC:</label>
				              <input type="text" class="form-control" name="ruc" placeholder="XXXXXXXXXXX">
				            </div>

				          </div>

				          <div id="row">

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span>Nombre del titular de la empresa:</label>
				              <input type="text" class="form-control"  name="nombre_titular" placeholder="Dueño de la empresa">
				            </div>
							            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span> Direccion:</label>
				              <input type="text" class="form-control" name="direccion" placeholder="Urbanización-Distrito-Ciudad">
				            </div>
	            
				          </div>
							
							 <div id="row">
				          	

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span> Rubro y/o ocupacion de la empresa</label>
				              <input type="text" class="form-control"  name="rubro" placeholder="Construccion-Mecanica-etc.">
				            </div>

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ></span> Logo:</label>
				              <input id="logo" name="logo" type="file" />
				            </div>
				  
				          </div>
				          <div class="row">
			                    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
			                        <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Generar PDF" name="submit" />			                     
			                    </div>
			            	</div>
				        </form> 
					  </div>
			        </div>
			      </div>
			      
			    </div>
			</div>
