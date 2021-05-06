<?php
include 'koneksi.php';

$semester = ($_GET['semester']);

$query = "SELECT * FROM ipk WHERE semester='$semester'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
}

while ($data = mysqli_fetch_array($result)) {
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
                <div class="card-body">
                    <h5 class="card-title">Edit IPK</h5>

                    <form action="proses_edit.php" method="post">
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select id="semester" name="semester" class="form-control" value="<?php echo $data['semester']; ?>" required>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ipk">IPK</label>
                            <input type="text" class="form-control" id="ipk" name="ipk" value="<?php echo $data['ipk']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
}
    ?>
    </body>

    </html>