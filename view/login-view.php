<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <section class="form-01-main">
        <div class="form-cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-sub-main">
                            <div class="_main_head_as">
                                <a href="#">
                                    <img src="assets/images/vector.png">
                                </a>
                            </div>
                            <form action="index.php?url=login" method="POST">
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control _ge_de_ol" type="email"
                                        placeholder="Enter Email" required="" aria-required="true">
                                </div>
                                    <div class="form-group">
                                    <input id="password" type="password" name="password" class="form-control"
                                        placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                <div class="form-group">
                                    <div class="btn_uy">
                                        <button class="btn btn-success" type="submit" ><span>Login</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>