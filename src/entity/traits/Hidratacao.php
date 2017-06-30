<?php

namespace entity\traits;

trait Hidratacao {

    public function salvar(\PDO $dbh) {
        $object_vars = get_object_vars($this);
        $table_name = $this->getClassName();
        $dml = "INSERT INTO " . $table_name;
        array_shift($object_vars);
        $array_keys = array_keys($object_vars);
        $array_values = array_values($object_vars);
        $attr = "";
        $param = "";

        foreach ($array_keys as $value) {
            if ($attr != "") {
                $attr .= ", " . $value;
                $param .= ", ?";
            } else {
                $attr .= $value;
                $param .= "?";
            }   
        }
        
        $dml.= " (".$attr.") VALUES (".$param.")";
        $stmt= $dbh->prepare($dml);
        
        for ($index = 0; $index < count($array_values); $index++) {
            $stmt->bindParam($index + 1, $array_values[$index]);
        }
       $stmt->execute();
    }

    private function getClassName() {
        $array = explode('\\', __CLASS__);
        return strtoupper($array[sizeof($array) - 1]);
    }

}
