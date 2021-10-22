<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello.</title>
  </head>
  <body>
  
  <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               
                <form action="process-sua.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id</label>
                        <input name="id" type="text" class="form-control" id="exampleInputName" value="<?php echo $_GET['id'] ?>">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên bệnh nhân</label>
                        <input name="firstname" type="text" class="form-control" id="exampleInputName" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập tên</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ bệnh nhân</label>
                        <input name="lastname" type="text" class="form-control" id="exampleInputName" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập họ</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input name="deteofbirth" type="text" class="form-control" id="exampleInput" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập ngày sinh</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giới tính</label>
                        <input name="gender" type="text" class="form-control" id="exampleInput" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập giới tính</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số điện thoại</label>
                        <input name="mobile" type="text" class="form-control" id="exampleInput" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập số điện thoại</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chiều cao</label>
                        <input name="height" type="text" class="form-control" id="exampleInput" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập chiều cao</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Cân nặng</label>
                        <input name="weight" type="text" class="form-control" id="exampleInput" value="">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập cân nặng</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Nhóm máu</label>
                        <input name="blood_type" type="number" class="form-control" id="exampleInput">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập nhóm máu</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Ngày lập sổ</label>
                        <input name="created_on" type="text" class="form-control" id="exampleInput">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập ngày lập sổ</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Ngày cập nhật</label>
                        <input name="modified_on" type="text" class="form-control" id="exampleInput">
                        <small id="emailHelp" class="form-text text-muted">Mời nhập ngày cập nhật</small>
                    </div>
                    <button name="btsua" type="submit" class="btn btn-primary" style="margin-top:15px">sua</button>
                </form>
            </div>
            
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>