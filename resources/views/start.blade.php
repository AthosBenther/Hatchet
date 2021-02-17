<?php

use App\Services\HatchetListener;

//echo 'starting';

$serverName=env('SERVER_NAME');
//Server files location
$serverLocation=env('SERVER_LOCATION ') ;
//Server Port
$serverPort=4321;
//Server config
$serverConfig=env('SERVER_CONFIG ');
//Server profile folder
$serverProfiles=env('SERVER_PROFILES');
//Logical CPU cores to use (Equal or less than available)
$serverCPU=env('SERVER_CPU');
//mods (@modName;@anotherModname;@mod)
$mods='@CF;@VPPAdminTools;@Community-Online-Tools';

$params = '-config='.$serverConfig.' -port='.$serverPort.' -profiles='.$serverProfiles.' -cpuCount='.$serverCPU.' -dologs -adminlog -netlog -freezecheck';

echo $params;

dd(HatchetListener::Start($params));
