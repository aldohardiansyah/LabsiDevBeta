@extends('templates/template')
@section('title', 'Peraturan')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Peraturan & Perlengkapan Praktikum </strong></center></h5>
            <hr>
            <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
            </div>
            <div class="col-lg-4"></div>
        </div>

<hr>
<h6 class="mt-1"><center><strong><u>Perlengkapan Praktikum</u></strong></center></h6>

        <div class="mt-4 mb-2">
          <div class="row mt-4">
              <div class="col-lg-5">
                  <center>PRIA</center>
                  <hr>
                  <p>1. Memakai Kemeja Bahan, warna bebas. (Bukan Kemeja Bahan Flanel dan Denim/Jeans).</p>
                  <p>2. Kemeja Batik hanya boleh dipakai hari Jumat.</p>
                  <p>3. Memakai Celana Bahan, warna gelap (Hitam, Cokelat Gelap, Abu-abu Gelap).</p>
                  <p>4. Dilarang menggunakan Celana berbahan Chino dan Denim/Jeans.</p>
                  <p>5. Praktikan <b>Tidak Dapat Mengikuti Kegiatan Praktikum </b> selama masih melanggar peraturan pakaian dan celana. </p>
                  <p>6. Dilarang memakai aksesoris berupa Kalung, Gelang, Cincin, atau Anting, selama kegiatan praktikum berlangsung.</p>
                  <p>7. Aksesoris yang boleh digunakan selama kegiatan praktikum hanya Jam Tangan. </p>
                  <p>8. Praktikan yang berambut panjang/gondrong wajib mengikat(menguncir) rambutnya selama kegiatan praktikum berlangsung. </p>
                  <p>9. Praktikan dilarang membawa makanan & minuman selama kegiatan praktikum berlangsung.</p>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-5">
                 <center>WANITA</center>
                 <hr>
                 <p>1. Memakai Kemeja Bahan, warna bebas. (Bukan Kemeja Bahan Flanel dan Denim/Jeans).</p>
                 <p>2. Dilarang Memakai Kemeja Bahan Tipis (Tembus Pandang)</p>
                 <p>2. Kemeja Batik hanya boleh dipakai hari Jumat.</p>
                 <p>3. Memakai Celana Bahan, warna gelap (Hitam, Cokelat Gelap, Abu-abu Gelap).</p>
                 <p>4. Dilarang menggunakan Celana berbahan Chino dan Denim/Jeans.</p>
                 <p>5. Praktikan <b>Tidak Dapat Mengikuti Kegiatan Praktikum </b> selama masih melanggar peraturan pakaian dan celana. </p>
                 <p>6. Dilarang memakai aksesoris berupa Kalung, Gelang, Cincin, atau Anting, selama kegiatan praktikum berlangsung.</p>
                 <p>7. Aksesoris yang boleh digunakan selama kegiatan praktikum hanya Jam Tangan. </p>
                 <p>8. Praktikan yang berambut panjang/gondrong wajib mengikat(menguncir) rambutnya selama kegiatan praktikum berlangsung. </p>
                 <p>9. Praktikan dilarang membawa makanan & minuman selama kegiatan praktikum berlangsung.</p>
              </div>
          </div>
      </div>


    </div>
    <!-- /.container -->

@endsection
