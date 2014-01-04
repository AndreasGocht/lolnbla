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
 *   Load the names. This version of sendTo loads the names from a mysql DB.
 */

    private $names;
    
    private $user;
    
    private $db;
    
/*!
 * construct this version of sendTo
 */
    public function __construct($user){
        include('./config_mysql.php');
        $this->user = $user;
        
        $this->db = @new mysqli($mysqlServer, $mysqlUsername, $mysqlPassword, $mysqlDatabase);
        if (mysqli_connect_errno()) {
            die ('No connection to Database: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
        }
        $sql = "SELECT summenor_name,summenor_jid
                FROM sendTo
                WHERE user='".$this->user."';";
        $result = $this->db->query($sql);
        if (!$result) {
            die ('Qerry error: '.$this->db->error);
        }
        
        while($row = $result->fetch_assoc())
        {
            $names[$row['summenor_name']] = $row['summenor_jid'];
        }
        $this->names = $names;
        
    }
    
/*!
 * retrun the names in an array of the form:
 * array(summenor_name => summenor_jid)
 * the jid consist of sum[a Number]@pvp.net
 */
    public function getNames(){
        return $this->names;
    }
    
/*!
 * saves The names in the DB
 */
    public function saveNames($names){
        $this->names = $names;
                
        foreach($this->names as $name =>$sum_id)
        {
            $sql = "INSERT INTO sendTo(user,summenor_name,summenor_jid)
                    VALUES ('".$this->user."','$name','$sum_id');";
            $result = $this->db->query($sql);
            if (!$result) {
                die ('Qerry error: '.$this->db->error);
            }
        }
        return true;
    }

    
}


?>