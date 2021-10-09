@extends('layout.template')

@section('title', '- Sitemaps')

@section('carousel')
<h1 style="text-align: center;">Sitemaps</h1>
@endsection

@section('content')
<div class="row justify-content-start">
    <div class="col-8">
      <dl>
		<dt>Profil</dt>
		<dd>
			<ul>
				<li><a href="#">Visi dan misi</a></li>
				<li><a href="#">Buku Kurikulum</a></li>
				<li><a href="#">Pemetaan Kurikulum</a></li>
				<li><a href="#">Tujuan dan sasaran</a></li>
				<li><a href="#">Struktur</a></li>
				<li><a href="#">Fasilitas</a></li>
				<li><a href="#">Capaian Pembelajaran Lulusan</a></li>
				<li><a href="#">Matrix Profil</a></li>
				<li><a href="#">Profil Lulusan</a></li>
			</ul>
		</dd>
		<dt>Laboratorium</dt>
		<dd>
			<ul>
				<li><a href="#">Lab Dasar</a></li>
				<li><a href="#">Lab Menengah</a></li>
				<li><a href="#">Lab Lanjut</a></li>
			</ul>
		</dd>
	</dl>
    </div>
    <div class="col-4">
      <div class="widget feature-posts">
      	<h2 class="widgettitle">Recent Posts</h2>
	      	<ul class="feature-posts-list">
	      		<li>
	      			<a href="https://fti.gunadarma.ac.id/informatika/?p=548" class="feature-posts-title">LOKA KARYA PENYUSUNAN KURIKULUM BERBASIS OUTCOME BASED EDUCATION (OBE) DAN KAMPUS MERDEKA</a>
	      			<br>
	      			<small>March 1, 2021</small>
	      			<br>
	      			<span class="post-excerpt">Fakultas Teknologi Industri, Fakultas Teknik Sipil</span>
	      		</li>
	      		<li>
	      			<a href="https://fti.gunadarma.ac.id/informatika/?p=491" class="feature-posts-title">SOSIALISASI PEMBELAJARAN BERBASIS OUTCOME BASED EDUCATION (OBE) DAN KAMPUS MERDEKA</a>
	      			<br>
	      			<small>January 22, 2021</small>
	      			<br>
	      			<span class="post-excerpt">Fakultas Teknologi Industri dan Fakultas Teknik Sipil</span>
	      		</li>
	      		<li>
	      			<a href="https://fti.gunadarma.ac.id/informatika/?p=137" class="feature-posts-title">Visitasi Program Studi Teknik Informatika 14 – 16 Juli 2019</a> 
	      			<br>
	      			<small>July 14, 2019</small> 
	      			<br>
	      			<span class="post-excerpt">Pelaksanaan Visitasi Program Studi Teknik Informatika</span>
	      		</li>
	      		<li>
	      			<a href="https://fti.gunadarma.ac.id/informatika/?p=136" class="feature-posts-title">Seminar Teknologi Big Data dan Virtual Anatomy pada Era Evolusi Industri 4.0 an Society 5.0</a> <br><small>June 10, 2019</small> <br><span class="post-excerpt">Pada tanggal 23 Maret 2019 bertempat di Auditorium</span>
	      		</li>
	      		<li>
	      			<a href="https://fti.gunadarma.ac.id/informatika/?p=135" class="feature-posts-title">Lomba Desain Poster Gunadarma All About Accounting Competition (GAAAC) 2017</a> 
	      			<br>
	      			<small>December 27, 2016</small> 
	      			<br>
	      			<span class="post-excerpt">Fakultas Ekonomi Universitas Gunadarma</span>
	      		</li>
	    	</ul>
      </div>
    </div>
  </div>
@endsection
