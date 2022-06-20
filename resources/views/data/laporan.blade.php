@extends('layouts.main')
@section('content')

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
			class="btn btn-primary col-md-12"> Cetak Laporan </a>
		</div>
	</div>
		
	</div>
</div>
@endsection