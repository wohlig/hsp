<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");
class dine_model extends CI_Model {
    public function create($name, $hours, $location, $isfeatured, $isnew, $description, $json, $logo, $categoryfordine, $amenity, $email, $contactno, $facebook, $twitter, $instagram, $googleplus, $image, $specialoffer, $specialofferimage, $floor, $duration) {
        $data = array("name" => $name, "hours" => $hours, "location" => $location, "isfeatured" => $isfeatured, "isnew" => $isnew, "description" => $description, "email" => $email, "contactno" => $contactno, "facebook" => $facebook, "twitter" => $twitter, "instagram" => $instagram, "googleplus" => $googleplus, "floor" => $floor, "image" => $image, "specialoffer" => $specialoffer, "specialofferimage" => $specialofferimage, "json" => $json, "duration" => $duration, "logo" => $logo);
        $query = $this->db->insert("hsp_dine", $data);
        $id = $this->db->insert_id();
        foreach ($categoryfordine AS $key => $value) {
            $this->dine_model->createdinecategory($value, $id);
        }
        foreach ($amenity AS $key => $value) {
            $this->dine_model->createdineamenity($value, $id);
        }
        if (!$query) return 0;
        else return $id;
    }
    public function createdinecategory($value, $dineid) {
        $data = array('category' => $value, 'dine' => $dineid);
        $query = $this->db->insert('dinecategory', $data);
        return 1;
    }
    public function createdineamenity($value, $dineid) {
        $data = array('amenity' => $value, 'dine' => $dineid);
        $query = $this->db->insert('dineamenity', $data);
        return 1;
    }
    public function beforeedit($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("hsp_dine")->row();
        return $query;
    }
    public function getsingledine($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("hsp_dine")->row();
        return $query;
    }
    function getsingledineimages($id) {
        $images = $this->db->query("SELECT * FROM `dineimage` WHERE `dine`='$id'")->result();
        return $images;
    }
    public function edit($id, $name, $hours, $location, $isfeatured, $isnew, $description, $json, $logo, $categoryfordine, $amenity, $email, $contactno, $facebook, $twitter, $instagram, $googleplus, $image, $specialoffer, $specialofferimage, $floor, $duration) {
        $data = array("name" => $name, "hours" => $hours, "location" => $location, "isfeatured" => $isfeatured, "isnew" => $isnew, "description" => $description, "email" => $email, "contactno" => $contactno, "facebook" => $facebook, "twitter" => $twitter, "instagram" => $instagram, "googleplus" => $googleplus, "floor" => $floor, "image" => $image, "specialoffer" => $specialoffer, "specialofferimage" => $specialofferimage, "json" => $json, "duration" => $duration, "logo" => $logo);
        $this->db->where("id", $id);
        $query = $this->db->update("hsp_dine", $data);
        $querydelete = $this->db->query("DELETE FROM `dinecategory` WHERE `dine`='$id'");
        $querydeleteamenity = $this->db->query("DELETE FROM `dineamenity` WHERE `dine`='$id'");
        foreach ($categoryfordine AS $key => $value) {
            $this->dine_model->createdinecategory($value, $id);
        }
        foreach ($amenity AS $key => $value) {
            $this->dine_model->createdineamenity($value, $id);
        }
        return 1;
    }
    public function delete($id) {
        $query = $this->db->query("DELETE FROM `hsp_dine` WHERE `id`='$id'");
        return $query;
    }
    public function getdinelogobyid($id) {
        $query = $this->db->query("SELECT `logo` FROM `hsp_dine` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getdineimagebyid($id) {
        $query = $this->db->query("SELECT `image` FROM `hsp_dine` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getdinespecialofferimagebyid($id) {
        $query = $this->db->query("SELECT `specialofferimage` FROM `hsp_dine` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getcategoryfordinebydine($id) {
        $return = array();
        $query = $this->db->query("SELECT `id`,`dine`,`category` FROM `dinecategory`  WHERE `dine`='$id'");
        if ($query->num_rows() > 0) {
            $query = $query->result();
            foreach ($query as $row) {
                $return[] = $row->category;
            }
        }
        return $return;
    }
    public function getamenitybydine($id) {
        $return = array();
        $query = $this->db->query("SELECT `id`,`dine`,`amenity` FROM `dineamenity`  WHERE `dine`='$id'");
        if ($query->num_rows() > 0) {
            $query = $query->result();
            foreach ($query as $row) {
                $return[] = $row->amenity;
            }
        }
        return $return;
    }
    public function getall() {
        $query = $this->db->query("SELECT * FROM `hsp_dine`")->result();
        return $query;
    }
    public function getdinerbyletter($l) {
        $query = $this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE '$l'%")->result();
        return $query;
    }
    public function getbrandbysearch($l) {
        $query = $this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE %'$l'%")->result();
        return $query;
    }
    public function getbrandbycategory($cat) {
        $query = $this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE %'$l'%")->result();
        return $query;
    }
    public function getdinerbyammenity($a) {
        $query = $this->db->query("SELECT `hsp_dine`.`logo`,`hsp_dine`.`name`,`hsp_dine`.`hours`,`amenity`.`id` FROM `amenity` INNER JOIN `hsp_dine` ON ``")->result();
        return $query;
    }
    public function getdinerbyfilter($alph, $search, $category, $amenity1, $amenity2, $amenity3, $amenity4, $first) {
        $totalnum = 6;
        $selectfields = " `hsp_dine`.`id` AS `id`,`hsp_dine`.`name` AS `name`,`hsp_dine`.`hours` AS `hours`,`hsp_dine`.`location` AS `location`,`hsp_dine`.`logo` AS `logo`,`hsp_dine`.`isfeatured` AS `isfeatured`, `hsp_dine`.`isnew` AS `isnew`";
        $amselect = "";
        $aminnerjoin = "";
        $amwhere = "";
        $amhaving = "";
        $amcount = 0;
        if (($amenity1 + $amenity2 + $amenity3 + $amenity4) > 0) {
            $amselect = ",count(distinct `dineamenity`.`amenity`) as `amu` ";
            $aminnerjoin = " INNER JOIN `dineamenity` ON `dineamenity`.`dine` = `hsp_dine`.`id` ";
            $amwhere = " AND (";
            $amhaving = "HAVING `amu` = 1";
        };
        if ($amenity1 != 0) {
            $amwhere = "$amwhere `dineamenity`.`amenity` = 1";
            $amcount = $amcount + 1;
        };
        if ($amenity2 != 0) {
            if ($amcount > 0) {
                $amwhere = "$amwhere OR `dineamenity`.`amenity` = 2";
            } else {
                $amwhere = "$amwhere `dineamenity`.`amenity` = 2";
            };
            $amcount = $amcount + 1;
        };
        if ($amenity3 != 0) {
            if ($amcount > 0) {
                $amwhere = "$amwhere OR `dineamenity`.`amenity` = 3";
            } else {
                $amwhere = "$amwhere `dineamenity`.`amenity` = 3";
            };
            $amcount = $amcount + 1;
        };
        if ($amenity4 != 0) {
            if ($amcount > 0) {
                $amwhere = "$amwhere OR `dineamenity`.`amenity` = 4";
            } else {
                $amwhere = "$amwhere `dineamenity`.`amenity` = 4";
            };
            $amcount = $amcount + 1;
        };
        if (($amenity1 + $amenity2 + $amenity3 + $amenity4) > 0) {
            $amwhere = "$amwhere )";
            $amhaving = "HAVING `amu` = '$amcount'";
        };
        $filtercat = "";
        if ($category != "") {
            $filtercat = "AND `dinecategory`.`category`='$category'";
        }
        if ($alph != "") {
            if ($alph == "#") {
                $query = $this->db->query("SELECT $selectfields FROM `hsp_dine` INNER JOIN `dinecategory` ON `hsp_dine`.`id`=`dinecategory`.`dine` WHERE `hsp_dine`.`name` regexp '^[0-9]+' $filtercat GROUP BY `hsp_dine`.`id` LIMIT $first,$totalnum")->result();
            } else {
                $query = $this->db->query("SELECT $selectfields FROM `hsp_dine` INNER JOIN `dinecategory` ON `hsp_dine`.`id`=`dinecategory`.`dine` WHERE `hsp_dine`.`name` LIKE '$alph%' $filtercat GROUP BY `hsp_dine`.`id` LIMIT $first,$totalnum")->result();
            }
        } else {
            $q = "SELECT $selectfields $amselect FROM `dinecategory` INNER JOIN `hsp_dine` ON `dinecategory`.`dine` = `hsp_dine`.`id` $aminnerjoin WHERE `hsp_dine`.`name` LIKE '%$search%' $filtercat $amwhere GROUP BY `hsp_dine`.`id` $amhaving LIMIT $first,$totalnum";
            $query = $this->db->query("SELECT $selectfields $amselect FROM `dinecategory` INNER JOIN `hsp_dine` ON `dinecategory`.`dine` = `hsp_dine`.`id` $aminnerjoin WHERE `hsp_dine`.`name` LIKE '%$search%' $filtercat $amwhere GROUP BY `hsp_dine`.`id` $amhaving LIMIT $first,$totalnum")->result();
        };
        return $query;
    }
}
?>
