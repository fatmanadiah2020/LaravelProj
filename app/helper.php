<?php

function getNotReadMessages(){

    $contactInfoRead= \App\Model\contactInfo1::where('isRead',0)->count();


    return $contactInfoRead;

}


function getNotReadMessages1(){

    $contactInfoRead= \App\Model\Messages1::where('isReplayRead',0)->count();

    return $contactInfoRead;

}


?>
