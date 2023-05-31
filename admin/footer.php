  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Slider</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="app/home_controller.php" method="POST" enctype="multipart/form-data" >
            <div class="form-feild">
                <label class="text-white">Choose Image</label>
                <input type="file" class="form-control mt-2" name="image[]">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Heading</label>
                <input type="text" class="form-control mt-2" name="heading">
            </div>
             <div class="form-feild mt-3">
                <label class="text-white">Sub Heading</label>
                <input type="text" class="form-control mt-2" name="sub_heading">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Shop Button Link</label>
                <input type="url" class="form-control mt-2" name="url">
            </div>
            <button type="submit" id="addSlider" name="addHcip" value="index_slide" class="d-none">Add Slider</button>
            </form>
      </div>
      <div class="modal-footer">
        
        <label for="addSlider" class="btn bn-sm bg-light text-dark">Add Slider</label>
      </div>
</div>
  </div>
</div>
  
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">All rights reserved by E-Global Support |
    </div>
    <div class="credits">
     Designed By
<a href="https://zonewebsites.us/"> Zonewebsites</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=asset('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/chart.js/chart.umd.js')?>"></script>
  <script src="<?=asset('assets/vendor/echarts/echarts.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/quill/quill.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
  <script src="<?=asset('assets/vendor/tinymce/tinymce.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?=asset('assets/js/main.js')?>"></script>