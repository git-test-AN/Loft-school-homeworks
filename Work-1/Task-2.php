<?php

const Pictures = 80;
const Markers = 23;
const Pensils = 40;

If (Pictures == 80 && Markers == 23 && Pensils == 40){
    $pict = 80;
    echo "На школьной выставке $pict рисунков.";
    echo "<pre>";
    $mark = 23;
    echo "На школьной выставке $mark рисунков, выполненные фломастерами.";
    echo "<pre>";
    $pens = 40;
    echo "На школьной выставке $pens рисунков, выполненные карандашами.";
    echo "<pre>";
    $paints = $pict - ($mark + $pens);
    echo "На школьной выставке $paints рисунков, выполненные красками.";
}


