<?php include './views/layout/header.php'; ?>
  <!-- Navbar -->
  <?php include './views/layout/navbar.php'; ?>
  <!-- /.navbar -->
  <?php include './views/layout/sidebar.php'; ?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh sách phòng</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm phòng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= BASE_URL_ADMIN . '?act=insertphong'?>" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-12">
                    <label>Tên phòng</label>
                    <input type="text" class="form-control" name="ten_phong" placeholder="Nhập tên phòng">
                    <?php if(isset($_SESSION['error']['ten_phong'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['ten_phong'] ?></p>
                    <?php } ?>
                  </div>

                  <div class="form-group col-6">
                    <label>Giá phòng</label>
                    <input type="number" class="form-control" name="gia_phong" placeholder="Nhập giá phòng">
                    <?php if(isset($_SESSION['error']['gia_phong'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['gia_phong'] ?></p>
                    <?php } ?>
                  </div>    

                  <div class="form-group col-6">
                    <label>Hình ảnh phòng</label>
                    <input type="file" class="form-control" name="hinh_anh">
                    <?php if(isset($_SESSION['error']['hinh_anh'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['hinh_anh'] ?></p>
                    <?php } ?>
                  </div>    

                  <div class="form-group col-6">
                    <label>Album ảnh phòng</label>
                    <input type="file" class="form-control" name="img_arr[]" multiple>
                  </div>    

                  <div class="form-group col-6">
                    <label>Danh mục</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="danh_muc_id">
                      <option selected disabled>Chọn danh mục phòng</option>
                      <?php foreach($listdanhmuc as $danhmuc){ ?>
                        <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['ten_danh_muc']?></option>
                      <?php } ?>
                    </select>
                    <?php if(isset($_SESSION['error']['danh_muc_id'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['danh_muc_id'] ?></p>
                    <?php } ?>
                  </div>

                  <div class="form-group col-12">
                    <label>Mô tả</label>
                    <textarea type="text" class="form-control" name="mo_ta" placeholder="Nhập mô tả"></textarea>
                  </div>
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insertCate">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './views/layout/footer.php'; ?>
<!-- Code injected by live-server -->

</body>
</html>
