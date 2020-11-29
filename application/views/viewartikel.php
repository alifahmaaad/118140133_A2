<!DOCTYPE html>
<html>

<head>
    <div class="title">
        <a href="javascript:history.go(-1)">kembali</a>
        <h2><?php echo $artikel->judul; ?></h2>
        <link rel="stylesheet" type="text/css" href="asset/css/daftar.css">
    </div>
</head>
<main style="margin-top: 2px;">
    <div class="card">

        <p><?php echo $artikel->isi; ?></p>
    </div>
</main>