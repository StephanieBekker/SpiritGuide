<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spirit Guide</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="shortcut icon" href="piczz/Ghost.svg" TYPE="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<div class="start-overlay">

    <div class="start-container">

        <div class="start-indhold">
            <img src="piczz/Ghost.svg" id="ghost" alt="Ghost character">
            <h1>Spirit Guide</h1>
        </div>
        <p>Top scores</p>
        <div class="score-board">
            <iframe src="https://highscores.martindilling.com/games/70/embed?fontSize=100&bgColor=000000&textColor=F68B00&borderColor=F68B00" title="Highscore table for Spirit Guide" width="250px" height="270px"></iframe>
        </div>

        <br/>

        <button id="start">START</button>

    </div>

</div>

<div class="instructions">


           </div>


<div class="container">
    <div id="perfect">

    </div>
    <div id="instructions">
    Hold down the mouse to stretch the stick
        <img id="mouse" src="piczz/mouse.svg" alt="mouse clicking down">
    </div>

    <div class="score-ui">
        <div id="score"></div>
        <div id="bonus"></div>
    </div>
    <canvas id="game" width="375" height="375"></canvas>
    <div id="introduction"></div>

</div>


<div class="game-over-overlay">

    <div class="game-over-container">
        <div class="indhold">
            <img src="piczz/GhostSlut.svg" id="ghost" alt="Ghost character">
            <h1>Game Over!</h1>
        </div>
            <p>Your score: <span class="game-over-score"></span></p>
            <label for="playerName">Enter your name:</label>
            <input type="text" id="playerName" class="submit-name-input" placeholder="Enter your name"/>

            <br/>

            <div class="buttons">
                <button class="submit-button">SUBMIT SCORE</button>
                <p>or</p>

                <button id="restart">RESTART</button>

            </div>


    </div>


</div>


</body>
</html>

