<?php

require_once('src/lib/database.php');
require_once('src/model/desert.php');

use App\Model\desert\DesertRepository;

function desert(string $identifier)
    {
        $connection= new DatabaseConnection();

        $desertRepository= new DesertRepository;
        $desertRepository->connect=$connection;
        $desert=$desertRepository -> getDeserts();


    }