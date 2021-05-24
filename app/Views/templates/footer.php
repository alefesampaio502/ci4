 <footer class="main-footer">
        <div class="footer-center">
          <div class="text-center">
          <a href="#">Com muito <i class="fas fa-heart mr-2 text-danger"></i>CodeStatus</a><br>
          &copy - Sitemas <?= date('Y');?>
        </div>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/bundles/apexcharts/apexcharts.min.js');?>"></script>
  
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/index.js');?>"></script>
  <script src="<?php echo base_url('assets/js/page/chart-apexcharts.js');?>"></script>
  <script src="<?php echo base_url('assets/js/chart.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.mask.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/app.js');?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
  <script type="text/javascript">
     $('.delete').on("click", function(event){

       event.preventDefault();

       var choice = confirm($(this).attr('data-confirm'));

       if(choice) {
        window.location.href = $(this).attr('href');

       }

     });

  </script>
  
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>