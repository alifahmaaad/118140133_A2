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
        <title>Edit Pengguna</title>
        <h2>Edit Pengguna</h2>
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/edit.css">
    </div>
</head>

</div>

<form action="<?php echo base_url('user/edit/simpan/' . $user->id); ?>" method="POST" id="edit-user">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?php echo $user->name; ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="pass" name="password" id="password" value="<?php echo $user->password; ?>">
    </div>
    <div class="form-group">
        <label for="nama">Username</label>
        <input type="text" name="usernama" id="usernama" value="<?php echo $user->username; ?>">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control" value="<?php echo $user->role; ?>">
            <option value="1">admin</option>
            <option value="2">user</option>
        </select>
    </div>

    <button type="submit" form="edit-user" class="btn btn-default">Simpan</button>
</form>


</html>