
 <!-- <?php print_r($cetakdt) ?> -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
	table.static {
		position: relative;
		border: 1px solid #543535;
	}
</style>
<title>Laporan Transaksi</title>
<body>
	<div class="form-group">
		<p align="center"><b>Laporan Transaksi</b></p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
			<tr>
				<th>No</th>
				<th>SN</th>
				<th>Jenis Perangkat</th>
				<th>Jumlah</th>
				<th>Tujuan</th>
				<th>Tanggal Keluar</th>
			</tr>
			@foreach ($cetakdt as $item)
			<tr style="text-align: center;">
				<td>{{$loop->iteration}}</td>
				<td>{{$item->sn}}</td>
				<td>{{$item->jenis}}</td>	
				<td>{{$item->jumlah}}</td>
				<td>{{$item->tujuan}}</td>
				<td>{{$item->tgl}}</td>
			</tr>
			@endforeach	
		</table>
	</div>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>