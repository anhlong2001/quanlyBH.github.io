<div class="app-title">
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
  </ul>
  <div id="clock"></div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">

        <div class="row element-button">
          <div class="col-sm-2">

            <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
              Tạo mới khách hàng</a>
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
        <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">
          <thead>
            <tr>
              <th width="10"><input type="checkbox" id="all"></th>
              <th>ID khách hàng</th>
              <th width="150">Họ và tên</th>
              <!--<th width="20">Ảnh thẻ</th>-->
              <th width="300">Địa chỉ</th>
              <th>Email</th>
              <!--<th>Giới tính</th>-->
              <th>SĐT</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="10"><input type="checkbox" name="check1" value="1"></td>
              <td>#CD12837</td>
              <td>Văn Đại</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_1.jpeg" alt=""></td>-->
              <td>Hồ Chí Minh </td>
              <td>0916456635</td>
              <td>daicute@gamil.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox" name="check2" value="2"></td>
              <td>#SX22837</td>
              <td>Khả Ái</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_2.jpg" alt=""></td>-->
              <td>Hồ Chí Minh</td>
              <td>0976706655</td>
              <td>aizero@gamil.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox" name="check3" value="3"></td>
              <td>#LO2871</td>
              <td>Cúc Phạm</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_3.jpg" alt=""></td>-->
              <td>Hồ Chí Minh </td>
              <td>0916706633</td>
              <td>phamcuc@gamil.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>#SR28746</td>
              <td>Khoa</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_4.jpg" alt=""></td>-->
              <td>Hồ Chí Minh </td>
              <td>0916706633</td>
              <td>dangkhoa@gmail.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>#KJS276</td>
              <td>Nhân Đẹp Trai</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_5.jpg" alt=""></td>-->
              <td>Hồ Chí Minh </td>
              <td>0971038066</td>
              <td>nhancute@gmail.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>#BS76228</td>
              <td>Yêu Nhân</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_6.jpg" alt=""></td>-->
              <td> Hồ Chí Minh </td>
              <td>0846881155</td>
              <td>nhandeptrai@gmail.com</td>

            </tr>
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>#YUI21376</td>
              <td>Xuân Hương</td>
              <!--<td><img class="img-card-person" src="/img-anhthe/plant_2.jpg" alt=""></td>-->
              <td>Hồ Chí Minh</td>
              <td>0836333037</td>
              <td>maihuong@gmail.com</td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>