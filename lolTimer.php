<!DOCTYPE HTML>
<html>
<!--
/*This file is part of lolnbla.

lolnbla is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

lolnbla is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with lolnbla.  If not, see <http://www.gnu.org/licenses/>.
*/
-->
<head>
        <meta name="viewport" content="width=320, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<?php
    include("config.php");

    include("XMPPHP/XMPP.php");
    include("includes.php");
    
    $user_name = $user->getUserName();
    
    
    /*
    Servers:
    NA:     chat.na1.lol.riotgames.com
    EU:W    chat.eu.lol.riotgames.com
    EU:NE   chat.eun1.lol.riotgames.com
    */
    $conn = new XMPPHP_XMPP('chat.eu.lol.riotgames.com', 5223, $sumName, "AIR_$sumPassword", 'xiff', 'pvp.net', $printlog=false, $loglevel=XMPPHP_Log::LEVEL_INFO);
    
    try {
        $conn->connect();

        $conn->processUntil('session_start');
        
        $names = $sendTo->getNames();
        foreach($names as $name =>$sum_id)
        {
            $conn->message($sum_id, "User ".$user_name." in in ".$_POST['zeit']." online");
            echo "Nachricht an $name($sum_id) gesendet<br />\n";
        }
    
        
        $conn->disconnect();  
        echo "Nachrichten Gesendet<br />\n";
    } catch(XMPPHP_Exception $e) {
        die($e->getMessage());
    }

?>
<a href=index.php>back</a>
</body>
</html>