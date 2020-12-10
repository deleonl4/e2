<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>


<body>

    <header>
        <p class='logotext'><i>Photo source: www.esquireme.com</i></p>
        <a href='http://e2p3.lesliedeleon.xyz'><img src='https://miro.medium.com/max/700/1*8du96SQUQ0NlWmWvVu20Zw.png' alt='Rock, Scissors, Paper Logo' class='logo'></a>

    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>
</html>
