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
        <title>Edit Artikel</title>
        <h2>Edit Artikel</h2>
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/edit.css">
    </div>
</head>

</div>

<form action="<?php echo base_url('artikel/edit/simpan/' . $artikel->id); ?>" method="POST" id="edit-artikel">

    <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" name="judul" id="judul" value="<?php echo $artikel->judul; ?>">
    </div>
    <div class="form-group">
        <label for="isi">isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10"><?php echo $artikel->isi; ?></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo getiduser() ?>">
    </div>


    <button type="submit" form="edit-artikel" class="btn btn-default">Simpan</button>
</form>


</html>