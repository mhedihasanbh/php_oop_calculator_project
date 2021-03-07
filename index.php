<?php
require_once './vendor/autoload.php';
use App\classes\Calculator;
$result= 0 ;
if(isset($_POST['submit_btn'])){
    $calculator=new Calculator($_POST);
    $result=$calculator->mycalculator();

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="index.php" class="nav-link">Example 1</a></li>
                <li><a href="example2.php" class="nav-link" >Example 2</a></li>
                <li><a href="" class="nav-link" >Example 3</a></li>
                <li><a href="" class="nav-link" >Example 4</a></li>
                <li><a href="" class="nav-link" >Example 5</a></li>
            </ul>
        </div>
    </nav>
    <section class="bg-light py-5">
        <container>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-header text-center">Example One</div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3  col-form-label">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3  col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="submit_btn" class="btn btn-success" value="+">
                                        <input type="submit" name="submit_btn" class="btn btn-success" value="-">
                                        <input type="submit" name="submit_btn" class="btn btn-success" value="*">
                                        <input type="submit" name="submit_btn" class="btn btn-success" value="/">
                                        <input type="submit" name="submit_btn" class="btn btn-success" value="%">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </container>
    </section>
</body>
</html>

