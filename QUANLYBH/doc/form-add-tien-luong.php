<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Bản kê lương</li>
    <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Tạo mới bảng kê lương</h3>
      <div class="tile-body">
        <div class="row element-button">
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Tạo trạng thái mới</b></a>
          </div>

        </div>
        <form class="row">
          <div class="form-group col-md-3">
            <label class="control-label">Tên nhân viên</label>
            <input class="form-control" type="text" placeholder="nhập họ tên nhân viên">
          </div>
          <!--<div class="form-group col-md-3">
                  <label for="exampleSelect1" class="control-label">Giới tính</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>-- Chọn giới tính --</option>
                    <option>Nam</option>
                    <option>Nữ</option>
                  </select>
                </div>-->
          <div class="form-group col-md-3">
            <label for="exampleSelect1" class="control-label"> Chức vụ</label>
            <select class="form-control" id="exampleSelect1">
              <option>-- Chọn chức vụ --</option>
              <option>Bán hàng</option>
              <option>Tư vấn</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Tiền lương</label>
            <input class="form-control" type="text">
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Trừ lương</label>
            <input class="form-control" type="text">
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Tiền thưởng</label>
            <input class="form-control" type="text">
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Tổng nhận</label>
            <input class="form-control" type="text">
          </div>
          <div class="form-group col-md-3">
            <label for="exampleSelect1" class="control-label">Trạng thái</label>
            <select class="form-control" id="exampleSelect1">
              <option>-- Chọn trạng thái --</option>
              <option>Đã nhận tiền</option>
              <option>Chưa nhận tiền</option>
            </select>
          </div>


      </div>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" href="/doc/table-data-oder.html">Hủy bỏ</a>
    </div>