<!doctype html>
<html lang='en'>
<head><title>Project1</title>
    <meta charset='utf-8'>
</head>
<body>
    <h1>Project 1</h1>
</body>
</html>


<VirtualHost *:80>
    ServerName e2p1.loc
    DocumentRoot /path/to/htdocs/e2/p1
    <Directory /Applications/XAMPP/xamppfiles/htdocs/e2/p1>
        AllowOverride All
        Options -Indexes
        Require all granted
    </Directory>
</VirtualHost>