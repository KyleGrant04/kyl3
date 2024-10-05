<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Teacher Day Sir Ariel!</title>
    <link rel="stylesheet" href="letter2.css" />
</head>

<body>
    <?php
    $Letter = "Dear Mr. Elvis Galzote,\n
Happy Teacher’s Day! We want to take this opportunity to tell you how much we appreciate you teaching us. Your laid-back teaching style and incorporation of jokes into our lessons make learning Empowerment Technologies enjoyable and engaging. You create a positive atmosphere that encourages us to participate and ask questions, making the subject feel relevant and fun.
\n\nWe also appreciate the fun activities that ensure we understand the material. Your passion for teaching inspires us to explore and learn more about the world.Thank you for your dedication and support. We’re lucky to have you as our teacher. Once again, Happy Teacher’s Day!\n
                                                                                                                        Sincerely,
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