 <?php
//require '../connect.php';
// connect to database
$con = mysqli_connect('localhost', 'root', '', 'pengmas');

 if (isset($_POST['tambah_kegiatan'])) {
        tambah_kegiatan();
    }

// REGISTER USER
    function tambah_kegiatan()
    {
        // call these variables with the global keyword to make them available in function
        global $con, $errors;

        // receive all input values from the form. Call the e() function
        // defined below to escape form values
        $nama = e($_POST['nama']);
        $waktu = e($_POST['waktu']);
        $jam = e($_POST['Jam']);
        $tempat = e($_POST['tempat']);
        $deskripsi = e($_POST['deskripsi']);
        print "<h2>" . $nama . "</h2>";
        print "<h2>" . $waktu . "</h2>";
        print "<h2>" . $jam . "</h2>";
        print "<h2>" . $tempat . "</h2>";
        print "<h2>" . $deskripsi . "</h2>";

        // form validation: ensure that the form is correctly filled
        if ($nama == NULL) {
            array_push($errors, 'Nama Dibutuhkan');
        }
        if ($waktu == NULL) {
            array_push($errors, 'waktu Dibutuhkan');
        }
        if ($jam == NULL) {
            array_push($errors, 'Jam Dibutuhkan');
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $query = "INSERT INTO pengmas (nama_pengmas, waktu, jam, tempat, deskripsi) 
            VALUES('$nama', '$waktu', '$jam', '$tempat', '$deskripsi')";
            mysqli_query($con, $query);
            header('location: list_pengmas.php');
            mysqli_close();
        }
    }
?>