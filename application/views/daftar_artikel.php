<!DOCTYPE html>
<html>

<head>
    <div class="title">
        <title>daftar artikel</title>
        <a href="javascript:history.go(-1)">kembali</a>
        <h2 style="padding-left:15%">Daftar artikel</h2>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/daftar.css">
    </div>
</head>
<center>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;padding-left:0px">No</th>
                <th style="width: 30%">Judul</th>
                <th style="width: 20%">Penulis</th>
                <th style="width: 40%; ">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($semua_artikel->num_rows() > 0) : ?>
                <?php $index = 1; ?>
                <?php foreach ($semua_artikel->result() as $artikel) : ?>
                    <tr>
                        <td style="text-align: center; padding-left:0px"><?php echo $index++; ?></td>
                        <td><?php echo $artikel->judul; ?></td>
                        <td><?php echo $artikel->name; ?></td>
                        <td><?php if ($this->session->userdata['role'] == 1 || $artikel->id == getiduser()) {
                            ?>
                                <a href="<?php echo base_url('artikel/edit/' . $artikel->id_artikel); ?>" class="btn btn-default">Edit</a>
                                <a href="<?php echo base_url('artikel/hapus/' . $artikel->id_artikel); ?>" class="btn btn-danger">Hapus</a>
                            <?php }
                            ?>
                            <a href="<?php echo base_url('artikel/lihat/' . $artikel->id_artikel); ?>" class="btn btn-default">Lihat Artikel</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td style="text-align: center;" colspan="6">Data tidak tersedia</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table><br>
    <button><a style="text-decoration: none;" href="<?php echo base_url('artikel/tambah/'); ?>">Tambah</a></button>
</center>

</html>