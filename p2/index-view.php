<!doctype html>
<html lang='en'>

<head>
    <title>Project2</title>
    <meta charset='utf-8'>

    <style>
    body {
        font-family: calibri;
        margin: 40px;
        color: #505050;
    }

    h1 {
        color: #505050;
        text-align: center;
    }

    .image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    </style>
</head>

<body>

    <h1>PROJECT 2: ROCK, SCISSORS, PAPER GAME</h1>
    <img src='https://miro.medium.com/max/700/1*8du96SQUQ0NlWmWvVu20Zw.png' alt='Rock, Paper, Scissors' class="image">
    <p><i>Photo source: www.esquireme.com</i></p>
    <h2>
        INSTRUCTIONS:
    </h2>
    <ul>
        <li>
            Player 1 (You) and Player 2 (Computer) select between items: Rock, Scissors, or Paper.
        </li>
        <li>
            The game will be a tie if both players select the same item. You will have to shoot again.
        </li>
        <li>
            Otherwise: Rock beats Scissors, Paper beats Rock, and Scissors beats Paper.
        </li>
        <li>
            Get ready to shoot!
        </li>
    </ul>
    <hr>
    <h2>
        PLAY:
    </h2>
    <h3>
        <form method='GET' action='process.php'>
            <input type='radio' name='choice' value='Rock' id='Rock' checked><label for='Rock'>Rock</label>
            <input type='radio' name='choice' value='Scissors' id='Scissors'><label for='Scissors'>Scissors</label>
            <input type='radio' name='choice' value='Paper' id='Paper'><label for='Paper'>Paper</label>
    </h3>


    <button type='submit'>Shoot</button>
    </form>

    <hr>
    <?php if ($haveResults): {?>
    <h2>
        RESULTS:
    </h2>

    <h4>Your Move: <?php echo $choice ?>
    </h4>

    <h4>Computer's Move: <?php echo $comp ?>
    </h4>


    <?php if ($winner): ?>
    <h3 style="color:#008000;">Congratulations !</h3>
    <?php else :?>
    <h4 style="color:#b30000;">Shoot again !</h4> <?php
        
  ?>
    <?php endif ?>
</body>

</html>