				 @extends('layouts.main')

				 @section('content')

				 <section class="content-header">
				 	<div class="box-header">
				 		<h3 class="box-title">Transaksi Electronic Data Capture</h3>
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
				 			</div>
				 			<br>
				 				<div class="center">

				 			<div class="table table-hover">
				 				<table class="table table-hover">
				 					<tr>
				 						<th>SN</th>
				 						<th>JENIS PERANGKAT</th>
				 						<th>JUMLAH</th>
				 						<th>TUJUAN</th>
				 						<th>TANGGAL KELUAR</th>
				 						<th>ACT</th>
				 					</tr>
				 				@foreach($data_mesin as $items)
				 					<tr>
				 					<td>{{$items->sn}}</td>
				 					<td>{{$items->jenis}}</td>
				 					<td>{{$items->jumlah}}</td>
				 					<td>{{$items->tujuan}}</td>
				 					<td>{{$items->tgl}}</td>
				 					<td><a href="/items/{{$items->id}}/edit" class="fa fa-edit"></a>
				 						|
				 						<a href="/items/{{$items->id}}/delete" class="fa fa-trash" style="color: red"></a>
				 					</td>	
				 					</tr>
				 				@endforeach
				 				</table>
				 				<div class="card-footer">
				 					{{ $data_mesin->Links() }}
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
	        <form action="/store" method="POST">
	        	{{csrf_field()}}
  <div class="form-group">
    <label>SN : </label>
    <input name="sn" type="text" class="form-control"  placeholder="SN">
  </div>
  <div class="form-group">
  	<label > Jenis Perangkat </label>
  	<select name="jenis" class="form-control">
  		<option value="Mpos">Mpos</option>
  		<option value="Regular">Regular</option>
  	</select></div>
   <div class="form-group">
    <label>Jumlah : </label>
    <input name="jumlah" type="number" class="form-control"  placeholder="Jumlah Mesin">
  </div>
   <div class="form-group">
    <label >Tujuan : </label>
    <input name="tujuan" type="text" class="form-control" placeholder="Tujuan">
  </div>
   <div class="form-group">
    <label > Tanggal Keluar : </label>
   	<input name="tgl" type="date" class="form-control">
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

			</div>
			
		@endsection