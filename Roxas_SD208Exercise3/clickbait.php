<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises 1</title>
</head>

<body>
    <form action="./exercises1.php" method="POST">
        <label for="comment"></label>
        <textarea class="form-control" rows="5" id="comment" placeholder="Paste a clickbait headline" name="heading"></textarea><br>
        <button type="submit" name="click_bait">change the clickbait headline</button>
    </form>

    <?php
    if (isset($_POST['click_bait'])) {
        $clickbait_words = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "tricked",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

        $replacement_words = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threathened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );



        function headline($clickbait_words, $replacement_words, $origHead)
        {
            $replace = str_replace($clickbait_words, $replacement_words, $origHead);
            return "Honest Headline:<br>" . ucwords($replace);
        }
    }


    echo "Original Headline:<br/>" . ucwords($_POST['heading']);
    echo '<br>';
    echo '<br>' . headline($clickbait_words, $replacement_words, strtolower($_POST['heading']));
    ?>







</body>

</html>