<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css');?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
 
</head>
<body>
    <div class="row">

        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="body-part">
            <div class="top-logo">
                <img src="<?php echo base_url('assets/images/rotary.jpg');?>">
            </div>
            <form>
                <div class="e-mail">
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                </div>
                <div class="password">
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                </div>
                <div class="row">
                <div class="col-sm-6">
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="forgot-pass">
                    <a href="#"> forget password?</a>
                </div>
                </div>
                </div>
                <div class="button">
                <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
        </div>

        <div class="col-sm-4"></div>
    </div>

    
</body>
</html>