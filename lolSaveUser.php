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
    include("sendTo.php");
            
    $sendTo = new sendTo("./users");

    $rows = explode("\r\n",$_POST['names']);
    foreach($rows as $row)
    {
        if(strpos($row,';') !== false)
        {
            $tmp = explode(';',$row);
            $names[$tmp[0]] = $tmp[1];
        }
        
    }
    if($sendTo->saveNames($names) !== false)
    {
        echo "Users Saved<br />";
    }else{
        echo "something went wrong<br />";
    }
?>
<a href=index.php>back</a>
</body>
</html>