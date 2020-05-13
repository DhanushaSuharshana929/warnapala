<?php



/**

 * Description of TourTypes

 *

 * @author U s E r Â¨

 */

class ExcursionType {



    public $id;

    public $name;

    public $short_description;

    public $description;

    public $image_name;

    public $sort;



    public function __construct($id) {

        if ($id) {



            $query = "SELECT * FROM `excursion_type` WHERE `id`=" . $id;



            $db = new Database();



            $result = mysql_fetch_array($db->readQuery($query));



            $this->id = $result['id'];

            $this->name = $result['name'];

            $this->short_description= $result['short_description'];

            $this->description= $result['description'];

            $this->image_name = $result['image_name'];

            $this->sort = $result['sort'];



            return $this;

        }

    }



    public function create() {



        $query = "INSERT INTO `excursion_type` (`name`,`short_description`,`image_name`,`description`,`sort`) VALUES  ('"
     
                . $this->name . "', '"

                . $this->short_description . "', '"

                . $this->image_name . "', '"

                . $this->description . "', '"

                . $this->sort . "')";

  

        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            $last_id = mysql_insert_id();



            return $this->__construct($last_id);

        } else {

            return FALSE;

        }

    }



    public function all() {



        $query = "SELECT * FROM `excursion_type` ORDER BY sort ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);

        }



        return $array_res;

    }



    public function update() {



        $query = "UPDATE  `excursion_type` SET "

                . "`name` ='" . $this->name . "', "

                . "`short_description` ='" . $this->short_description . "', "

                . "`image_name` ='" . $this->image_name . "', "

                . "`description` ='" . $this->description . "', "

                . "`sort` ='" . $this->sort . "' "

                . "WHERE `id` = '" . $this->id . "'";



        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            return $this->__construct($this->id);

        } else {

            return FALSE;

        }

    }



    public function delete() {
 

        $query = 'DELETE FROM `excursion_type` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);

    }



    public function GetTourTypeById($id) {



        $query = "SELECT * FROM `excursion_type` WHERE `id` = '" . $id . "' ORDER BY `sort` ASC";



        $db = new Database();



        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);

        }



        return $array_res;

    }



    public function arrange($key, $img) {

        $query = "UPDATE `excursion_type` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;

    }



}

