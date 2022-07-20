<?php

    include_once '../services/nhan_vien_service.php';
    //include_once '../models/user.php';

    class NhanVienController {

        private $nhan_vien_service;
        public function __construct()
        {
            $this->nhan_vien_service = new NhanVienService();    
        }
        
        public function login($taiKhoan, $matKhau)
        {
            $user = $this->nhan_vien_service->getByTaiKhoan($taiKhoan, $matKhau);
            
            if ($user) {
                return $user;
                
            }
            return false;
        }

        public function loginKH($soDT, $matKhau)
        {
            $user = $this->nhan_vien_service->getByTaiKhoanKH($soDT, $matKhau);
            
            if ($user) {
                return $user;
                
            }
            return false;
        }

        public function insertKhachHang($tenKH, $diaChi, $matKhau, $soDT)
        {
            return $this->nhan_vien_service->insertKhachHang($tenKH, $diaChi, $matKhau, $soDT);
            
        }

        public function insertNhanVien($tenNV, $taiKhoan, $SDT)
        {
            return $this->nhan_vien_service->insertNhanVien($tenNV, $taiKhoan, $SDT);
            
        }

        
        
        
    }
?>