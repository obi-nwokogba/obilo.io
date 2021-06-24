
            function getPriceOfCoin(coinTicker) {
                var coinTicker2 = coinTicker;
                const settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://coingecko.p.rapidapi.com/simple/price?ids=" + coinTicker2 +
                        "&vs_currencies=USD",
                    "method": "GET",
                    "headers": {
                        "x-rapidapi-key": "de9f03c511msh409345b99ecf623p16aa52jsnc3bf33da52c6",
                        "x-rapidapi-host": "coingecko.p.rapidapi.com"
                    }
                };

                $.ajax(settings).done(function (response) {
                    let coinPrice = response[coinTicker2].usd;
                    console.log(response[coinTicker2].usd);
                    $("#httpscontent3").append(
                        `<div class="coinPanel1"><h1> ${coinTicker2} ${coinPrice} </h1></div>`);
                });

            } // END OF GETPRICEOFCOIN FUNCTION

            getPriceOfCoin("bitcoin");
            getPriceOfCoin("ripple");
            getPriceOfCoin("EOS");
            getPriceOfCoin("binance");
            getPriceOfCoin("ethereum");
            getPriceOfCoin("dodgecoin");
            getPriceOfCoin("litecoin");
     