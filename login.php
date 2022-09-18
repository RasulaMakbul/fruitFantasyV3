<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- customised stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 border-3 rounded-2" style="background-color: #e3f2fd;">Login</nav>
    <div class="container mt-5 p-3">
        <div class="justify-content-md-center pb-2">
            <form action="" method="POST" class="form-login align-items-center">

                <div class="col-md-auto pb-2">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="email">@</span>
                        <input type="email" class="form-control" name="email" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class=" justify-content-center fs-3 mb-3">
                    <!-- <button class="btn btn-primary w-100" type="submit">login</button> -->
                    <a href="dashboard.php" class="btn btn-primary w-100" type="submit">Login</a>
                </div>
                <div class=" justify-content-center mb-3">
                    <a href="register.php" class="btn btn-success w-100" type="submit">Register</a>
                </div>
            </form>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>