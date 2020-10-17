<meta charset='utf-8'>

</head>

<body>

    <form method='GET' action='process.php'>

        <!--<label for='guess'>What the mystery number?</label>
            <input type='text' name='guess' id='guess'>
        -->
        <!--
        <input type='checkbox' value='yes' name='subscribe' id='subscribe'>
        <label for='subscribe'>Subscribe to our newsletter?</label>
        -->
        <!--
        <input type='checkbox' name='colors[]' value='red' id='red'>
        <label for='red'>Red</label>

        <input type='checkbox' name='colors[]' value='orange' id='orange'>
        <label for='orange'>Orange</label>

        <input type='checkbox' name='colors[]' value='yellow' id='yellow'>
        <label for='yellow'>Yellow</label>
        -->

        <label for='color'>What’s your favorite color</label>
        <select id='color' name='color'>
            <option>Choose one...</option>
            <option value='red'>Firetruck red</option>
            <option value='orange'>Pumpkin orange</option>
            <option value='yellow'>Sunshine yellow</option>
        </select>

        <button type='submit'>Submit</button>
    </form>

</body>

</html>