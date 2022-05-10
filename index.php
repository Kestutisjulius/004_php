<?php
/* 
Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

*/
$str = '';
$count = 0;
for($i = 0; $i<400; $i++){
    $count++;
    if($count < 50){

        $str .= '*';
    } else {
        $str .= '<br>';
        $count = 0;
    }
}
print_r ('<div style="color: blue">'."$str</div>");
echo '<hr>';
/*  Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
    atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  
    Skaičiai didesni nei 275 turi būti raudonos spalvos. */
    $count150 = 0;
    $string275 = '';
    $fullString = '';
    $arr = array();
    for($i=0; $i < 300; $i ++){
       array_push($arr, rand(0, 300));
        if($arr[$i] > 150){
            $count150++;
            
        }


        if($arr[$i] > 275){
            $string275 .= $arr[$i] . ' ';
            $fullString .='<span style="color:red">'.$arr[$i].'</span>'  . ' ';
        } else {
            $fullString .= $arr[$i] . ' ';
        }

    }
    $html = '';
    $html = "<div>
           'didesniu nei 150 yra: '.$count150 .<br> .'SKAICIAI random:' .$fullString;
            </div>";
    echo '<br>';
    print_r ($html);
    echo '<hr>';
    /* 
    Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
    kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
    Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

    */
    $r3 = 0;
    $r3 = rand(3000, 4000);
    $html3 = '';

    for ($i = 0; $i < $r3; $i++) {
        if($i % 77 == 0) {
            $html3 .= ' ' .$i .',';
        } 
    }
    $html3 = mb_substr($html3, 0, -1);
    print_r ($html3);
    echo '<hr>';
    /* 
    Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
            * * * * * * * * * * *
            * * * * * * * * * * *
            * * * * * * * * * * *
            * * * * * * * * * * *
            * * * * * * * * * * *
            * * * * * * * * * * *
            * * * * * * * * * * *

    */

    $html4 = '';
    $eilute = '';
    $stulpelis = '';
    $color = '';
    $c = 10;
    for($i = 0; $i < 10; $i++){


            if($i % 10 == 0 ){

                $color = 'color:red';
            } else {

                $color = 'color:black';
            }



        $eilute .= '<div style='."$color".';>*</div>';

    }
    for($j = 0; $j < 10; $j++){
        $stulpelis .='<div style="line-height:0.5; display:flex;">' ."$eilute </div>" ;
    }
    $html4 = '<div style="width:100px; height: 100px; background-color: yellow; display:flex; flex-direction:column; justify-content: center; align-items: center;">'."$stulpelis</div>";
    // $parent = '<div style="display:flex">'."$html4</div>";
    print_r ($html4);
    /* 
        Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

    */
    
    /* ----------------------------------------------------------------------------------*/

    /* 
    Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
    Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
    Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
    Iškritus herbui;
    Tris kartus iškritus herbui;
    Tris kartus iš eilės iškritus herbui;
    */
    $m = null;
    do {
        $stop = 0;
        $stop++;
        
        $res = '';
        $m = rand(0,1);
        if($m == 0){
            $res = 'H';
            echo 'H';
        } else {
            $res = 'S';
            echo 'S';
        }
    } while ($res = 'H');
