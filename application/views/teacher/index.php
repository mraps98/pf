<?php

$this->load->view('includes/header.php');

$this->load->view('includes/side-bar.php');

$this->load->view('includes/top-bar.php');

?>
<script type='text/javascript' defer='defer'>
$(document).ready(function(){
    $('.nav-item').removeClass('active');
    $('#menu-teachers').addClass('active');
});
</script>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Teachers</h1>
          <p class="mb-4">
              <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add New</span>
                  </a>
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Current Teachers</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>DOB</th>
                      <th>Nationality</th>
                      <th>Date Enrolled</th>
                      <th>Department</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>DOB</th>
                      <th>Nationality</th>
                      <th>Date Enrolled</th>
                      <th>Department</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($teachers as $teacher){?>
                    <tr>
                      <td><?php echo $teacher['fname']." ".$teacher['midinit']." ".$teacher['lname'];?></td>
                      <td><?php echo $teacher['dob'];?></td>
                      <td><?php echo $teacher['nationality'];?></td>
                      <td><?php echo $teacher['date_joined'];?></td>
                      <td><?php echo $teacher['name'];?></td>
                      <td>
                          <a href=""><i class="fa fa-edit"></i></a>
                          <a href=""><i class="fa fa-edit"></i></a>
                          <a href=""><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php

$this->load->view('includes/footer.php');