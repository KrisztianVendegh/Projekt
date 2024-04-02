<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>formular</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="info.html">Informacie o aute</a></li>
                <li><a href="motor.html">Motor</a></li>
                <li><a href="obrazky.html">Obrazky</a></li>
                <li><a href="formular.html">Formular</a></li>
            </ul>
        </nav>
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" width="155px"></a>
          </div>
    </header>
    
    <form id="contactForm" action="thankyoupage.html" method="post" onsubmit="return validateForm()">
        <label for="name">Meno a priezvisko:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Textarea:</label>
        <textarea id="message" name="message" required></textarea>
        <input type="checkbox" id="consent" name="consent" required>
       
        

        <input type="submit" value="Odoslať">
    </form>
    
    <script src="js/validacia.js"></script>
</body>
</html>
