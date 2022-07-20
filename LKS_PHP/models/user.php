<?php
    class User{
        private $idNV;
        private $tenNV;
        private $taiKhoan;
        private $matKhau;
        private $SDT;
        private $chucVu;
        
        function __construct($idNV, $taiKhoan, $tenNV, $matKhau, $SDT, $chucVu)
        {
            $this->idNV = $idNV;
            $this->tenNV = $tenNV;
            $this->taiKhoan = $taiKhoan;
            $this->matKhau = $matKhau;
            $this->SDT = $SDT;
            $this->chucVu = $chucVu;
        }

        public function getPassword()
        {
            return $this->matKhau;
        }
    }
?>