<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Responsive</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     
    <div class="badan-utama">
        
	<header>
            <h2>PERPUSTAKAAN BUKU</h2>
            <p>Pinjam dan baca buku gratis disini</p>
        </header>
 
        <nav class="navigasi">
            <ul>
			<li><a class="active" href="/">Home</a></li>
				<li><a href="/data0236">Data Buku</a></li>
				<li><a href="/bukuready0236">Data Buku Ready</a></li>	
                <li><a href="/penerbit0236">Data Penerbit</a></li>		
				<li><a href="/bukuterbaru0236">Buku Terbaru</a></li>
            </ul>
        </nav>
 
 
        <div class="menu-tengah">
            <div class="kotak">
	<h3>Data Buku</h3>
	<br>
	<table cellspacing='0'>
		<tr>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Jumlah Buku</th>
			<th>Pengarang Buku</th>
			<th>Penerbit Buku</th>
			<th>Tahun Terbit</th>

		</tr>
		@foreach($ms_buku as $b)
		<tr>
			<td>{{ $b->judul_buku }}</td>
			<td>{{ $b->nama_kategori }}</td>
			<td>{{ $b->jumlah_buku }}</td>
			<td>{{ $b->pengarang_buku }}</td>
			<td>{{ $b->nama_penerbit }}</td>
			<td>{{ $b->tahun_terbit_buku }}</td>

		</tr>
		@endforeach
	</table>
 
	</div>
        </div>
 
        <footer>
            @Copyright 2021 || Valentino Febrian Saputra
        </footer>
 
    </div>
 
</body>
</html>