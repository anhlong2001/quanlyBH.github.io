<?php
    include_once '../configs/database_config.php';
    include_once '../models/user.php';


    class NhanVienService {
        private $connection;
        private $tblDB = "tblnhanvien";
        private $tblDB2 = "tblkhachhang";
        public function __construct()
        {
            $this->connection = (new DatabaseConfig())->getConnection();
        }

        public function getByTaiKhoan($taiKhoan, $matKhau)
        {
            try {
                $query = "SELECT id, tenNV, taiKhoan, matKhau, SDT, chucVu FROM " . $this->tblDB ." where (taiKhoan= :taiKhoan AND matKhau= :matKhau)";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(":taiKhoan", $taiKhoan);
                $stmt->bindParam(":matKhau", $matKhau);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $users = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $user = array(
                            "idNV" => $id,
                            "tenNV" => $tenNV,
                            "taiKhoan" => $taiKhoan,
                            "SDT" => $SDT,
                            "chucVu" => $chucVu,
                        );
                        array_push($users, $user);
                    }
                    return $user;
                }                
            } catch (Exception $e) {                
            }
            return null;
        }

        public function getByTaiKhoanKH($soDT, $matKhau)
        {
            try {
                $query = "SELECT id, tenKH, diaChi, soDT, matKhau FROM " . $this->tblDB2 ." where (soDT= :soDT AND matKhau= :matKhau)";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(":soDT", $soDT);
                $stmt->bindParam(":matKhau", $matKhau);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $users = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $user = array(
                            "id" => $id,
                            "tenKH" => $tenKH,
                            "diaChi" => $diaChi,
                            "matKhau" => $matKhau,
                        );
                        array_push($users, $user);
                    }
                    return $user;
                }                
            } catch (Exception $e) {                
            }
            return null;
        }

        public function insertNhanVien($tenNV, $taiKhoan, $SDT)
        {
            try {
                $query = "INSERT INTO " . $this->tblDB ." 
                        SET tenNV = :tenNV, taiKhoan = :taiKhoan, 
                        SDT=:SDT
                                        ";
                $stmt = $this->connection->prepare($query);

                $stmt->bindParam(":tenNV", $tenNV);
                $stmt->bindParam(":taiKhoan", $taiKhoan);
                $stmt->bindParam(":SDT", $SDT);

                $this->connection->beginTransaction();
                if ($stmt->execute()) {
                    $this->connection->commit();
                    return true;
                } else {
                    $this->connection->rollBack();
                    return false;
                }
            } catch (Exception $e) {                
            }
            return false;
        }

        public function insertKhachHang($tenKH, $diaChi, $matKhau, $soDT)
        {
            try {
                $query = "INSERT INTO " . $this->tblDB2 ." 
                        SET tenKH = :tenKH, diaChi = :diaChi, 
                        matKhau=:matKhau, soDT =:soDT
                                        ";
                $stmt = $this->connection->prepare($query);

                $stmt->bindParam(":tenKH", $tenKH);
                $stmt->bindParam(":diaChi", $diaChi);
                $stmt->bindParam(":matKhau", $matKhau);
                $stmt->bindParam(":soDT", $soDT);

                $this->connection->beginTransaction();
                if ($stmt->execute()) {
                    $this->connection->commit();
                    return true;
                } else {
                    $this->connection->rollBack();
                    return false;
                }
            } catch (Exception $e) {                
            }
            return false;
        }



    }
?>