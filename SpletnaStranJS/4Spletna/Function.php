<?php

//functions
    // function get_image($link, $opt, $d) {
    //     $class = "";
    //     if ($opt == 0) {$class = "img0";}
    //     if ($opt == 1) {$class = "img1";}
    //     if ($opt == 2) {$class = "img2";}
    //     if ($opt == 3) {$class = "img3";}
    //     if ($opt == 4) {$class = "img4";}
    //     if ($opt == 5) {$class = "img5";}
    //     if ($opt == 6) {$class = "img6";}

    //     $img = '<img src="'.$link.'" class="'.$class.' '.$d.'">';
    //     return $img;
    // }

    function get_image($link, $class) {
        return '<img src="'.$link.'" class="'.$class.'">';
    }
?>