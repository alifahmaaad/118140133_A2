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
    select,
    textarea {
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
        <title>tambah Artikel</title>
        <h2>Tambah Artikel</h2>
        <link rel="stylesheet" href="<?= base_url() ?>('assets/css/tambah.php')">

    </div>

</head>
<form action="<?php echo base_url('artikel/tambah/simpan'); ?>" method="POST" id="tambah-artikel">
    <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo getiduser() ?>">
    </div>

    <button type="submit" form="tambah-artikel" class="btn btn-default">Tambah</button>

</form>

</html>