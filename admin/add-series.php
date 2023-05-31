<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-E-Global Support</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include("header-links.php"); ?>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>

<?php include("header.php"); ?>

 <?php include("side-bar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Brand</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Brand</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">


        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brand Series Form</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <select class="form-select form-control" id="floatingSelect" aria-label="State">
                      <option selected>Laptop</option>
                      <option value="1">Tablet</option>
                      <option value="2">Option</option>
                      <option value="2">Mobile</option>
                      <option value="2">GPS</option>
                      <option value="2">WiFi</option>
                       <option value="2">Printer</option>
                    </select>
                    <label for="floatingSelect">Select Category</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <select class="form-select form-control" id="floatingSelect" aria-label="State">
                      <option selected>Dell</option>
                      <option value="1">HP</option>
                      <option value="2">Lenovo</option>
                      <option value="2">Acer</option>
                      <option value="2">Asus</option>
                      <option value="2">Microsoft</option>
                       <option value="2">Toshiba</option>
                       <option value="2">Apple</option>
                    </select>
                    <label for="floatingSelect">Select Brand</label>
                  </div>
                </div>
                <!--<div class="col-md-12">-->
                   
                <!--</div>-->
                
                <div class="col-md-12">
                   <div class="table table-responsive">
                        <table class="table table-responsive table-striped table-bordered">
                            <tbody id="TextBoxContainer">
                                <tr>
                                    <td class="col-md-11"><input name = "DynamicTextBox" type="text" value = "" class="form-control category-input" placeholder="Add Series" /></td>
                                   
                                    <td class="col-md-1 position_btn"><button type="button" class="btn remove"><img src="assets/img/trash.png" ></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="TextBoxContainer">
                    <button id="btnAdd" type="button" class="btn btn-success" data-toggle="tooltip" data-original-title="Add more controls"> <i class="fa fa-plus"></i> + Add Series </button>
                    </div>
                    
                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

 <?php include("footer.php"); ?>
 <script>

$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td class="col-md-11"><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control category-input" placeholder="Add Series" /></td>'+  '<td class="col-md-11 position_btn"><button type="button" class="btn remove"><img src="assets/img/trash.png" ></button></td>'
}
 </script>

</body>

</html>