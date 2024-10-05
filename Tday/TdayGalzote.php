<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sir Galzote Information</title>
    <link rel="stylesheet" href="TdayGalzote.css" />
</head>

<body>
    <p>Basic Information</p>
    <img id="img" src="SirGalzote.png">
    <?php
    $name = "Elvis Galzote";
    $Age  = "REDACTED";
    $Job = "Teacher at University of Makati, teaching for 5 years.";
    $subject = " Oral Communication,\n Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino,\n Empowerment Technologies, Creative Writing and Creative Nonfiction,\n 21st Century Literature, Media and Information Literacy, Entrepreneurship ";
    $quotes = "\"Araso\"";
    $facts = "Taught us the UMaK greeting with the \"Mabuhay\"";
    ?>
        <form action="letter2.php" method="post">
        <button>
            <h3>Letter For You Sir!</h3>
        </button>
    </form>
    <div id="bg">
        <div id="output" class="typing"></div>
        <script>
            const textname = `
Name: <?php echo $name; ?>


Age: <?php echo $Age; ?>


Job: <?php echo $Job; ?>


Subjects Taught: <?php echo $subject; ?>


Quotes: <?php echo $quotes; ?>


Interesting facts: <?php echo $facts; ?>
`;
            let i = 0;

            function TypeName() {
                if (i < textname.length) {
                    document.getElementById("output").innerHTML += textname.charAt(i);
                    i++;
                    setTimeout(TypeName, 15);
                }
            }
            document.addEventListener("DOMContentLoaded", function() {
                TypeName();
            });
        </script>

        <form>
</body>

</html>
</div>
</body>

</html>