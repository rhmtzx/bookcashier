<head>
	<title>Cetak Data Seluruh Penjualan</title>
</head>
<body>
	<div class="form-group">
		<p align="center">
			<b>Laporan Data Seluruh Penjualan</b>
		</p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Penjualan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Produk</th>
                  	<th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
            @php
          	$no = 1;
            @endphp
            @foreach ($data as $row)
            	<tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->id}}</td>
                  	<td>{{ $row->pelanggans->namapelanggan}}</td>
                    <td>{{ $row->produks->namaproduk}}</td>
                    <td>{{ $row->jumlahproduk}}</td>
                    <td>{{ $row->totalharga}}</td>
                </tr>
            @endforeach
            </tbody>
       	</table>
	</div>
	<script type="text/javascript">
		window.print();

	</script>
</body>