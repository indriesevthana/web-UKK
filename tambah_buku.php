<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Buku Why? Series</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      body {
        background-color: #EEFAF4;
      }
      h1 {
        text-transform: uppercase;
        color: #0B5345;
      }
    button {
          background-color: #48C9B0 ;
          color: #fff; 
          padding: 10px;
          text-decoration: none;
          font-size: 18px;
          margin-top: 25px;
          width: 100%;
          border-radius: 10px;

    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
      color: #fff; 
    }
    input {
      padding: 6px;
      box-sizing: border-box;
      background: #F6F6F6;
      border: 2px solid #ccc;
      border-radius: 5px;
      outline-color: #0B5345;
      width: 98%;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #148F77;
      border-radius: 20px;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Buku</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Judul Buku</label>
          <input type="text" name="judul" autofocus="" required="" />
        </div>
        <div>
          <label>Pengarang</label>
         <input type="text" name="pengarang" />
        </div>
        <div>
          <label>Penerbit</label>
         <input type="text" name="penerbit" required="" />
        </div>
        <div>
          <label>Persediaan</label>
         <input type="text" name="persediaan" required="" />
        </div>
        <div>
          <label>Tahun</label>
         <input type="text" name="tahun" required="" />
        </div>
        <div>
          <label>Gambar</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan Buku</button>
        </div>
        </section>
      </form>
  </body>
</html>