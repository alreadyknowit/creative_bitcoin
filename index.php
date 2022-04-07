
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <!-- Let's start -->
        <script src="build/recaptcha.js" async defer></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Creativebitco.in</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="build/images/favicon.jpg">
        <link rel="stylesheet" href="build/0.354e656b.css">
        <link rel="stylesheet" href="build/app.d8b94386.css">
        <script type="text/javascript" src="js/particles.min.js"></script>
        <script>
          particlesJS.load("particles-js", "json/particles.json", function(){console.log("Particles loaded")})
        </script>
        <script type="text/javascript">


        $(document).ready( function () {
          $('#dataTable').DataTable().ajax.reload();
        } );
        </script>

                            <style>
            .grecaptcha-badge {
            display: none !important;
            }
            </style>



            <script>
            var ws = new WebSocket("wss://api-pub.bitfinex.com/ws/2");
            ws.onopen = function(){
              ws.send(JSON.stringify({"event":"subscribe", "channel":"ticker", "pair":"BTCUSD"}))
            };
            ws.onmessage = function(msg){
              var response = JSON.parse(msg.data);
              var hb = response[1];
              if(hb !== "hb"){
                document.getElementById("bitcointicker").innerHTML = + response[1][0];
              }
            };
            </script>
            <style>
                canvas {
                    background-repeat: no-repeat;
                    background-size: 100% 100%;

                    display:block;
                    top: 0;
                    left: 0;
                    z-index: 0;
                }
            </style>
    </head>

    <body>


    <div class="container-fluid head">
        <div id="particles-js"></div> 

        <div class="container head-cont">

                <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">Creativebitco.in</a>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            autoplay
    >
        <img alt='icon' src="build/img/burger-icon.svg" />
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="investments.php">Investments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>
          <li class="nav-item">
                <a class="nav-link" title="After the first payment will be added to this section." href="investments.php">Payout Proofs</a>
            </li>
        </ul>

        <a href="index.php#start" class="btn telegramBtn">

            Start Investment
        </a>
    </div>
</nav>


<div class="header-text" id="start">

    <div class="header-title">
        <h1>
            CREATE BITCOIN<br />
            <span>in 240 hours</span>

        </h1>
        <div class="header-description">
              <span
              >Only bitcoin is accepted!<br />
                  Minimum deposit is 0.002₿
              </span>
        </div>

        <div class="input-header">


                <div style="font-size:1.25em; padding:5px; list-style-type: none; letter-spacing: 0.1em; color:white;"> </div>
            <style>
                .header-title h1 {
                    text-align: center;
                    color: #fff;
                    letter-spacing: 0.03em;
                    font-size: 45px;
                    line-height: 40px;
                    margin-top: 45px;
                }
                #pageloader
                {
                    background: rgba( 255, 255, 255, 0.8 );
                    display: none;
                    height: 100%;
                    position: fixed;
                    width: 100%;
                    z-index: 9999;
                }

                #pageloader img
                {
                    left: 50%;
                    margin-left: -32px;
                    margin-top: -32px;
                    position: absolute;
                    top: 50%;
                }


                .jumbotron {

                    width:501px;
                    background: rgb(200, 54, 54); /* This is for ie8 and below */
                    background: rgba(200, 54, 54, 0.8);
                    color: white;
                }
                @media (max-width: 600px) and (min-width: 10px){
                    .jumbotron {
                        width: 384px;
                    }
                }
                .jumbotron h2{
                    text-align:center;
                    background-image: url("build/img/sparkle_yellow.gif") !important;
                }
            </style>
            <form class="" action="coinpayments/index.php" method="post">
              <button class="btn" name="phpBtn" id="bp-payment-button">
              Start
          </button>
            </form>

            <br/>

            <div class="form-element" id="amount">
                <input type="hidden" id="deposit_create_amount" name="deposit_create[amount]" />
            </div>
            </form>
        </div>

    </div>
</div>



        </div>
</div>
    <div class="wrap-stat" id="counter">
    <div class="stat-tab">
        <div class="img-stat">
            <img src="build/img/transaction-icon.svg" />
        </div>
        <div class="text-stat">
            <div class="count">
                <h2 class="counter-value" data-count="5">0</h2>
                <span>Running Days</span>
            </div>
        </div>
    </div>
    <div class="stat-tab">
        <div class="img-stat">
            <img src="build/img/bitcoin.svg" />
        </div>

        <div class="text-stat">
          <span>   BTC/USD</span>
            <div class="count">
                <h2 class="counter-value" id="bitcointicker"></h2>

            </div>
        </div>
    </div>
    <div class="stat-tab">
        <div class="img-stat">
            <img src="build/img/payots-icon.svg" />
        </div>
        <div class="text-stat">
          <p style="font-size:20px; color:#fff">Payout in</p>
            <div class="count">
                <h2 class="counter-value" data-count="200">300</h2>
                <span>Hours</span>
            </div>
        </div>
    </div>
</div>

  <hr>
    <footer>
    <div class="footerlogo"><a href="index.php" rel="nofollow">Creativebitco.in</a></div>
    <div class="footerlink ">
        <ul class="nav">
            <li><a href="index.php">Start</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="mailto:support@creativebitco.me">Ask Creativebitcoin</a></li>
        </ul>
    </div>
    <p>Copyright © 2020 Creativebitco.in</p>
</footer>
        <script data-cfasync="false" src="build/email-decode.min.js"></script>
        <script src="build/runtime.ba2079ff.js"></script>
        <script src="build/0.ccb76b97.js"></script>
        <script src="build/app.fc367b76.js"></script>


    </body>

</html>
