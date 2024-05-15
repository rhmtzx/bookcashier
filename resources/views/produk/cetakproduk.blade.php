<head>
	<title>Cetak Data Seluruh Produk</title>
</head>
<body>
	<div class="form-group">
		<p align="center">
			<b>Laporan Data Seluruh Produk</b>
		</p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Produk</th>
                    <th scope="col">Foto Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga Produk</th>
                  	<th scope="col">Stok Produk</th>
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
                  	<td>
                     	<img src="{{ asset('allfoto/' . $row->foto) }}" alt="" style="width: 40px">
                    </td>
                    <td>{{ $row->namaproduk}}</td>
                    <td>{{ $row->harga}}</td>
                    <td>{{ $row->stok}}</td>
                </tr>
            @endforeach
            </tbody>
       	</table>
	</div>
	<script type="text/javascript">
		window.print();

	</script>
</body>