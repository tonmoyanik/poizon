<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/all.css">

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="index.php" class="nav-link">Example-one</a></li>
                <li><a href="example-two.php" class="nav-link">Example-two</a></li>
                <li><a href="" class="nav-link">Example-three</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">FILL UP THE FORM</div>
                        <div class="card-body">
                            <form action="example-two.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" name="subject[]" value="Bangla"/>Bangla</label>
                                        <label><input type="checkbox" name="subject[]" value="Math"/>Math</label>
                                        <label><input type="checkbox" name="subject[]" value="English"/>English</label>
                                        <label><input type="checkbox" name="subject[]" value="Physics"/>Physics</label>
                                        <label><input type="checkbox" name="subject[]" value="Botany"/>Botany</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/jquery-3.6.0.js" ></script>
    <script src="../assets/js/bootstrap.js" ></script>

</body>
</html>