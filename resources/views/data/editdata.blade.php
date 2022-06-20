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
					 					<div class="row">
					 						 <form action="/items/{{$transaksi->id}}/update" method="POST">
		        	{{csrf_field()}}
	   </div>
	 <div class="form-group">
	    <label >SN : </label>
	    <input name="sn" type="text" class="form-control" placeholder="Merek" value="{{$transaksi->sn}}">
	  </div>
	  <div class="form-group">
	  	<label > Jenis Perangkat </label>
	  	<select name="jenis" class="form-control">
	  		<option value="Mpos" @if($transaksi->jenis == 'Mpos') selected @endif>Mpos</option>
	  		<option value="Regular" @if($transaksi->jenis == 'Regular') selected @endif>Regular</option>
	  	</select>
	   <div class="form-group">
	    <label>Jumlah : </label>
	    <input  name="jumlah" type="number" class="form-control"  placeholder="Jumlah" value="{{$transaksi->jumlah}}">
	  </div>
	   <div class="form-group">
	    <label >Tujuan : </label>
	    <input name="tujuan" type="text" class="form-control" placeholder="Tujuan" value="{{$transaksi->tujuan}}">
	  </div>
	   <div class="form-group">
	    <label >Tanggal Keluar : </label>
	    <input name="tgl" type="date" class="form-control" placeholder="Tanggal Keluar" value="{{$transaksi->tgl}}">
	  </div>
	   
	  
	 <div class="modal-footer">
	  <button type="submit" class="btn btn-warning">Update</button>
	  
	</div>
	</form>  
					 					</div>
									
					 	</div>
					 </div>
					</div>

				</div>
			@endsection