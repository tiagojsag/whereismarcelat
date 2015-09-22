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
        'He should be cleaning the mess behind his desk... but he is not',
        'STFU and ask someone else!',
        'Have you tried googling it?',
        'Friday Session',
        'Have you looked under his table?',
        'Call his wife, she will tell you where he is... No, I\'m not his wife!',
        'Hunting frogs in the garden',
        'Honestly, I don\'t care',
        'Searching for his wedding ring',
        'Pssst, he\'s asleep, do not wake him up!',
        'Do I get a buck if I tell you that?',
        'Delegating some trainees',
        'I don\'t know where he is now, but you will see him in your nightmares!',
        'Hunting ghosts in an abandoned castle',
        'Netflix and Chill',
        'I know it but I won\'t tell you!',
        'Oh, not you again! I already told you where he is!',
        'Try to ask the magic conch shell',
        'Whatever he told you - trust me - he is somewhere else'
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
