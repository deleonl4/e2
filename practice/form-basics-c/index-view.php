<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>

    <style>
    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }

    #results {
        font-weight: bold;
        margin: 20px;
    }
    </style>

</head>

<body>

    <form method='GET' action='process.php'>
        <h1>Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if ($results == true) { ?>
    <div id='results'>
        <?php if ($haveAnswer == false) { ?>
        You did not enter an answer
        <?php  } else { ?>

        <!--  <?php echo $results ?> -->
        <?php if ($correct) {?>
        <div class='correct'> You've got it correct.</div>
        <?php } else { ?>
        <div class='incorrect'> Sorry, that is not correct.</div>
        <?php } ?>

        <?php } ?>
    </div>
    <?php } ?>
</body>

</html>