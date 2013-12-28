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

class sendTo
{
/*!
 *   Load the names. This version of sendTo loads the names from a json file.
 */

    private $names;
    
    private $filename;
    
/*!
 * construct this version of sendTo
 */
    public function __construct($filename){
        $this->names = json_decode(file_get_contents($filename));
        $this->filename = $filename;
    }
    
/*!
 * retrun the names in an array of the form:
 * array(summenor_name => summenor_jid)
 * the jid consist of sum[a Number]@pvp.net
 */
    public function getNames(){
        return $this->names;
    }
    
    public function saveNames($names){
        $this->names = $names;
        return file_put_contents($this->filename,json_encode($names));
    }

    
}


?>