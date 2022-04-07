
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <!-- Let's start -->
        <script src="build/recaptcha.js" async defer></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Creativebitco.in</title>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="build/images/favicon.jpg">
        <link rel="stylesheet" href="build/0.354e656b.css">
        <link rel="stylesheet" href="build/app.d8b94386.css">
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
            <script src="payout.js">

            </script>

    </head>

    <body>

    <div class="container-fluid head">


        <div class="container-fluid header-gradient"></div>

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
            <li class="nav-item active">
                <a class="nav-link" href="index.php#affl">Join US!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#investments">Investments</a>
            </li>
          <!--  <li class="nav-item">
                <a class="nav-link" href="#payouts">Payouts</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#faq">FAQ</a>
            </li>
          <!--  <li class="nav-item">
                <a class="nav-link" href="#telegram">Telegram</a>
            </li> -->
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
                  Minimum deposit is 0.001₿
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
    <!--     <div class="stat-tab">
        <div class="img-stat">
            <img src="build/img/transaction-icon.svg" />
        </div>
        <div class="text-stat">
            <div class="count">
                <h2 class="counter-value" data-count="1154">1154</h2>
                <span>TX/RX</span>
            </div>
        </div>
    </div> -->
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
                <h2 class="counter-value" data-count="240">300</h2>
                <span>Hours</span>
            </div>
        </div>
    </div>
</div>

      <div class="demo">
          <h1 id="demo"></h1>
      </div>

<!--dataTable -->
        <section id="investments">
      <table  id="dataTable" class="table table-bordered table-hover">
            <thead class="table thead-dark">
              <tr>

                <th scope="col">Payout Address</th>
                <th scope="col">Invested Amount</th>
                <th scope="col"> Added Date</th>
              </tr>
            </thead>
            <tbody>

              <?php
              //$conn = mysqli_connect("77.245.159.7", "thebtcge", "u:@p3NE7J8y6kS", "thebtcge_coinpayment");
               $conn = mysqli_connect("localhost", "root", "", "thebtcge_coinpayment");
              // Check connection

              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT email,amount,status, updated_at FROM payments WHERE status='initialized' AND amount>=0.0001 ORDER BY id DESC";

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc() )  {
              echo '<tr><td scope="row">' . $row["email"] . '</ td><td scope="row">'
              . $row["amount"].  '</ td><td scope="row">'.$row["updated_at"]. "</td></tr>";
              }

            }
              $conn->close();
              ?>

            </tbody>
          </table>
    <!--Refferal-->
<div class="container-fluid ref-bg" id="affl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ref-img"></div>
            <div class="col-md-6">
                <div class="wrap-ref-description" style="color:#fff">
                    <h2><span>Affiliate Program</span></h2>
                    <p>
                        <span>Coming Soon...</span>
                    </p>
                        <ul class="small">
                        <li>Level 1 with 7%</li>
                        <li>level 2 with 4%</li>
                        <li>level 3 with 2%</li>
                        </ul>

                    <a href="#start" class="btn referbtn">Get affiliate Link</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- FAQ -->

<div class="container">
    <div class="wrap-faq">
        <div class="title-about" id="faq">
            <p>FAQ</p>
            <h2>
                <span>A</span>nswers <span>o</span>n <span>Q</span>uestions
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div
                        style="visibility: hidden; position: absolute; width: 0px; height: 0px;"
                >
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <symbol viewBox="0 0 24 24" id="expand-more">
                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </symbol>
                        <symbol viewBox="0 0 24 24" id="close">
                            <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                            />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </symbol>
                    </svg>
                </div>

                                        <details>
                    <summary>
                        What is Creativebitcoin?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Creativebitcoin is a fully automated Bitcoin doubler platform operating with no human intervention, aside from regular server maintenance conducted by our staff. Take full advantage of our fast and legit Bitcoin doubler platform. You will get your Bitcoin doubled in 240 hours.</p>
                </details>
                                                                    <details>
                    <summary>
                        How to start?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>First, you need to share your wallet address with where you want your payouts to go. Second you will get a wallet address to which you have to send your coins. Third you have to wait 240 hours after 3 confirmations of your amount and you will get your coins doubled.</p>
                </details>
                                                                    <details>
                    <summary>
                        Who can invest in Crativebitcoin ?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Anyone, from all over the world can become an investor and take part.</p>
                </details>
                                                                    <details>
                    <summary>
                        What is the minimum/maximum to invest?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Minimum is 0.001₿ Maximum is 50₿</p>
                </details>
                                                                    <details>
                    <summary>
                        How much time do you need to process?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Creativebitcoin process your coins in 240 hours and after 3 confirmations on the Bitcoin Blockchain.</p>
                </details>
                                                                    <details>
                    <summary>
                        Do you charge any fee for providing your investment services?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>No, we do not charge any fees.</p>
                </details>

                                        </div>
            <div class="col-md-6">
                <div
                        style="visibility: hidden; position: absolute; width: 0px; height: 0px;"
                ></div>

                                    <details>
                    <summary>
                    Is the withdrawal instant?
                    <svg
                    class="control-icon control-icon-expand"
                    width="24"
                    height="24"
                    role="presentation"
                    >
                    <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="#expand-more"
                    />
                    </svg>
                    <svg
                    class="control-icon control-icon-close"
                    width="24"
                    height="24"
                    role="presentation"
                    >
                    <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="#close"
                    />
                    </svg>
                    </summary>
                    <p>The withdrawal will be send to your account after 3 blockchain confirmations and our personnel confirmations. It won't take more than an hour.</p>
                    </details>


                                    <details>
                    <summary>
                    Which cryptocurrencies do you accept?
                    <svg
                    class="control-icon control-icon-expand"
                    width="24"
                    height="24"
                    role="presentation"
                    >
                    <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="#expand-more"
                    />
                    </svg>
                    <svg
                    class="control-icon control-icon-close"
                    width="24"
                    height="24"
                    role="presentation"
                    >
                    <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="#close"
                    />
                    </svg>
                    </summary>
                    <p>We currently just accept Bitcoin. But you can exchange from any currency to Bitcoin and pay directly from exchanges to your deposit address.</p>
                    </details>

                                                                <details>
                    <summary>
                        Do you have an affiliate system?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Unfortunately, we do not have affiliate program yet. However, we will add it to our website ASAP.</p>
                  </details>
                      <!--  <details>
                  <summary>
                        Are affiliate earnings instant?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Yes you will get your earnings to your payout wallet.</p>
                </details>  -->
                                                                    <details>
                    <summary>
                        How can I see my investment?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>You can enter your Payout Wallet ID as well your TransactionID on the homepage to check the status.</p>
                </details>
                                                              <!--        <details>
                    <summary>
                        How can I see my affiliate bonus?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>You can enter your Payout Wallet ID on the homepage to check the status.</p>
                </details>
                                                                    <details> -->
              <!--        <summary>
                        Where can i find my affiliate link?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Just enter your payout wallet and you will get a unique affiliate link. You can use different payout wallets to generate new affiliate links.</p>
                </details>   -->
                                                              <!--        <details>
                    <summary>
                        Can i make more accounts to take all referral commissions for myself ?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>No, we dont tolerate this kind of cheating the system. Please use the referral link just for your referrals.</p>
                </details> -->
                                                                    <details>
                    <summary>
                        Can I change my payout wallet?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>No, thats not possible. Once you set your payout wallet, its not changeable for the future. Please be sure to use a trusted wallet provider. We always recommend to use blockchain.info or a Ledger Stick.</p>
                </details>
                                                                    <details>
                    <summary>
                        I have another question, how can I get in touch with you?
                        <svg
                                class="control-icon control-icon-expand"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#expand-more"
                            />
                        </svg>
                        <svg
                                class="control-icon control-icon-close"
                                width="24"
                                height="24"
                                role="presentation"
                        >
                            <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#close"
                            />
                        </svg>
                    </summary>
                    <p>Please use our support email. <a href="build/html/email-protection.html" class="__cf_email__" data-cfemail="f79f929b87b7939882959b9285d98398">[email&#160;protected]</a></p>
                </details>


            </div>
        </div>
    </div>
</div>
</div>
</div>



    <footer>
    <div class="footerlogo"><a href="index.php" rel="nofollow">Creativebitco.in</a></div>
    <div class="footerlink ">
        <ul class="nav">
            <li><a href="index.php#start">Start</a></li>
            <li><a href="index.php#faq">FAQ</a></li>
            <li><a href="mailto:support@thebtcgenerator.me">Ask Creativebitcoin</a></li>
            <li><a href="#start">Affiliate</a></li>
        </ul>
    </div>
    <p>Copyright © 2020 Creativebitco.in</p>
</footer>
        <script src="coinpayments/js/particles.min.js"></script>
        <script> particlesJS.load("particles-js", "coinpayments/json/particles.json", function(){
            console.log("Particles loaded!");} )
        </script>

        <script data-cfasync="false" src="build/email-decode.min.js"></script>
        <script src="build/runtime.ba2079ff.js"></script>
        <script src="build/0.ccb76b97.js"></script>
        <script src="build/app.fc367b76.js"></script>

            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152417924-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-156514613-1');
            </script>

            <!-- Facebook Pixel Code -->
        <!--    <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                    n.queue=[];t=b.createElement(e);t.async=!0;
                    t.src=v;s=b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t,s)}(window, document,'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '183531356094441');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
                           src="https://www.facebook.com/tr?id=183531356094441&amp;ev=PageView&amp;noscript=1"
                /></noscript>
            <!-- End Facebook Pixel Code -->

<script>



    function scrollToAnchor(aid){
        var tag = $("#"+aid+"");


        $('html,body').animate({scrollTop: tag.offset().top},'slow');
        document.querySelector("#deposit_create_address").focus();
        var element = $(".input-header").addClass('error');
        alert('Enter your payout address.');
    }

    function recaptchaCallback (token) {
        var elem = document.querySelector(".g-recaptcha");

        document.querySelector('#deposit_create_address').value = document.querySelector('#deposit_create_address').value.replace(/\s/g, '');

        $("#pageloader").fadeIn();

        while ((elem = elem.parentElement) !== null) {
            if (elem.nodeType === Node.ELEMENT_NODE && elem.tagName === 'FORM') {
                elem.submit();

                break;
            }
        }
    }


    $('#dataTable').on( 'draw.dt', function () {
        $("[data-countdown]").each(function() {
            var $this = $(this);
            finalDate = $(this).data("countdown");
            $this.countdown(finalDate, function(event) {

                var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                if ($(this).text() == "0:00:00") {
                    $(this).html('sending');
                    $(this).addClass('loading');

                } else {
                    $this.html(event.strftime(totalHours+":%M:%S"));
                }
            });
        });
    } );
    $(document).ready(function() {

        function updateIndexData(){
            setTimeout(function() {
                fetch('build/getIndexData.json').then(function(response) {
                    return response.json();
                }).then(function(json) {
                    if(document.querySelector("#counter > div:nth-child(1) > div.text-stat > div > h2").attributes["data-count"].value != json['pool']) {
                    $("#dataTable").DataTable().ajax.reload();
                    $("#dtBasicPayout").DataTable().ajax.reload();
                    }
                    document.querySelector("#counter > div:nth-child(1) > div.text-stat > div > h2").attributes["data-count"].value = json['pool'];
                    document.querySelector("#counter > div:nth-child(2) > div.text-stat > div > h2").attributes["data-count"].value = json['BTCUSD'];
                    updateIndexData();

                }).catch(function(err) {
                    console.log('Fetch problem: ' + err.message);
                });
            }, 5000);
            $(".counter-value").each(function() {
                var $this = $(this),
                    countTo = $this.attr("data-count");
                $({
                    countNum: $this.text()
                }).animate(
                    {
                        countNum: countTo
                    },

                    {
                        duration: 2000,
                        easing: "swing",
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    }
                );
            });
        }
        updateIndexData()
    });

</script>


    </body>

</html>
