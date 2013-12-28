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

class user
{
/*!
 *   load the userdata, i this version from an .htaccess file
 */

    private $userName;
    
/*!
 * construct this version of user
 */
    public function __construct(){
        $this->userName = $_SERVER['PHP_AUTH_USER'];
    }
    
/*!
 * retrun the user name as a String
 */
    public function getUserName(){
        return $this->userName;
    }
    
}


?>