				 @extends('layouts.main')

				 @section('content')

				 <section class="content-header">
				 	<div class="box-header">
				 		<h3 class="box-title">Data Mesin Electronic Data Capture</h3>
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
							<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
							 	Add Data
								</button>
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
					<form action="/importtdata" method="POST" enctype="multipart/form-data">
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
		
				 			</div>

				 			<br>
				 			<a href="/exportdata" class="btn btn-outline-success active" role="button" data-bs-toggle="button" aria-pressed="true">Excel</a>

				 			<br>
				 				<div class="center">
				 			<div class="table table-hover">
				 				<table class="table table-hover">
				 					<tr>
				 						<th>SN</th>
				 						<th>MEREK</th>
				 						<th>JENIS PERANGKAT</th>
				 						<th>TYPE</th>
				 						<th>DIO</th>
				 						<th>KETERANGAN</th>
				 						<th>ACT</th>
				 					</tr>
				 					@foreach($data_edc as $item)
				 					<tr>
				 					<td>{{$item->sn}}</td>
				 					<td>{{$item->merek}}</td>
				 					<td>{{$item->jenis}}</td>
				 					<td>{{$item->type}}</td>
				 					<td>{{$item->Dio}}</td>
				 					<td>{{$item->keterangan}}</td>
				 					<td><a href="/item/{{$item->id}}/edit" class="fa fa-edit"></a>
				 						|
				 						<a href="/item/{{$item->id}}/delete" class="fa fa-trash" style="color: red"></a>
				 					</td>
				 					</tr>
				 				@endforeach
				 				</table>
				 				<div class="card-footer">
				 					{{ $data_edc->Links() }}
				 				</div>
				 				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/create" method="POST">
	        	{{csrf_field()}}
  <div class="form-group">
    <label>SN : </label>
    <input name="sn" type="text" class="form-control"  placeholder="SN">
  </div>
    <div class="form-group">
    <label>Merek : </label>
    <input name="merek" type="text" class="form-control"  placeholder="Merek">
  </div>
  <div class="form-group">
  	<label > Jenis Perangkat </label>
  	<select name="jenis" class="form-control">
  		<option value="Mpos">Mpos</option>
  		<option value="Regular">Regular</option>
  	</select></div>
   <div class="form-group">
    <label>Type : </label>
    <input name="type" type="text" class="form-control"  placeholder="Type">
  </div>
   <div class="form-group">
    <label >Dio : </label>
    <input name="dio" type="text" class="form-control" placeholder="Dio">
  </div>
   <div class="form-group">
    <label >Keterangan : </label>
    <textarea name="keterangan" class="form-control" rows="3"></textarea>
  </div>
  
 <div class="modal-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>  
	    </div>
	  </div>
	</div>
				 		</div>
				 	</div>
				 </div>
				</div>
@include('sweetalert::alert')
			</div>
		@endsection