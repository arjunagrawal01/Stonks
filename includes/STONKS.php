<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!--API KEY:   AMFNM4XBPVBLOWYF
PURDUE API KEY: AMFNM4XBPVBLOWYF

-->


<!DOCTYPE html>
<html>
<head>
    <title>STONKS</title>
    <style>
        header {
            padding-left: 100px;
            padding-top: 25px;
            font-size: 75px;
            Color: white;
            text-decoration:none;
        }

        a:visited {
                color: black;
                    }

        h2 {
            padding: px;
            text-align: center;
            font-size: 16px;
            Color: white;
        }

        h3 {
            padding: px;
            text-align: left;
            font-size: 25px;
            Color: white;
        }


        .white {
            color: rgb(255, 255, 255);
            text-decoration: none;
        }

        .black {
            color: black;
            text-decoration: none;
            text-align: center;
        }

        body {
            background-color: rgb(43, 43, 43);
        }

        UserInfo {
            right: 50px;
            top: 50px;
        }


        buysell {
            position: absolute;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 0px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
        }

        buttonBuy {
            position: absolute;
            right: 670px;
            top: 150px;
            text-align: center;
            background: green;
            display: block;
            font-size: 30;
            border: none;
            height: 75px;
            width: 150px;
            
        }

        buttonSell {
            position: absolute;
            right: 520px;
            text-align: center;
            top: 150px;
            background: red;
            display: block;
            font-size: 30;
            border: none;
            height: 75px;
            width: 150px;
        }

        buttonAccount {
            position: absolute;
            right: 50px;
            top: 40px;
            text-align: center;
            background: white;
            display: block; 
            font-size: 20;
            border: none;
            height: 20px;
            width: 100px;
        }

        buttonLogout {
            position: absolute;
            right: 50px;
            top: 70px;
            text-align: center;
            background: white;
            display: block; 
            font-size: 20;
            border: none;
            height: 20px;
            width: 100px;
        }

        watchlist {
            position: absolute;
            right: 20px;
            top: 150px;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 15px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
            max-width: 300px;
        }

        reddit {
            position: absolute;
            right: 380px;
            top: 650px;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 0px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
        }


        button {
            position: absolute;
            background: transparent;
            display: block;
            font-size: 0;
            border: none;
            height: 175px;
            width: 300px;
        }

        personal {
            position: absolute;
            left: 20px;
            top: 150px;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 0px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
        }

        profile {
            position: absolute;
            left: 20px;
            top: 650px;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 0px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
        }

        financials {
            position: absolute;
            left: 520px;
            top: 650px;
            background-color: rgba(24, 24, 24, 0.849);
            padding: 0px;
            font-size: 20px;
            Color: rgb(0, 0, 0);
        }



        body {
            font-family: Arial;
        }

        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            position: absolute;
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 500px;
            left: 1050px;
            background: #f1f1f1;
        }



            form.example button:hover {
                background: #0b7dda;
            }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<script>

    symbols = ["TSLA", "GME"];


</script>
<form class="example" action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
</form>


<header>
    <a href="STONKSGUEST.php" style="text-decoration: none" color:white;>STONKS</a>
</header>

<buttonBuy>
    Buy 
</buttonBuy>

<buttonSell>
    Sell
</buttonSell>

<buttonAccount>
<a href="Account.php" style="text-decoration: none" color:white;><div class = "boxed"> <?php echo htmlspecialchars($_SESSION["username"]); ?> </div></a> 
    </buttonAccount>


<buttonLogout>
<a href="logout.php" style="text-decoration: none" color:white;><div class = "boxed"> Logout </div></a>
</buttonLogout>

<head>
    <!-- Load plotly.js into the DOM -->
    <script src='https://cdn.plot.ly/plotly-latest.min.js'>
    </script>
</head>
<personal>
    <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
</personal>

<script>
    var data = [
        {
            x: ['22:24:00', '22:25:00', '22:26:00', '22:27:00', '22:28:00'],
            y: [1000, 999, 998, 1002, 1004, 1005, 1000, 1020, 940, 800, 1000, 1200],
            type: 'scatter'
            
        }
    ];
    var layout = {
        title: 'Account Value',
        width: 1000,
        height: 500,
        plot_bgcolor: 'rgb(10,10,10)',
        xaxis: { color: 'rgb(500,10,10)'},
        paper_bgcolor: 'rgb(10,10,10)'
    };

    Plotly.newPlot('myDiv', data, layout);
</script>




<personal>
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_641d9"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    </div>
    <!-- TradingView Widget END -->
</personal>






<reddit>
    <script src='https://redditjs.com/subreddit.js' data-subreddit='wallstreetbets' data-height='500' data-width='410' data-sort='hot' data-theme='dark'></script>
</reddit>


<watchlist>
    <h2>WatchList</h2>
    <!-- TradingView Widget BEGIN-->
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        for (var i = 0; i < symbols.length; i++) {
            document.write('<a href="WatchList.html?symbol=');
            document.write(symbols[i]);
            document.write('"><button></button></a>');

            document.write('<span style="Color:white">');
            document.write(symbols[i]);
            document.write('');


            //const fetchPromise = fetch("https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=" + symbols[i] + "&apikey=AMFNM4XBPVBLOWYF");

            //.then(quote => alert(quote["Global Quote"]["05. price"]));
            //document.write(getQuotes(i));
            document.write('</span>');



            new TradingView.MediumWidget(
                {
                    "symbols": [
                        [
                            symbols[i],
                            symbols[i] + "|1D"
                        ]
                    ],

                    "chartOnly": true,
                    "width": "275",
                    "height": "150",
                    "locale": "en",
                    "colorTheme": "dark",
                    "gridLineColor": "#F0F3FA",
                    "trendLineColor": "#2196F3",
                    "fontColor": "#787B86",
                    "underLineColor": "#E3F2FD",
                    "isTransparent": true,
                    "autosize": false,
                    "container_id": "tradingview_84b45",
                    "largeChartURL": "WatchList.html?symbol=" + symbols[i]
                }
            );
        }
    </script>
    <!-- TradingView Widget END -->
    </div>
</watchlist>
</html>
