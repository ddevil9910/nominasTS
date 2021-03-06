<?php
$page_title = "Generar Nómina";
require_once  'partials/headers.php';
?>

<!--contenido de la pagina-->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Nómina</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12">                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Deducciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

					<div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"></div>
                    	<div class="row">
                    		<div class="col-sm-12">
                    			<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
                      <thead>
                        <tr role="row" class="">
                        	<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
							 " style="width: 11px;"></th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 46px;">
							 	<div class="icheckbox_flat-green" style="position: relative;">
							 		<input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;">
							 		<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
							 	</div>
							 </th>

							 <th class="sorting_desc" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending" style="width: 167px;">Clave </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 276px;">Clave SAT </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 126px;">Concepto </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66px;">Tipo </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Monto </th>
						</tr>
                      </thead>

                      <tbody>                       
                      <tr role="row" class="odd">
                          <td>
							 </td>
							 <th class=""><input type="checkbox" id="check-all" class="flat"></th>
						  
                          <td class="sorting_1"> </td>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                      </tr>
                  </tbody>
                  </table>
              </div>
          </div>

                    </div>
                  </div>
              </div>


              <div class="col-md-12 col-sm-12">                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Percepciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />     

                    <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"></div>
                    	<div class="row">
                    		<div class="col-sm-12">
                    			<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
                      <thead>
                        <tr role="row" class="">
                        	<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
							 " style="width: 11px;"></th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 46px;">
							 	<div class="icheckbox_flat-green" style="position: relative;">
							 		<input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;">
							 		<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
							 	</div>
							 </th>

							 <th class="sorting_desc" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending" style="width: 167px;">Clave </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 276px;">Clave SAT </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 126px;">Concepto </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66px;">Tipo </th>
							 <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Monto </th>
						</tr>
                      </thead>

                      <tbody>                       
                      <tr role="row" class="odd">
                          <td>
							 </td>
							 <th class=""><input type="checkbox" id="check-all" class="flat"></th>
						  
                          <td class="sorting_1"> </td>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                      </tr>
                  </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!--/contenido de la pagina-->

<?php
include_once 'partials/footers.php';
?>
</body>
</html>