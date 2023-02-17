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
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php $this->load->view('includes/sidebar.php') ?> 
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php $this->load->view('includes/topbar.php') ?> 
            <!-- header area end -->
            <!-- page title area start -->
            <?php $this->load->view('includes/breadcrumbs.php') ?> 
            <!-- page title area end -->
            <div class="main-content-inner">


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card" style="border: 1px solid;">
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="header-title"><?php echo $title ?></h4>
                                    </div>
                                    <div class="col-md-6">
                                         <button class="btn btn-primary pull-right mb-2">Add</button>
                                    </div>
                                </div>    -->
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="data-tables">
                                            <table id="responsible_section_table" style="width:100%" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th>Type</th>
                                                       <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                               
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">                                     
                                            <h4 class="header-title">Add <?php echo $title;?></h4>
                                                <form id="add_responsible_section_form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Responsible Section</label>
                                                            <input  type="text" class="form-control" id="responsible_section" name="responsible_section"  placeholder="" required>      
                                                    </div>

                                              
                                                    <button  type="submit" class="btn btn-primary mt-1 pr-4 pl-4 btn-add-responsible"> Submit</button>
                                                    
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
        <!-- footer area start-->
    <?php $this->load->view('admin/responsible_section/modal/update_responsible_section.php') ?> 
    <?php $this->load->view('includes/offset.php') ?>  
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
  
    <?php $this->load->view('includes/offset.php') ?> 
     <?php $this->load->view('includes/scripts.php') ?> 
   
</body>

</html>
