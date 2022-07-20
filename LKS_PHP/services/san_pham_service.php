<?php
    include_once '../configs/database_config.php';


    class SanPhamService {
        private $connection;
        private $tblDB = "tblsanpham";
        private $tblDB2 = "tblimage";

        public function __construct()
        {
            $this->connection = (new DatabaseConfig())->getConnection();
        }


        public function getSanPhamByTheLoai($idTheLoai)
        {
            try {
                $query = "SELECT id, idTheLoai, idCompany, tenSP, donGia, moTa, trangThaiSP FROM " . $this->tblDB ." where (idTheLoai= :idTheLoai AND trangThaiSP= 0)";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(":idTheLoai", $idTheLoai);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $products = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $product = array(
                            "id" => $id,
                            "idTheLoai" => $idTheLoai,
                            "idCompany" => $idCompany,
                            "tenSP" => $tenSP,
                            "donGia" => $donGia,
                            "moTa" => $moTa,
                        );
                        array_push($products, $product);
                    }
                    return $products;
                }                
            } catch (Exception $e) {                
            }
            return null;
        }

        public function getById($idSanPham)
        {
            try {
                $query = "SELECT id, idTheLoai, idCompany, tenSP, donGia, moTa, trangThaiSP FROM " . $this->tblDB ." where (id= :idSanPham AND trangThaiSP= 0)";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(":idSanPham", $idSanPham);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $product = array(
                            "id" => $id,
                            "idTheLoai" => $idTheLoai,
                            "idCompany" => $idCompany,
                            "tenSP" => $tenSP,
                            "donGia" => $donGia,
                            "moTa" => $moTa,
                        );
                    }
                    return $product;
                }                
            } catch (Exception $e) {                
            }
            return null;
        }

        public function getImagesByIdSanPham($idSanPham)
        {
            try {
                $query = "SELECT id, idSanPham, imgUrl FROM " . $this->tblDB2 ." where idSanPham= :idSanPham ";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(":idSanPham", $idSanPham);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $products = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $product = array(
                            "id" => $id,
                            "imgUrl" => $imgUrl,
                        );
                        array_push($products, $product);
                    }
                    return $products;
                }                
            } catch (Exception $e) {                
            }
            return null;
        }

        public function getSanPhamKhuyenMai()
        {
            try {
                $query = "SELECT tblsanpham.id, tblsanpham.tenSP, tblsanpham.donGia, tblsanpham.moTa, tblvoucher.discount
                FROM tblsanpham
                INNER JOIN tblvoucher ON tblsanpham.id = tblvoucher.idSanPham ";
                //where tblsanpham.id= :idSanPham";

                $stmt = $this->connection->prepare($query);
                //$stmt->bindParam(":idSanPham", $idSanPham);
                
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $products = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $product = array(
                            "id" => $id,
                            "tenSP" => $tenSP,
                            "donGia" => $donGia,
                            "moTa" => $moTa,
                            "discount" => $discount,
                        );
                        array_push($products, $product);
                    }
                    return $products;
                }                
            } catch (Exception $e) {                
            }
            return $e;
        }


    }
?>