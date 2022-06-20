				 @extends('layouts.main')

				 @section('content')

				 <section class="content-header">
				 	<div class="box-header">
				 		<h3 class="box-title">Electronic Data Capture</h3>
				 	</div>
				 	<div class="content">
				 			<div class="card-header">
				 				<div class="card-tools">
				 					
				 					@if(session('sukses'))
				 					<div class="alert alert-success" role="alert">
									  {{session('sukses')}}
									</div>
									@endif
				 					<!-- Button trigger modal -->
							
	<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Import</button>
</div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Import data</h4>
				</div>
				<div class="modal-body">
					<form action="/mesin" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="file" name="file" required>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" >Import</button>
				</div>
			</div>
		</form>
		</div>
	</div>
		
				 			<br>
				 			
				 				
				 				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  
  </div>
			<div class="col-xs-15">
          <div class="box">
					
					
            <div class="box-header">
              <h3 class="box-title">Stok Mesin EDC</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <tr>
				 						<th>SN</th>
				 						<th>MEREK</th>
				 						<th>JENIS PERANGKAT</th>
				 						<th>TYPE</th>
				 						
				 					</tr>
				 					@foreach($dataedc as $itemss)
				 					<tr>
				 					<td>{{$itemss->sn}}</td>
				 					<td>{{$itemss->merek}}</td>
				 					<td>{{$itemss->jenis}}</td>
				 					<td>{{$itemss->type}}</td>
				 					</tr>
				 				@endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>	 	
@include('sweetalert::alert')
			</div>
		@endsection
