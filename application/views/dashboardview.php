<!DOCTYPE html>
<html>

<head>
    <div class="title">
        <title>dashboard</title>
        <h2>Dashboard</h2>
        <link rel="stylesheet" type="text/css" href="asset/css/daftar.css">
    </div>
</head>

<body>
    <h3>Selamat Datang !!<?php echo " $na->name"; ?>
    </h3>
    <ul><?php if ($this->session->userdata['role'] == 1) { ?>
            <li><a href="user">Daftar User</a> </li>
        <?php } ?>
        <li> <a href="artikel">Daftar Artikel</a></li>
        <li><a href="<?php echo base_url('artikel/yourartikel') ?>">Your Artikel</a></li>
        <li><a href="logout">Logout</a></li>
    </ul>

</body>

</html>