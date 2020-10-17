<!doctype html>
<html lang='en'>

<head>
    <title>Forms</title>
    <meta charset='utf-8'>
</head>

<body>

    <form method='GET' action='process.php'>
        <h1>Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <!--
        <label for='answer'>Your guess A:</label>
        <input type='text' name='answerA' id='answer'>

      <label for='answer'>Your guess B:</label>
       <input type='text' name='answerB' id='answer'>
-->
        <button type='submit'>Check answer</button>
    </form>

</body>

</html>