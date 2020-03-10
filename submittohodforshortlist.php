<?php
require 'vendor\autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->hrmis;
$empcollection = $companydb->requisition;

    if (isset($_GET['req'])){
        $reqid=$_GET['req'];
        $d=date("Y/m/d");
        $updateResult = $empcollection->updateOne(
            ['unique_id' => $reqid],
            ['$set' => ['status' => 'resume uploaded','dateofhrshortlist'=>$d]]
        );
    }
    header('Location:open_positions.php');
?>