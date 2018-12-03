<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>
<form action="register.php" method="post">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="Nama">Nama</label>
                                <input type="text" id="Nama" class="form-control mb" placeholder="Nama" name="nama">
                            </div>

                            <div class="col-md-6">
                                <label for="kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jk" required/>
                                 <option value="L">Laki-Laki</option>
                                 <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Telp">No. Telepon</label>
                                <input type="text" class="form-control" placeholder="Nomor Telepon Aktif" name="telepon">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" placeholder="Alamat Saat Ini" name="alamat">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Angkatan</label>
                                <input type="text" class="form-control" placeholder="Tahun Masuk" name="angkatan">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password_1">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Konfirmasi Password</label>
                                <input type="text" class="form-control" placeholder="konfirmasi Password" name="password_2">
                            </div>
                        </div>

                        <div class="form-group text-center">
                           <button type="submit" class="btn" name="register_btn">Register</button>
                        </div>
                        <p>
                            Already a member? <a href="login.php">Sign in</a>
                         </p>
                    </form>
</body>
</html>