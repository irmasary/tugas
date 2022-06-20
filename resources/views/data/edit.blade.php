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
				 						 <form action="/item/{{$data->id}}/update" method="POST">
	        	{{csrf_field()}}
   </div>
 <div class="form-group">
    <label >SN : </label>
    <input name="sn" type="text" class="form-control" placeholder="Merek" value="{{$data->sn}}">
  </div>
   <div class="form-group">
    <label >Merek : </label>
    <input name="merek" type="text" class="form-control" placeholder="Merek" value="{{$data->merek}}">
  </div>
  <div class="form-group">
  	<label > Jenis Perangkat </label>
  	<select name="jenis" class="form-control">
  		<option value="Mpos" @if($data->jenis == 'Mpos') selected @endif>Mpos</option>
  		<option value="Regular" @if($data->jenis == 'Regular') selected @endif>Regular</option>
  	</select>
   <div class="form-group">
    <label>Type : </label>
    <input name="type" type="type" class="form-control"  placeholder="Type" value="{{$data->type}}">
  </div>
   <div class="form-group">
    <label >Dio : </label>
    <input name="dio" type="text" class="form-control" placeholder="Dio" value="{{$data->Dio}}">
  </div>
   <div class="form-group">
    <label>Keterangan : </label>
   <textarea name="keterangan" class="form-control">{{$data->keterangan}}</textarea>
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