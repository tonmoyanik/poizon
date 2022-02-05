<?php
    if (isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = $_POST['subject'];

//        foreach ($subject as $item)
//        {
//            echo $item . '<br/>';
//        }
    }

?>



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
            <li><a href="" class="nav-link">Example-two</a></li>
            <li><a href="" class="nav-link">Example-three</a></li>
        </ul>
    </div>
</nav>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">All Information</div>
                            <div class="card-body">
                               <div class="table-responsive">
                                   <table class="table table-bordered">
                                       <thead>
                                       <tr>
                                           <th>Name</th>
                                           <th>Email</th>
                                           <th>Mobile</th>
                                           <th>Subject Name</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                           <td><?php echo $name; ?></td>
                                           <td><?php echo $email; ?></td>
                                           <td><?php echo $mobile; ?></td>
                                           <td>
                                               <?php foreach ($subject as $item)
                                               {
                                                   echo $item. '<br/>';
                                               }
                                               ?>
                                           </td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>