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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Add Data
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/createdata" method="POST">
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
    <label >Kanca : </label>
    <input name="Kanca" type="text" class="form-control" placeholder="Kanca">
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
</div> 	<!-- Button trigger modal -->							
			<br>
			<div class="col-xs-15">
          <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <tr>
						<th>SN</th>
				 		<th>MEREK</th>
				 		<th>JENIS PERANGKAT</th>
				 		<th>TYPE</th>
				 		<th>KANCA</th>
				 		<th>KETERANGAN</th>
				 		<th>ACT</th>
				 	</tr>
				 	@foreach($data_tamper as $item)
				 		<tr>
				 		<td>{{$item->sn}}</td>
				 		<td>{{$item->merek}}</td>
				 		<td>{{$item->jenis}}</td>
				 		<td>{{$item->type}}</td>
				 		<td>{{$item->Kanca}}</td>
				 		<td>{{$item->keterangan}}</td>
				 		<td><a href="/item/{{$item->id}}/edit" class="fa fa-edit"></a>				|
				 			<a href="/item/{{$item->id}}/delete" class="fa fa-trash" style="color: red"></a>
				 		</td>
				 	</tr>
				 	@endforeach
				 	</table>
				 
				 	</div>		
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>	 	
@include('sweetalert::alert')
			</div>
		@endsection
