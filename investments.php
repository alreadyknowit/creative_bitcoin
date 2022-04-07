<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Creativebitcoin | Investments</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="build/images/favicon.jpg">
        <link rel="stylesheet" href="build/0.354e656b.css">
        <link rel="stylesheet" href="build/app.d8b94386.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
          $(document).ready( function () {
              $('#dataTable').DataTable();
            } );
        </script>
        <script type="text/javascript" src="js/particles.min.js"></script>

        <style>
            canvas {
                background-image: url("images/bg.jpeg");
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
      particlesJS.load("particles-js", "json/particles.json", function(){console.log("Particles loaded")})
    </script>
  </head>
  <body>
   <div id="particles-js"></div>
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
          <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" title="After the first payment will be added to this section." href="">Payout Proofs</a>
      </li>
      </ul>

      <a href="index.php#start" class="btn telegramBtn">

      Start Investment
      </a>
      </div>
      </nav>

    <!--dataTable -->
            <section id="investments">
              <table  id="dataTable"  class="table">
                <thead class= "thead">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Payout Address</th>
                    <th scope="col">Invested Amount</th>
                    <th scope="col">Payout Amount</th>
                    <th scope="col"> Added Date</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col"> Countdown</th>
                  </tr>
                </thead>
                <tbody id="tbody-table" >

                </tbody>
              </table>
              </section>

              <footer>
              <div class="footerlogo"><a href="index.php" rel="nofollow">Creativebitco.in</a></div>
              <div class="footerlink ">
                  <ul class="nav">
                      <li><a href="index.php#start">Start</a></li>
                      <li><a href="index.php#faq">FAQ</a></li>
                      <li><a href="mailto:support@creativebitco.me">Ask Creativebitcoin</a></li>
                      <li><a href="#start">Affiliate</a></li>
                  </ul>
              </div>
              <p>Copyright © 2020 Creativebitco.in</p>
          </footer>


                  <script type="text/javascript">

                  var ajax=new XMLHttpRequest();
                  var method ="GET";
                  var url="data.php"  ;
                  var asynchronous=true;

                  ajax.open(method,url, asynchronous);
                  ajax.send();

                  ajax.onreadystatechange=function(){

                    var data=JSON.parse(this.responseText);

                    var html ="";


                  if(this.readyState ==4 && this.status ==200)
                  {
                      for(var a=data.length-1;a>=0;a--)
                      {

                          var id=data[a].id;
                          var email=data[a].email;
                          var paymentTime=data[a].payment_time;
                          var amount=data[a].amount;
                          var payout_amount =data[a].payout_amount;
                          var status=data[a].status;
                          var updated_at=data[a].updated_at;
                          html += "<tr>";
                          html += "<td>" + id +"</td>";
                          html += "<td>" + email +"</td>";
                          html += "<td>" + amount +"</td>";
                          html += "<td>" + payout_amount + "</td>";
                          html += "<td>" + updated_at +  "</ td>";
                          html += "<td>" + paymentTime+ "</td>";
                          var idConvv=paymentTime.replace(/ /g,'');

                          html += "<td id=" +idConvv+ ">" + countdown(paymentTime)+"</td>";
                          html += "</tr>";

                          document.getElementById("tbody-table").innerHTML=html;

                      }

              }
              function countdown(timeLeft){
                    //yyyy-mm-dd hh:mm:ss

                     // Set the date we're counting down to
                     var countDownDate = new Date(timeLeft).getTime();


                     // Get today's date and time
                     var now = new Date().getTime();

                     // Find the distance between now and the count down date
                     var distance = countDownDate - now;



                     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                     var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                     // Output the result in an element
                     var finalDate=days + ":" +hours + ":"+ minutes + ":" + seconds;

                     var idConv=timeLeft.replace(/ /g,'');


                     return finalDate;
                     if (distance < 0) {
                       clearInterval(paymentTime);
                         return "Thank You!";
                     } //end of if distnce
              }

              }

                  </script>
  </body>
</html>
