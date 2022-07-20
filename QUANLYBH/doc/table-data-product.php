<div class="app-title">
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
  </ul>
  <div id="clock"></div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="row element-button">
          <div class="col-sm-2">

            <a class="btn btn-add btn-sm" href="index.php?page_layout=ThemSP" title="Thêm"><i class="fas fa-plus"></i>
              Tạo mới sản phẩm</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
          </div>
        </div>
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th width="10"><input type="checkbox" id="all"></th>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th width="60">Ảnh Sản phẩm</th>
              <th>Số lượng</th>
              <th>Tình trạng</th>
              <th>Giá tiền</th>
              <th>Danh mục</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="10"><input type="checkbox" name="check1" value="1"></td>
              <td>71309005</td>
              <td>Bàn ăn gỗ Theresa</td>
              <td><img class="img-card-person" src="/img-sanpham/ghethera.jpg" alt=""></td>
              <td>40</td>
              <td><span class="badge bg-success">Còn hàng</span></td>
              <td>5.600.000 đ</td>
              <td>Bàn ăn</td>
              <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                </button>
                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>

              </td>
            </tr>

            <!--<tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>83252001</td>
                                    <td>Giường ngủ Thomas</td>
                                    <td><img src="/img-sanpham/thomas.jpg" alt="" width="100px;"></td>
                                    <td>73</td>
                                     <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>12.950.000 đ</td>
                                    <td>Giường người lớn</td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                      
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>83252002</td>
                                    <td>Giường ngủ Jimmy</td>
                                    <td><img src="/img-sanpham/jimmy.jpg" alt="" width="100px;"></td>
                                    <td>60</td>
                                     <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>16.320.000 đ</td>
                                    <td>Giường người lớn</td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>83216008</td>
                                    <td>Giường ngủ Tara chân gỗ</td>
                                    <td><img src="/img-sanpham/tare.jpg" alt="" width="100px;"></td>
                                    <td>65</td>
                                     <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>19.600.000 đ</td>
                                    <td>Giường người lớn</td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>83216006</td>
                                    <td>Giường ngủ Kara 1.6x2m</td>
                                    <td><img src="/img-sanpham/kara.jpg" alt="" width="100px;"></td>
                                    <td>60</td>
                                     <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>14.500.000 đ</td>
                                    <td>Giường người lớn</td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                   
                                    </td>
                                </tr>-->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>