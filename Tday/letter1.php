<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Teacher Day Sir Ariel!</title>
    <link rel="stylesheet" href="letter1.css" />
</head>

<body>
    <?php
    $Letter = "Dear Mr. Ariel Domingo,\n
  Happy Teacher’s Day! We want to take this opportunity to express our gratitude for being our teacher this school year. We experienced a lot of pressure and hardships but at the same time, we learned a lot compared to the usual teaching method of a teacher.\n
  Your energizers before lessons help a lot in keeping us engaged and active, making learning enjoyable. We also appreciate your transparency with our grades, allowing us to see our scores for each quiz and recitation. With this, everyone will see the grade we deserve.\n
  You truly are a remarkable teacher, and we’re grateful for your support. Once again, Happy Teacher’s Day, Mr. Ariel.
  \n\n                                                                                                                          Sincerely,
                                                                                                                           G3 Team Gino";
    ?>
    <div id="bg">
        <div id="output" class="typing"></div>
        <script>
            const textname = `               <?php echo $Letter ?> `

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
</body>

</html>
</div>
</body>

</html>