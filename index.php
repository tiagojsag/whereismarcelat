<?php
    $answers = array(
        'Not on his place',
        'In the bathroom',
        'Team leader meeting',
        'He who must not be named took him',
        "Don't know",
        'Ask Cremer, he knows where Marcel is',
        'Why do you ask me?',
        'Narnia',
        'The matrix',
        'Steiner',
        'On Vacation… again',
        'Sprint planning meeting',
        'Moving tickets around with SK',
        'Stand-up meeting',
        'Lunch',
        'Dorfgrill',
        'He should be cleaning the mess behind his desk... but he is not'
    );
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Is Marcel on his place?</title>
        <link rel="stylesheet" href="css.css" />
    </head>
    <body>
        <div class="background"></div>
        <h1 class="answer"><span class="question">Where is Marcel at?</span><br><br><?php echo $answers[array_rand($answers)]; ?></h1>
    </body>
</html>
