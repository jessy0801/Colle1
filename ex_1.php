<?php
function chemin_court( $liste_points = NULL, $point_depart = NULL, $point_arriver= NULL) {
    //$map = [];
    /*for ($height = 0;$height < 10;$height++) {
        array_push($map, []);
        for ($width = 0;$width < 10;$width++) {
            $check = false;
            for ($i=0;$i<count($liste_points);$i++) {
                if ($liste_points[$i][0] ===$height && $liste_points[$i][1] === $width) {
                    $check = true;
                    break;
                }
            }
            if ($check) {
                array_push($map[$height], '1');
                //echo '1';
            } else {
                array_push($map[$height], '0');
                //echo '0';
            }
        }

        //echo PHP_EOL;
    }*/
    $move = 0;
    $current = $liste_points[$point_depart];
    $fin = $liste_points[$point_arriver];
    array_multisort($liste_points);
    var_dump($liste_points);
    for ($i=0 ;$i<count($liste_points);$i++) {

        while ($liste_points[$i][0] != $current[0] && $liste_points[$i][1] != $current[1]) {


            if ($liste_points[$i][0] != $current[0]) {
                if ($liste_points[$i][0] > $current[0]) {
                    $current[0]++; // bas
                    $move++;
                    //echo 'bas'.PHP_EOL;
                } elseif ($liste_points[$i][0] > $current[0]) {
                    $current[0]--; // haut
                    $move++;
                    //echo 'haut'.PHP_EOL;
                }



            }
            if ($liste_points[$i][1] != $current[1]) {
                if ($liste_points[$i][0] > $current[1]) {
                    $current[1]++; // bas
                    $move++;
                    //echo 'droite'.PHP_EOL;
                } else if ($liste_points[$i][0] < $current[1]) {
                    $current[1]--; // haut
                    $move++;
                    //echo 'left'.PHP_EOL;
                }
            }
        }
        //echo 'Point n*'.$liste_points[$i][0].' '.$liste_points[$i][1].PHP_EOL;
    }
    if (count($liste_points) < 5 || $liste_points === NULL || $point_arriver === NULL || $point_depart === NULL) {
        return array();
    } else {
        return $liste_points;
    }


}
//chemin_court(array(array(0,5),array(5,4), array(8,9), array(5,5), array(8,5),array(5,6),array(9,9)));
