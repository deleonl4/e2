<!doctype html>
<html lang='en'>

<head>
    <title>Project1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Project 1: ROCK, SCISSORS, PAPER GAME</h1>
    <img src='https://miro.medium.com/max/700/1*8du96SQUQ0NlWmWvVu20Zw.png' alt='Rock, Paper, Scissors'>
    <p><i>Photo source: www.esquireme.com</i></p>
    <h2>
        MECHANICS:
    </h2>
    <ul>
        <li>
            Player A and Player B select between items: Rock, Paper or Scissors.
        </li>
        <li>
            The game will be a tie if both players select the same item.
        </li>
        <li>
            Otherwise: Rock beats Scissors, Paper beats Rock, and Scissors beats Paper.
        </li>
    </ul>

    <h2>
        RESULTS:
    </h2>
    <ul>
        <li>Player A chose <?php echo $player1Move; ?></li>
        <li>Player B chose <?php echo $player2Move; ?></li>
        <li>
            <strong>Winner:</strong> <?php echo $winner; ?>
        </li>
    </ul>
</body>

</html>