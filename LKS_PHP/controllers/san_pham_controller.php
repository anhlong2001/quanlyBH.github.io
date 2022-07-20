<?php

    include_once '../services/san_pham_service.php';

    class SanPhamController {

        private $san_pham_service;
        public function __construct()
        {
            $this->san_pham_service = new SanPhamService();    
        }
        

        public function getSanPhamByTheLoai($idTheLoai)
        {
            return $this->san_pham_service->getSanPhamByTheLoai($idTheLoai);
        }
        
        public function getById($idSanPham)
        {
            return $this->san_pham_service->getById($idSanPham);
        }

        public function getImagesByIdSanPham($idSanPham)
        {
            return $this->san_pham_service->getImagesByIdSanPham($idSanPham);
        }

        public function getSanPhamKhuyenMai()
        {
            return $this->san_pham_service->getSanPhamKhuyenMai();
        }
        
    }
?>