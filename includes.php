<?php
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

/*!
 *This File includes all necesarray Files, so its easy to exchange them.
 */

 
//  sendTo with Text files
    include("sendTo.php");
    include("user.php");

    $user = new user();
    $sendTo = new sendTo("./users");
    
    
//  sendTo with mysql
//     include("sendTo_Mysql.php");
//     include("user.php");
// 
//     $user = new user();
//     $sendTo = new sendTo($user->getUserName());

 
?>