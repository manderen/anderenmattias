<!DOCTYPE html>

<html class="no-js" manifest="hangman.appcache">
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
        
        <title>cv</title>
        <link rel="stylesheet" type="text/css" href="css/screenStyles.css" />
        <link rel="stylesheet" type="text/css" href="css/screenLayoutLarge.css" />
        <link rel="stylesheet" type="text/css" media="only screen and (min-width:401px) and (max-width:600px)" href="css/screenLayoutMedium.css"/> 
        <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:400px)" href="css/screenLayoutSmall.css"/>
        
        <script src="scripts/modernizr.hangman.js"></script>
<script>
Modernizr.load([{
    test: Modernizr.canvastext,
    nope: ['scripts/canvas.text.js', 'scripts/optimer-bold-normal.js']
},
{
    test: Modernizr.localstorage,
    nope: ['css/json2.js', 'scripts/storage_polyfill.js'],
    both: ['css/jquery-1.7.min.js', 'scripts/hangman.js'],
    complete: function() {
        init();
    }
}]);
</script>
    </head>
    <body>
        <div id="fb-root"></div>
        <div class="page">
            
            <header>
                <a class="logo" href="index.html"></a>   
            </header>

            <article>
            <h1>Hangman</h1>
<p id="warning">JavaScript must be enabled to play this game.</p>
<div id="help"></div>
<div id="helptext">
    <h2>How to Play</h2>
    <div id="close"></div>
    <p>Hangman is a word-guessing game. Click or tap New Game to display the letters of the alphabet and a row of dashes indicating the number of letters to be guessed. Click or tap a letter. If it's in the word, it replaces the dash(es). Each wrong guess results in a stroke being added to a gallows and its victim. Your role is to guess the word correctly before the victim meets his grisly fate.</p>
</div>
<p id="loading">Game loading. . .</p>
<canvas id="stage" width="200" height="200">Sorry, your browser needs to support canvas for this game.</canvas>
<div id="play">New Game</div> <div id="clear">Clear Score</div>
<p id="word"></p>
<div id="letters"></div>
            </article>
            <nav>
                <a href="index.php">Startsida</a>
                <a href="cv.php">CV</a>  
                <a href="#">Portfolio</a>

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
    
    </body>
    <script type="text/javascript" src="js/engine.js"></script>
</html>