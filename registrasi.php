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

<body >
    <div class="container col-md-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">FORM REGISTRASI</h5>

                <form action="proses_regis.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                        <small id="emailHelp" class="form-text text-muted">Email anda tidak akan dibagikan kepada siapapun.</small>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="passw2">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="passw2" name="passw2" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Regis</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>