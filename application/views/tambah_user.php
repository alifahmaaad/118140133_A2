<!DOCTYPE html>
<html>
<style>
     .form-group {
          margin-bottom: 20px;
     }

     .form-group label {
          display: block;
          margin-bottom: 5px;
     }

     h2 {
          margin-left: 30%;
     }

     label {
          margin-left: 30%;
     }

     input[type="text"],
     input[type="pass"],
     input[type="number"],
     button,
     select {
          box-sizing: border-box;
          width: 40%;
          border: 1px solid #cccccc;
          padding: 10px;
          border-radius: 3px;
          display: block;
          margin-left: auto;
          margin-right: auto;
     }
</style>

<head>

     <div class="title">
          <a href="javascript:history.go(-1)">kembali</a>
          <title>Tambah Pengguna</title>
          <h2>Tambah Pengguna</h2>
          <link rel="stylesheet" href="<?= base_url() ?>('assets/css/tambah.php')">

     </div>

</head>
<form action="<?php echo base_url('user/tambah/simpan'); ?>" method="POST" id="tambah-pengguna">
     <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama">
     </div>
     <div class="form-group">
          <label for="password">Password</label>
          <input type="pass" name="password" id="password">
     </div>
     <div class="form-group">
          <label for="nama">Username</label>
          <input type="text" name="usernama" id="usernama">
     </div>
     <div class="form-group">
          <label for="role">Role</label>
          <select name="role" id="role" class="form-control">
               <option value="1">admin</option>
               <option value="2">user</option>
          </select>
     </div>
     <button type="submit" form="tambah-pengguna" class="btn btn-default">Tambah</button>

</form>

</html>