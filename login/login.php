<?php
include("../navigation/nav.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/login.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>

    </script>
    <title>Hello, world!</title>
    <style>
        .form-conatiner {
            border: 0px solid white;
            width: 110%;
            padding: 50px 30px;
            margin-top: 10vh;
            -webkit-box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
        }

        .bg {
            background: url('http://localhost/canva/image/2.jpg') no-repeat;
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 600px) {
            .form-conatiner {
                width: 80%;
                border: 0px solid white;
                /* padding: 50px 30px 0px 30px; */
                margin: 10vh;
                -webkit-box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
                box-shadow: 0px 0px 22px 5px rgba(0, 0, 0, 0.75);
            }
        }
    </style>
</head>

<body>
    <!-- <div class="container my-4">
        <div class=" text-center">
            <div class="col-lg-12">
                <img src="http://localhost/canva/image/2.jpg" id="img" class="img-fluid d-inline-block align-top center" alt="Responsive image">
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <div class="my-4">
        <div class="col-lg-12">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- form start -->
                        <form class="form-conatiner bg" action="abc.php">
                            <h1><center>Login Here</center></h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-primary" href="http://localhost/canva/" role="button">Close</a>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <!-- form end  -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>