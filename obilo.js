<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="obilostyles.css" rel="stylesheet">
        <script src="js/jquery-3.6.0.min.js">
        </script>
        <title>
            Obi Nwokogba - Software Engineer - obilo.io
        </title>
<link rel="stylesheet"
          href="obilostyles.css"/>

    </head>
    <body>
        <div class="container">
            <div class="container-lg">
                <h2>
                    How are you today? My name is Obi Nwokogba, and I am a Software Engineer. I enjoy designing and coding apps and web pages that are a delight to use! I'm skilled at Javascript, HTML, CSS and I am passionate about good UI design. I am also an
                    <a href="https://obiloart.com" target="_blank">
                        artist
                    </a>
                    .
                </h2>



            </div>
            <h3 id="httpscontent">
            </h3>
            <h3 id="httpscontent2">
            </h3>
            <h3 id="httpscontent3" class="panelOne">
            </h3>

            <script>

                function getPriceOfCoin(coinTicker) {
                    var coinTicker2 = coinTicker;
                    const settings = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://coingecko.p.rapidapi.com/simple/price?ids=" + coinTicker2 + "&vs_currencies=USD",
                        "method": "GET",
                        "headers": {
                            "x-rapidapi-key": "de9f03c511msh409345b99ecf623p16aa52jsnc3bf33da52c6",
                            "x-rapidapi-host": "coingecko.p.rapidapi.com"
                        }
                    };

                    $.ajax(settings).done(function (response) {
                        let coinPrice = response[coinTicker2].usd;
                        console.log(response[coinTicker2].usd);
                        $("#httpscontent3").append(`<div><h1> ${coinTicker2} ${coinPrice} </h1></div>`);
                    });

                } // END OF GETPRICEOFCOIN FUNCTION

                getPriceOfCoin("bitcoin");
                getPriceOfCoin("ripple");
                getPriceOfCoin("EOS");
                getPriceOfCoin("binance");
                getPriceOfCoin("ethereum");
                getPriceOfCoin("dodgecoin");
                getPriceOfCoin("litecoin");

            </script>

            <span class="coinInquiryButton">bitcoin</span>
        </div>

    </body>
</html>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script crossorigin="anonymous" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">




$('body').on('click', 'span.coinTickerButton', function(evt) {
  // 'this' will be a <div> with a class of 'circle'
  getPriceOfCoin(evt.target.text());
});












/*

RANDOM IRA CODE 

$('#homes tbody').on('click', 'button', function() {
  $(this).closest('tr').fadeOut(1000, function() {
    // now that the tr is hidden, let's completely remove it from the DOM
    $(this).remove();
  });
});

*/








</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
