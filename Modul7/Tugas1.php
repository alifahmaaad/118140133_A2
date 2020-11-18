<!DOCTYPE html>
<html>

<head>
    <title>Tugas Minggu 3</title>
    <style>
        .tab-content {
            display: none;
        }

        .tab-content:target {
            display: block;

        }
    </style>
</head>
<?php
include 'koneksi.php';
?>

<body>
    <nav>
        <ul>
            <li><a href="#form">Form Mahasiswa</a></li>
            <li><a href="#cari">Cari Data Mahasiswa</a></li>
            <li><a href="#del">Delete Data</a></li>
        </ul>
    </nav>
    <!-- TAB FORM MAHASISWA -->
    <form method="POST" enctype=multipart/form-data class="tab-content" id="form">
        <h2>FORM</h2>
        <label> Nama &nbsp;&nbsp;: </label>
        <input type="text" name="nm"><br /><br />
        <label> NRP &nbsp;&nbsp;&nbsp;&nbsp;: </label>
        <input type="text" name="nrp"><br /><br />
        <label> Alamat : </label>
        <textarea name="alamat"></textarea><br /><br />
        <label> jurusan : </label>
        <select name="jurusan" id="jurusan">
            <?php
            $sql = mysqli_query($sambung, "SELECT * FROM jurusan");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <option value="<?= $data['id_jur'] ?>"><?= $data['Nama'] ?></option>
            <?php
            }
            ?>
        </select><br /><br />
        <!--  Foto : <input type="file" name="foto"><br /> -->
        <button type="submit" name="kirim">Tambah</button>
    </form>

    <!-- TAB CARI DATA MAHASISWA -->
    <form method="POST" class="tab-content" id="cari">
        <h2>CARI MAHASISWA</h2>
        Masukkan Nama Mahasiswa yang anda cari :
        <input type="text" name="data">
        <button type="submit" name="src">Cari</button><br /><br />
        <button type="submit" name="reset">Hapus Hasil Pencarian</button><br /><br />
        <?php
        //note php diletakkan disini karna pada form ini saya ingin menjadikannya berada di class tab-content cari

        // SUBMIT CARI MAHASISWA
        if (isset($_POST['src'])) {
            $data = $_POST['data'];
            $hasil = mysqli_query($sambung, "select * from mahasiswa join jurusan on mahasiswa.id_jur=jurusan.id_jur where mahasiswa.nama like '%$data%'");
            while ($baris = mysqli_fetch_array($hasil)) {
                echo "Nama  &nbsp;  : $baris[1] <br/>";
                echo "NRP   &nbsp;   &nbsp;&nbsp;: $baris[0] <br/>";
                echo "Alamat    : $baris[2] <br/>";
                echo "jurusan    : $baris[5] <br/><br/>";
            }
        }
        // HAPUS PENCARIAN
        if (isset($_POST['reset'])) {
            //do nothing just refresh page
        }
        ?>
    </form>
    <!-- TAB DELETE DATA MAHASISWA -->
    <form method="POST" class="tab-content" id="del">
        <h2>DELETE MAHASISWA</h2>
        Masukkan NRP Mahasiswa :
        <input type="text" name="delnrp">
        <button type="submit" name="del">Cari</button><br /><br />

        <?php
        //note php diletakkan disini karna pada form ini saya ingin menjadikannya berada di class tab-content del

        // SUBMIT CARI MAHASISWA
        if (isset($_POST['del'])) {
            $delnrp = $_POST['delnrp'];
            $hasil = mysqli_query($sambung, "select * from mahasiswa where NRP like '%$delnrp%'");
            echo $delnrp;
            while ($baris = mysqli_fetch_array($hasil)) {
                echo "Nama   &nbsp;&nbsp;: $baris[1] <br/>";
                echo "NRP   &nbsp; &nbsp;&nbsp;: $baris[0] <br/>";
                echo "Alamat    : $baris[2] <br/>";
                echo "<button type='submit' name='fixdel'><a href='delete.php?delnrp=" . $baris[0] . "'>Delete</a></button><br/><br/>";
            }
        }
        ?>
    </form>
</body>
<?php
// SUBMIT TAMBAH FORM MAHASISWA
if (isset($_POST['kirim'])) {
    $nama = $_POST['nm'];
    $alamat = $_POST['alamat'];
    $nrp = $_POST['nrp'];
    $id = $_POST['jurusan'];
    mysqli_query($sambung, "INSERT INTO mahasiswa (Nama,Alamat,NRP,id_jur) VALUES('$nama','$alamat','$nrp','$id')");
}

?>

</html>