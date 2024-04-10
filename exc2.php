
<?php
$teams=[
    "Real Madrid": ['Kylian', 'Mohamed', 'Sergio', 'Cristiano', 'Kevin', 'Luka', 'Neymar', 'Lionel', 'Sadio', 'Robert']
"FC Barcelona": ['Joshua', 'Paul', 'Virgil', 'Harry', 'Raheem', 'Eden', 'Sergio', 'Kevin', 'Luis', 'Toni']
"Manchester City": ['Leroy', 'David', 'Paul', 'Bruno', 'Marcus', 'Luke', 'Antoine', 'Romelu', 'Jesse', 'Edinson']
"Paris Saint-Germain": ['Neymar', 'Kylian', 'Sergio', 'Kevin', 'Luka', 'Mohamed', 'Cristiano', 'Sadio', 'Robert', 'Lionel']
"AC Milan": ['Gianluigi', 'Zlatan', 'Theo', 'Franck', 'Ismaël', 'Hakan', 'Alessio', 'Olivier', 'Sandro', 'Fikayo']
"Manchester United": ['Harry', 'Romelu', 'Edinson', 'Bruno', 'Jadon', 'Paul', 'Antoine', 'Luke', 'Marcus', 'Jesse'],
];

$match=[
    "firstmatch"=>[$teams["Real Madrid"], $teams["FC Barcelona"]],
    "scndmatch"=>[$teams["Manchester City"], $teams["Paris Saint-Germain"]],
    "thirdmatch"=>[$teams["AC Milan"], $teams["Manchester United"]],
   
];
echo "<pre>";print_r($match);echo"</pre>";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul><?php foreach ($teams as $squad => $squad_list) {?>
        <li><?=$squad?>
        <ul>
            <?php
            foreach ($squad_list as $player_name) {?>
            <li><?= $player_name ?></li> <?php 
                }
            ?>
        </ul>
    </li><?php
   }
   foreach ($match as $match_name => $teams) {
    echo "<h3>$match_name</h3>";
    foreach ($teams as $team_index => $team_players) {
        echo "<h4>{$team_index} Team:</h4>";
        echo "<ul>";
        foreach ($team_players as $player) {
            echo "<li>$player</li>";
        }
        echo "</ul>";
    }
    echo "<hr>";
}
   
   ?>

 </ul>
</body>
</html>