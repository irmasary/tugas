@extends('layouts.main')
@section('content')
 <br><br>
<div class="col-md-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
             <center> <h3 class="box-title"><b>Laporan Transaksi</b></h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="content">
	<div class="card-body">
		<div class="input group mb-3">
			<label for="label">Tanggal Awal</label>
			<input type="date" name="tglawal" id="tglawal" class="form-control">
		</div>	
	</div>
	<div class="card-body">
		<div class="input group mb-3">
			<label for="label">Tanggal Akhir</label>
			<input type="date" name="tglakhir" id="tglakhir" class="form-control">
		</div>
			
		<div class="input-group mb-3">
			<br>

			<a 
			href="" 
			onclick="this.href='/cetaklaporantgl/'+document.getElementById('tglawal').value + 
			'/' + document.getElementById('tglakhir').value 
			"target="_blank" 
			class="btn btn-primary col-md-12"> Cetak</a>
		</div>
	</div>
		
	</div>
</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</center>

@endsection