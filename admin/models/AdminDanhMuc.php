<?php 

class AdminDanhMuc
{
    public $conn;

    function __construct() {
        $this -> conn = connectDB();
    }

    function getAllDanhMuc() {
        $sql = 'select * from danh_muc_phongs';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    function InsertDanhMuc($ten_danh_muc, $mo_ta) {
        $sql = "insert into danh_muc_phongs (ten_danh_muc, mo_ta) values (:ten_danh_muc, :mo_ta)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':ten_danh_muc' => $ten_danh_muc,
            ':mo_ta' => $mo_ta
        ]);
    }

    function getOneDanhMuc($id) {
        $sql = 'select * from danh_muc_phongs where id = :id';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }

    function UpdateDanhMuc($id, $ten_danh_muc, $mo_ta) {
        $sql = "UPDATE danh_muc_phongs SET ten_danh_muc = :ten_danh_muc, mo_ta = :mo_ta WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':ten_danh_muc' => $ten_danh_muc,
            ':mo_ta' => $mo_ta
        ]);
    }

    function DeleteDanhMuc($id) {
        $sql = 'delete from danh_muc_phongs where id = :id';
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt->fetch();
    }
}