<?php
$result = null;
$direction = "to French";
if (array_key_exists('direction', $_POST)) {
    $direction = $_POST['direction'];
}

if (array_key_exists('word', $_POST)) {
    $word = strtolower($_POST["word"]);
    $result = $_POST["word"] . " =====> " . translate($word, $direction);
}

function translate($word, $direction)
{
    $dictionary =
        [
            "cat" => "chat",
            "door" => "porte",
            "cellphone" => "portable",
            "also" => "aussi",
            "one" => "un",
        ];

    $dictionary1 =
        [
            "gato" => "chat",
            "porta" => "porte",
            "telefono" => "portable",
            "volta" => "aussi",
            "uno" => "un",
        ];
    switch ($direction) {
        case 'to French':
            if (array_key_exists($word, $dictionary)) {
                $result = $dictionary[$word];
            } else {
                $result = "Je ne connais pas le mot $word";
            }
            break;
        case 'to English':
            if (in_array($word, $dictionary)) {
                $result = array_search($word, $dictionary);
            } else {
                $result = "Je ne connais pas le mot $word";
            }
            break;
        case 'to Italian':
            if (in_array($word, $dictionary1)) {
                $result = array_search($word, $dictionary1);
            } else {
                $result = "Je ne connais pas le mot $word";
            }
            break;
        case 'to French1':
            if (array_key_exists($word, $dictionary1)) {
                $result = $dictionary1[$word];
            } else {
                $result = "Je ne connais pas le mot $word";
            }
            break;
        default;
            $result = "je ne sais traduire que en FR ou en EN";
    }
    return $result;
}
