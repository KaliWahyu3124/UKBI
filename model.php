<?php
class Model extends Connection {
    public function get($query) {
        $data = [];
        $sql = $this->connect()->query($query);
        while ($row = $sql->fetch_object()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>

