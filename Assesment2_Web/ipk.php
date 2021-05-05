<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
</head>

<body>

    <div class="container col-md-6 mt-4">
        <div class="card">
            <div class="card-header bg-success text-yellow ">IPK
                <a href="tambah_ipk.php" class="btn btn-sm btn-primary float-right">Tambah</a>
                <!-- <a href="about.php" class="btn btn-sm btn-primary float-right">About</a> -->
            </div>
           
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <?php
                    $query = mysqli_query($koneksi, "select * from ipk");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tbody>
                            <tr>
                                <td><?= $row['semester']; ?></td>
                                <td><?= $row['ipk']; ?></td>

                                <td><a href="edit_ipk.php?semester=<?php echo $row['semester']; ?>">Edit</a> |
                                    <a href="hapus_ipk.php?semester=<?php echo $row['semester']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Delete</a>
                                </td>

                            </tr>
                        </tbody>

                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>

</body>

</html>