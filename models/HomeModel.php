<?php

class HomeModel extends Model
{
    public function getHeadOfDepartmentData()
    {
        $sql = "SELECT * FROM users WHERE role = :role";
        $stmt = $this->db->query($sql, ['role' => 'kajur']);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
