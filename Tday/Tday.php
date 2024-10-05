<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Greetings.css" />
    <link rel="icon" type="image/jpg" href="k1.jpg" />
    <title>Happy Teachers Day</title>
</head>

<body>
        <div id="bg"></div>
        <div id="header">Teacher Profile</div>
        <div id="title">Made by Group 3 pogi</div>
        <div class="content-container">
            <div id="arieltitle">Ariel Domingo</div>
            <div id="elvistitle">Elvis Galzote</div>
            <div class="image-container">
                <form action="TdayAriel.php" method="post">
                    <input type="hidden" name="image" value="Pogi">
                    <a title="Sir Ariel Click Me!" onclick="this.closest('form').submit(); return false;">
                        <img id="Pogi" src="Ariel-removebg-preview.png" height="350px" width="350px" />
                    </a>
                </form>
            </div>
            <div class="image-container">
                <form action="TdayGalzote.php" method="post">
                    <input type="hidden" name="image" value="Elvis">
                    <a title="Sir Galzote Click Me!" onclick="this.closest('form').submit(); return false;">
                        <img id="Elvis" src="SirGalzote.png" height="350px" width="350px" />
                    </a>
                </form>
            </div>
        </div>
</body>

</html>