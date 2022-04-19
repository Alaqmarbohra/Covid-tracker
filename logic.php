<?php
    $jsond=file_get_contents("https://pomber.github.io/covid19/timeseries.json");
    $data=json_decode($jsond,TRUE);

    foreach($data as $key=>$value){
        $dcount=count($value)-1;
    }
    $cof_count=0;
    $death_count=0;
    $rec_count=0;
    foreach($data as $key=>$value){
        $cof_count=$cof_count+$value[$dcount]['confirmed'];
        $death_count=$death_count+$value[$dcount]['deaths'];
        $rec_count=$rec_count+$value[$dcount]['recovered'];
    }
?>