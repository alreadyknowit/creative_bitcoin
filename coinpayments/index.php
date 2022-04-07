<?php

require "init.php";

$basicInfo = $coin->GetBasicProfile();
$username = $basicInfo['result']['public_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creativebitco.in | Transaction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/particles.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../build/images/favicon.jpg">
    <style>
        canvas {
            background-image: url("images/bg.jpeg");
            background-color: #48995a;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            position: fixed;
            display: block;
            top: 0;
            left: 0;
            z-index: 0;
        }
    </style>
    <script>
        particlesJS.load("particles-js", "json/particles.json", function() {
            console.log("particles loaded");
        });
    </script>
</head>
<body>
    <div id="particles-js"></div>
    <br><br><br>
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin:auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>Pay with bitcoin</h1>
                    <p style="font-style: italic;">to <strong><?php echo "Creativebitcoin" /*echo $username;*/ ?></strong></p>
                </div>
                <hr>
                <form action="process.php" method="post" autocomplete="off">
                    <label for="amount">Amount (USD)</label>
                    <input type="text" name="amount" class="form-control" required="required">
                    <br>
                    <label for="email">Payout Address(Your Address)</label>
                    <input type="text" name="email" class="form-control" required="required" pattern=".*(^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$).*" placeholder="Example: 13Uv1xzJYKab58cvGikFr8JUGDnyyLNNto">
                    <br>
                    <button type="submit" style="border-radius: 8px;" class="btn btn-lg btn-block btn-success">Pay to <?php echo "Creativebitcoin"/* echo $username;*/ ?></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
