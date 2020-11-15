<?php
    require 'vendor\autoload.php'; 
    $client = new MongoDB\Client;
    $companydb = $client->hrmis;
    // Enter collection name here
    $empcollection = $companydb->training_lecture;
    $time = date("h.i.sa");
    $date = date("Y.m.d");
    mkdir("uploads/");
    //mkdir("../upload/".$time."--".$date);
    //$target_dir = "../upload/".$time."--".$date;
    $target_dir = "upload/";
    if(isset($_POST["submit"])){
        $communicationSkill = $target_dir . basename($_FILES["communicationSkill"]["name"]).$date."__".$time;
        move_uploaded_file($_FILES["communicationSkill"]["tmp_name"], $communicationSkill);
        move_uploaded_file($_FILES["iso90012015"]["tmp_name"], $iso90012015);
        move_uploaded_file($_FILES["ems140012015"]["tmp_name"], $ems140012015);
        move_uploaded_file($_FILES["fives"]["tmp_name"], $fives);
        move_uploaded_file($_FILES["productApplicationKnowledge"]["tmp_name"], $productApplicationKnowledge);
        move_uploaded_file($_FILES["productKnowledge"]["tmp_name"], $productKnowledge);
        move_uploaded_file($_FILES["erpKnowledge"]["tmp_name"], $erpKnowledge);

        $empcollection->insertOne(array("communicationSkill" => $communicationSkill,
            "iso90012015" => $iso90012015,
            "ems140012015" => $ems140012015,
            "fives" => $fives,
            "productApplicationKnowledge" => $productApplicationKnowledge,
            "productKnowledge" => $productKnowledge,
            "erpKnowledge" => $erpKnowledge
    ));
    }
?>