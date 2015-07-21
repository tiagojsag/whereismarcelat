<?php
if (strtotime('today') < strtotime('2015-07-25')) {
    $css = 'weddingcss.css';
    $answers = array(
        'He is drunk in Taiwan',
        'Sleeping in a hotel room with his friends (and a tiger)',
        'Getting a tattoo',
        'Drunk... somewhere... nobody knows...'
    );
} elseif (strtotime('today') < strtotime('2015-08-03')) {
    $css = 'hmcss.css';
    $answers = array(
        'He just got married, use your imagination ;)'
    );
} else {
    $css = 'css.css';
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
        'Marriage preparations',
        'His stag party',
        'On Vacation… again',
        'Sprint planning meeting',
        'Moving tickets around with SK',
        'Stand-up meeting',
        'Lunch',
        'Dorfgrill',
        'He should be cleaning the mess behind his desk... but he is not'
    );
}

?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Is Marcel on his place?</title>
        <link rel="stylesheet" href="<?php echo $css; ?>" />
    </head>
    <body>
        <div class="background"></div>
        <h1 class="answer"><span class="question">Where is Marcel at?</span><br><br><?php echo $answers[array_rand($answers)]; ?></h1>
    </body>
</html>
