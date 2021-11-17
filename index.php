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
        background-color: #E8F8F5 ;
      }
      h1 {
        text-transform: uppercase;
        color:#0B5345;
      }
    table {
      border: solid 2px #48C9B0;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #0B5345;
        border: solid 1px #48C9B0;
        padding: 15px;
        text-align: left;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #48C9B0 ;
        color: #0B5345;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #48C9B0 ;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          border-radius: 10px;
    }

    
    header {
      justify-content: space-between;
      background-color: #0B5345;
      color: #ffff;
      height: 1px;
      align-items:left;

    }
    p {
      color: green;
      text-align: right;
    }
  
    
    </style>
  </head>
  <body>
    <div>
      <img class="logo" src="css\poto\mabook1.png" alt ="logo" width="180px">
      <header>
      </header>
    </div>
    <header>
        

    </header>
    

    <center><h1>Daftar Buku</h1><center>
    <center><a href="tambah_buku.php">+ &nbsp; Tambah Produk</a><center>
    <br/>
    <br/>
    <br/>

    <table>
      <thead>
        <tr>
          <th style=color:white;background-color:#0B5345;>No</th>
          <th style=color:white;background-color:#0B5345;>Judul Buku</th>
          <th style=color:white;background-color:#0B5345;>Pengarang</th>
          <th style=color:white;background-color:#0B5345;>Penerbit</th>
          <th style=color:white;background-color:#0B5345;>Persediaan</th>
          <th style=color:white;background-color:#0B5345;>Tahun</th>
          <th style=color:white;background-color:#0B5345;>Gambar</th>
          <th style=color:white;background-color:#0B5345;>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php

      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM buku ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data buku
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo substr($row['pengarang'], 0, 20); ?>...</td>
          <td><?php echo substr($row['penerbit'], 0, 20); ?></td>
          <td><?php echo substr($row['persediaan'], 0, 20); ?></td>
          <td><?php echo $row['tahun']; ?></td>
          <td style="text-align: center;"><img src="../gambar<?php echo $row['gambar']; ?>" style="width: 100px;"></td>
          <td>
              <a href="edit_buku.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus buku ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>