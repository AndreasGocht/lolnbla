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
    <form action="lolSaveUser.php" method="post">
        <textarea name="names" cols="50" rows="10">
<?php
            include("includes.php");
            
            $names = $sendTo->getNames();
            
            foreach($names as $name => $sum_id)
            {
                echo("$name;$sum_id\n");
            }
?></textarea><br />
        <input type="submit" value="Speichern">
    </form>
</body>
</html>
