<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">

        <!--Skala i förhållande till skärm, maximum, minimum samma layout porträtt/landskap-->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
        
        <title>FRONTIER | KYH</title>
        <!--Standard stillayout-->
        <link rel="stylesheet" type="text/css" href="css/screenStyles.css" /> 
         <!--Dator stillayout-->
        <link rel="stylesheet" type="text/css" href="css/screenLayoutLarge.css" />
        <!--Platta stillayout-->
        <link rel="stylesheet" type="text/css" media="only screen and (min-width:401px) and (max-width:600px)" href="css/screenLayoutMedium.css"/> 
        <!--Telefon stillayout-->
        <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:400px)" href="css/screenLayoutSmall.css"/>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript" src="source/easteregg/konami.js"></script>
 
</head>
        
    <body>

    <!--facebook plug in-->
    <div id="fb-root"></div>

   

        <div class="page">
            
            <header>
                <a class="logo" href="#"></a>   
            </header>
            
            <article>
                <h1>Responsiv mobil utvecklare</h1>
                <p>
                     Mitt namn är Mattias Anderén, student och responsiv mobil utvecklare på KYH. På <a href="#">anderenmattias.se</a> visas mina kunskaper inom SEO, responsiv design, HTML, CSS och javascript. 
                </p>
            </article>

        <div class= "promoContainer">
    
            <div id="promo one">
                <div class="content">
                    <h3>Tid kvar till LIA</h3>
                    <p id="LIA"></p> 
                </div>
            </div>

            <div id="promo two">
                <div class="content">                        
                    <h3>Examen</h3>
                    <p id="exam"></p>
                </div>
            </div>
            
        </div>
            
        <nav>
            <a href="/index.php">Startsida</a>
            <a href="/cv.php">CV</a>  
            <a href="/portfolio.php">Portfolio</a>

                
            <!--twitter plugin-->
            <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            <!--facebook plugin-->
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Dela</a></div>
            
            <p>Dela sidan med dina vänner på facebook eller twitter!</p>            
        </nav>
                <footer>
                    &copy;Mattias Anderén
                </footer>
        </div>

    <script type="text/javascript">
        $.konami(function(){
            window.open("hangman.php");
        });
    </script>

    <script type="text/javascript" src="js/engine.js"></script>
     <script>
    //funktionsanrop, argument datum och id
    setTimer('01/15/2018 08:0 AM', 'LIA');      //LIA: 15/1-2018 
    setTimer('05/31/2018 08:0 AM', 'exam');     //Examen: 31/5-2018

    function setTimer(datum, id)
    {
        var endDate = new Date(datum);          //Slutdatum tilldelas
        var hourSet = 1000*60*60;
        var dayMS = hourSet*24;               //Dagvärde i millisekunder tilldelas
        var timer;

        function showResult() {
            var nowDate = new Date();           //Dagens datum tilldelas
            var distance = endDate - nowDate;
            if (distance < 0) {
                clearInterval(timer);
                document.getElementById(id).innerHTML = 'Utgått!';
                return;
            }
            var days = Math.floor(distance / dayMS); //retunerar dagar kvar, heltal
            var hours = Math.floor((distance%dayMS) / hourSet);
            document.getElementById(id).innerHTML = days + ' dagar, ';
            document.getElementById(id).innerHTML += hours + ' timmar';
        }

        timer = setInterval(showResult, 1000); //Funktionsanrop,visar timer
    }
    </script>
</body>
</html>