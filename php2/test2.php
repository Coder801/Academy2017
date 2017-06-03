<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 28.05.2017
 * Time: 16:08
 */
$players = array(
    "player1" => array (
        "name" => "Young Nick",
        "position" => "G/F",
        "number" => "0",
        "meta" => array(
            "weight" => ("95kg"),
            "height" => ("201cm")
        )
    ),
    "player2" => array (
        "name" => "Black Tarik",
        "position" => "F/C",
        "number" => "28",
        "meta" => array(
            "weight" => ("113kg"),
            "height" => ("206cm")
        )
    ),
    "player3" => array (
        "name" => "World Peace Metta",
        "position" => "F",
        "number" => "37",
        "meta" => array(
            "weight" => ("118kg"),
            "height" => ("201cm")
        )
    ),
    "player4" => array (
        "name" => "Nwaba David",
        "position" => "G",
        "number" => "10",
        "meta" => array(
            "weight" => ("95kg"),
            "height" => ("193cm")
        )
    ),
    "player5" => array (
        "name" => "Zubac Ivica",
        "position" => "C",
        "number" => "40",
        "meta" => array(
            "weight" => ("109kg"),
            "height" => ("216cm")
        )
    ),
);

foreach($players as $_value) {

    echo "<td>Значение: $_value</td>\n";
    // тут ещё какая то логика представления

}