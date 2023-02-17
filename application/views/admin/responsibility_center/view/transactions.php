<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 



</head>

<body>
   
    <!-- preloader area start -->
     <?php $this->load->view('includes/preloader.php') ?> 
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container  sbar_collapsed" >
      
        <div class="main-content ">
            <!-- header area start -->
             <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <span style="font-size:23px;">
                            <a href="<?php echo base_url() ?>responsibility_center" style="color: #000;">
                            <i class="fa fa-arrow-left"></i>
                            </a>
                        </span>
                   
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <a href="<?php echo base_url() ?>login" class="pull-right text-danger" style="font-size: 20px;">Logout</a>
                     
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner ">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card ">
                            <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="data-tables">
                                            <table id="responsibilitytable" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>Responsibilty Center Code</th>
                                                        <th>Responsibility Center</th>
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                               
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">                                     
                                            <h4 class="header-title">Add Responsibilty Center</h4>
                                                <form id="add_responsibility_center_form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Responsibilty Center Code</label>
                                                            <input  type="number" class="form-control" id="res_code" name="res_code"  placeholder="" required>      
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Responsibilty Center Name</label>
                                                            <input type="text" class="form-control" id="center_name" name="center_name" placeholder="" required>
                                                    </div>
                                                    <button  type="submit" class="btn btn-primary mt-1 pr-4 pl-4 btn-add-center"> Submit</button>
                                                    
                                                    <div class="alert"></div>
                                                   <!--  -->
                                                </form>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
       
  
     <?php $this->load->view('includes/scripts.php') ?> 
   
</body>

</html>
