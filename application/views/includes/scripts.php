 <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
      <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <!-- <script src="assets/js/scripts.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.min.js" integrity="sha512-KfbhdnXs2iEeelTjRJ+QWO9veR3rm6BocSoNoZ4bpPIZCsE1ysIRHwV80yazSHKmX99DM0nzjoCZjsjNDE628w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script type="text/javascript">




      var base_url = '<?php echo base_url(); ?>';
         
(function($) {
    "use strict";


   

      /*================================
    Login 
    ==================================*/

     $('#login_form').on('submit', function(e) {
    e.preventDefault();

        // window.location.href = 'dashboard';

         $.ajax({
            type: "POST",
            url: base_url + 'Login/verify',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {

                    
                    $('#form_submit').html('<span class="loader"></span>');
                    $('#form_submit').attr('disabled','disabled');
                   
            },
            success: function(data)
            {            

                if (data.response) {

                   if (data.res) {

                         window.location.href = '<?php echo base_url() ?>';
                            
                   }else {

                  

                     Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    $("#form_submit").removeAttr('disabled');
                    $('#form_submit').text('Login');
                    $('#form_submit').remove('<span class="loader"></span>');
                    


                   }
                }else {

                   
                    Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    $("#form_submit").removeAttr('disabled');
                    $('#form_submit').text('Login');
                    $('#form_submit').remove('<span class="loader"></span>');
                    

                }
            }

        })
    })





      /*================================
    Responsibility Center
    ==================================*/

    //Datatable

    // if ($('#responsibility_table').length) {
   var res_center_table = $('#responsibility_table').DataTable({
            responsive: false,
            "ajax" : {
                        "url": base_url + 'Responsibility_center/get_center',
                        "dataSrc": "",
            },
             'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;" >'+data['res_center_code']+'</span>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span href="javascript:;"   data-id="'+data['res_center_id']+'" id="kt_explore_toggle" style="color: #000;" >'+data['res_center_name']+'</span>';
                }

            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<ul class="d-flex justify-content-center">\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['res_center_id']+'" data-name="'+data['res_center_name']+'" data-code="'+data['res_center_code']+'" id="update-center"><i class="fa fa-edit"></i></a></li>\
                                <li><a href="javascript:;" data-id="'+data['res_center_id']+'"  id="delete-center"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>\
                                </ul>';
                }

            },
          ]
        });




    // }




   //Add Responsibility Center

    $('#add_responsibility_center_form').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
            type: "POST",
            url: base_url + 'Responsibility_center/add',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-add-center').text('Please wait...');
                $('button[type="submit"]').attr('disabled','disabled');
            },
            success: function(data)
            {            
                if (data.response) {
                    $('#add_responsibility_center_form')[0].reset();
                    $('.btn-add-center').text('Submit');
                    $('button[type="submit"]').removeAttr('disabled');
                     $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                      
                    res_center_table.ajax.reload();
                }else {
                    $('.btn-add-center').text('Submit');
                     $('button[type="submit"]').removeAttr('disabled');
                     $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');

                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                 $('button[type="submit"]').removeAttr('disabled');
                $('.btn-add-center').text('Submit');
                $('button[type="submit"]').attr('disabled','disabled');
            },
       });



    });



    //Delete Responsibility Center


     $(document).on('click','a#delete-center',function (e) {


        var id = $(this).data('id');
        var table = res_center_table;
        var url = 'Responsibility_center/delete';
        del(id,table,url);        
     })

     //update 

     $(document).on('click','a#update-center',function (e) {

   
        $('#update_center_modal').modal('show');
        $('input[id=res_center_id]').val($(this).data('id'));
        $('input[name=update_center_code]').val($(this).data('code'));
        $('input[name=update_center_name]').val($(this).data('name'));


     })



    $('#update_responsibility_center_form').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
            type: "POST",
            url: base_url + 'Responsibility_center/update',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-update-center').text('Please wait...');
                $('button[name="btn-update-center"]').prop("disabled", true);
                
            },
             success: function(data)
            {            
                if (data.response) {
                    $('#update_center_modal').modal('hide');
                    res_center_table.ajax.reload();
                    $('button[name="btn-update-center"]').prop("disabled", false);
                    $('.btn-update-center').text('Save Changes');
                        Toastify({
                                  text: data.message,
                                  className: "info",
                                  style: {
                                    "background" : "linear-gradient(to right, #00b09b, #96c93d)",
                                    "height" : "60px",
                                    "width" : "350px",
                                    "font-size" : "20px"
                                  }
                                }).showToast();
                }else {
                   $('button[name="btn-update-center"]').prop("disabled", false);
                    $('.btn-update-center').text('Save Changes');
                    $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-add-center').text('Save Changes');
                $('button[type="submit"]').attr('disabled','disabled');
            },

        })

    })




    //delete function

     function del(id,table,url){

           Swal.fire({
        title: "Are you sure?",
        text: "You wont be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url +url,
                            data: {id:id},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Deleted Successfully",
                "success"
            )
                                
                               }

                                table.ajax.reload();
                            }
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });

     }


       /*================================
    Type of Activity
    ==================================*/


       var activity_table = $('#activity_table').DataTable({

            responsive: false,
        //      dom: 'Bfrtip',
        // buttons: [
        //    'print'
        // ],
            "ajax" : {
                        "url": base_url + 'Type_of_Activity/get_type',
                        "dataSrc": "",
            },
             'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span href="javascript:;"   data-id="'+data['res_center_id']+'"  style="color: #000;"  >'+data['type_act_name']+'</span>';
                }

            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<ul class="d-flex justify-content-center">\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['type_act_id']+'" data-name="'+data['type_act_name']+'" id="update-activity"><i class="fa fa-edit"></i></a></li>\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['type_act_id']+'" data-name="'+data['type_act_name']+'" id="update-under-activity"><i class="fa fa-table"></i></a></li>\
                                <li><a href="javascript:;" data-id="'+data['type_act_id']+'"  id="delete-activity"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>\
                                </ul>';
                }

            },
          ]
        });


    

    var under_type_activity_table = $('#under_activity_table').DataTable({



            "ajax" : {
                        "url": base_url + 'Type_of_Activity/get_under_type?id=' + $('input[name=activity_id]').val(),
                        "dataSrc": "",
            },
             'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span href="javascript:;"   data-id="'+data['under_type_act_id']+'"  style="color: #000;" >'+data['under_type_act_name']+'</span>';
                }

            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<ul class="d-flex justify-content-center">\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['type_act_id']+'" data-name="'+data['type_act_name']+'" id="update-activity"><i class="fa fa-edit"></i></a></li>\
                                <li><a href="javascript:;" data-id="'+data['type_act_id']+'"  id="delete-activity"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>\
                                </ul>';
                }

            },
          ]
    });


    $(document).on('click','a#update-under-activity',function (e) {

   
        $('#update_under_activity_modal').modal('show');
        $('input[id=act_id]').val($(this).data('id'));
        $('.type_of_training_title').text($(this).data('name'));
        $('.under_type_label').text($(this).data('name'));

     });


     $('#add_under_activity_form').on('submit', function(e) {
    e.preventDefault();


             $.ajax({
            type: "POST",
            url: base_url + 'Type_of_Activity/add_',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-add-under-activity').text('Please wait...');
                $('.btn-add-under-activity').attr('disabled','disabled');
            },
            success : function(data)
            {

                $('#add_under_activity_form')[0].reset();
                $('.btn-add-under-activity').text('Submit');
                $('.btn-add-under-activity').removeAttr('disabled');
               var alert =  $('.alert-add-under-activity').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                

        

                   
                under_type_activity_table.ajax.reload();

            },
             error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-add-under-activity').text('Submit');
                $('.btn-add-under-activity').removeAttr('disabled');
            },

        })

    })



      $('#add_activity_form').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
            type: "POST",
            url: base_url + 'Type_of_Activity/add',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-add-activity').text('Please wait...');
                $('.btn-add-activity').attr('disabled','disabled');
            },
            success: function(data)
            {            
                if (data.response) {
                    $('#add_activity_form')[0].reset();
                    $('.btn-add-activity').text('Submit');
                    $('.btn-add-activity').removeAttr('disabled');
                    $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                    
                   
                    activity_table.ajax.reload();
                }else {
                    $('.btn-add-activity').text('Submit');
                   $('.btn-add-activity').removeAttr('disabled');
                     $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-add-activity').text('Submit');
                 $('.btn-add-activity').removeAttr('disabled');
            },
       });



    });


       $(document).on('click','a#delete-activity',function (e) {


        var id = $(this).data('id');
        var table = activity_table;
        var url = 'Type_of_Activity/delete'
        del(id,table,url);        
     })



         //update 

     $(document).on('click','a#update-activity',function (e) {

   
        $('#update_activity_modal').modal('show');
        $('input[id=activity_id]').val($(this).data('id'));
        $('input[name=update_activity]').val($(this).data('name'));


     });



     $('#update_activity_form').on('submit', function(e) {
    e.preventDefault();


    $.ajax({
            type: "POST",
            url: base_url + 'Type_of_Activity/update',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-update-activity').text('Please wait...');
                $('button[name="btn-update-activity"]').prop("disabled", true);
                
            },
             success: function(data)
            {            
                if (data.response) {
                    $('#update_activity_modal').modal('hide');
                    activity_table.ajax.reload();
                    $('button[name="btn-update-activity"]').prop("disabled", false);
                    $('.btn-update-activity').text('Save Changes');
                        Toastify({
                                  text: data.message,
                                  className: "info",
                                  style: {
                                    "background" : "linear-gradient(to right, #00b09b, #96c93d)",
                                    "height" : "60px",
                                    "width" : "350px",
                                    "font-size" : "20px"
                                  }
                                }).showToast();
                }else {
                   $('button[name="btn-update-activity"]').prop("disabled", false);
                    $('.btn-update-activity').text('Save Changes');
                    $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-update-activity').text('Save Changes');
                $('button[type="submit"]').attr('disabled','disabled');
            },

        })

    })




       /*================================
    Responsible Section
    ==================================*/


    var responsible_section_table = $('#responsible_section_table').DataTable({


           "ajax" : {
                        "url": base_url + 'Responsible_section/get',
                        "dataSrc": "",
            },
             'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span href="javascript:;"   data-id="'+data['type_mon_id']+'"  style="color: #000;" class="table-font-size" >'+data['type_mon_name']+'</span>';
                }

            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<ul class="d-flex justify-content-center">\
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'+data['type_mon_id']+'" data-name="'+data['type_mon_name']+'" id="update-responsible"><i class="fa fa-edit"></i></a></li>\
                                <li><a href="javascript:;" data-id="'+data['type_mon_id']+'"  id="delete-responsible"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>\
                                </ul>';
                }

            },
          ]

    })


    


     $('#add_responsible_section_form').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
            type: "POST",
            url: base_url + 'Responsible_section/add',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-add-responsible').text('Please wait...');
                $('.btn-add-responsible').attr('disabled','disabled');
            },
             success: function(data)
            {            
                if (data.response) {
                    $('#add_responsible_section_form')[0].reset();
                    $('.btn-add-responsible').text('Submit');
                    $('.btn-add-responsible').removeAttr('disabled');
                    $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                    
                   
                    responsible_section_table.ajax.reload();
                }else {
                    $('.btn-add-responsible').text('Submit');
                   $('.btn-add-responsible').removeAttr('disabled');
                     $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-add-responsible').text('Submit');
                 $('.btn-add-responsible').removeAttr('disabled');
            },


        });

    });



    $(document).on('click','a#delete-responsible',function (e) {


        var id = $(this).data('id');
        var table = responsible_section_table;
        var url = 'Responsible_section/delete'
        del(id,table,url);        
     })





     $(document).on('click','a#update-responsible',function (e) {

   
        $('#update_responsible_modal').modal('show');
        $('input[id=responsible_id]').val($(this).data('id'));
        $('input[name=update_responsible]').val($(this).data('name'));


     });



      $('#update_responsible_form').on('submit', function(e) {
    e.preventDefault();


    $.ajax({
            type: "POST",
            url: base_url + 'Responsible_section/update',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.btn-update-responsible').text('Please wait...');
                $('.btn-update-responsible').prop("disabled", true);
                
            },
             success: function(data)
            {            
                if (data.response) {
                    $('#update_activity_modal').modal('hide');
                    responsible_section_table.ajax.reload();
                    $('.btn-update-responsible').prop("disabled", false);
                    $('.btn-update-responsible').text('Save Changes');
                        Toastify({
                                  text: data.message,
                                  className: "info",
                                  style: {
                                    "background" : "linear-gradient(to right, #00b09b, #96c93d)",
                                    "height" : "60px",
                                    "width" : "350px",
                                    "font-size" : "20px"
                                  }
                                }).showToast();
                }else {
                   $('.btn-update-responsible').prop("disabled", false);
                    $('.btn-update-activity').text('Save Changes');
                    $('.alert').html(' <div class="alert-dismiss mt-2">\
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                                            <strong>'+data.message+'.\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>\
                                                            </button>\
                                                            </div>\
                                                    </div>');
                }
           },
            error: function(xhr) { // if error occured
                alert("Error occured.please try again");
                $('.btn-update-responsible').text('Save Changes');
                 $('.btn-update-responsible').prop("disabled", false);
            },

        })

    })



   







    /*================================
    Preloader
    ==================================*/

    var preloader = $('#preloader');
    $(window).on('load', function() {
        setTimeout(function() {
            preloader.fadeOut('slow', function() { $(this).remove(); });
        }, 300)
    });

    /*================================
    sidebar collapsing
    ==================================*/
    if (window.innerWidth <= 1364) {
        $('.page-container').addClass('sbar_collapsed');
    }
    $('.nav-btn').on('click', function() {
        $('.page-container').toggleClass('sbar_collapsed');
    });

    /*================================
    Start Footer resizer
    ==================================*/
    var e = function() {
        var e = (window.innerHeight > 0 ? window.innerHeight : this.screen.height) - 5;
        (e -= 67) < 1 && (e = 1), e > 67 && $(".main-content").css("min-height", e + "px")
    };
    $(window).ready(e), $(window).on("resize", e);

    /*================================
    sidebar menu
    ==================================*/
    $("#menu").metisMenu();

    /*================================
    slimscroll activation
    ==================================*/
    $('.menu-inner').slimScroll({
        height: 'auto'
    });
    $('.nofity-list').slimScroll({
        height: '435px'
    });
    $('.timeline-area').slimScroll({
        height: '500px'
    });
    $('.recent-activity').slimScroll({
        height: 'calc(100vh - 114px)'
    });
    $('.settings-list').slimScroll({
        height: 'calc(100vh - 158px)'
    });

    /*================================
    stickey Header
    ==================================*/
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop(),
            mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();

        // console.log(mainHeader.innerHeight());
        if (scroll > 1) {
            $("#sticky-header").addClass("sticky-menu");
        } else {
            $("#sticky-header").removeClass("sticky-menu");
        }
    });

    /*================================
    form bootstrap validation
    ==================================*/
    $('[data-toggle="popover"]').popover()

    /*------------- Start form Validation -------------*/
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    /*================================
    datatable active
    ==================================*/
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: false
        });
    }
    if ($('#dataTable2').length) {
        $('#dataTable2').DataTable({
            responsive: true
        });
    }
    if ($('#dataTable3').length) {
        $('#dataTable3').DataTable({
            responsive: true
        });
    }


    /*================================
    Slicknav mobile menu
    ==================================*/
    $('ul#nav_menu').slicknav({
        prependTo: "#mobile_menu"
    });

    /*================================
    login form
    ==================================*/
    $('.form-gp input').on('focus', function() {
        $(this).parent('.form-gp').addClass('focused');
    });
    $('.form-gp input').on('focusout', function() {
        if ($(this).val().length === 0) {
            $(this).parent('.form-gp').removeClass('focused');
        }
    });

    /*================================
    slider-area background setting
    ==================================*/
    $('.settings-btn, .offset-close').on('click', function() {
        $('.offset-area').toggleClass('show_hide');
        $('.settings-btn').toggleClass('active');
    });

    /*================================
    Owl Carousel
    ==================================*/
    function slider_area() {
        var owl = $('.testimonial-carousel').owlCarousel({
            margin: 50,
            loop: true,
            autoplay: false,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                450: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1360: {
                    items: 1
                },
                1600: {
                    items: 2
                }
            }
        });
    }
    slider_area();

    /*================================
    Fullscreen Page
    ==================================*/

    if ($('#full-view').length) {

        var requestFullscreen = function(ele) {
            if (ele.requestFullscreen) {
                ele.requestFullscreen();
            } else if (ele.webkitRequestFullscreen) {
                ele.webkitRequestFullscreen();
            } else if (ele.mozRequestFullScreen) {
                ele.mozRequestFullScreen();
            } else if (ele.msRequestFullscreen) {
                ele.msRequestFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var exitFullscreen = function() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var fsDocButton = document.getElementById('full-view');
        var fsExitDocButton = document.getElementById('full-view-exit');

        fsDocButton.addEventListener('click', function(e) {
            e.preventDefault();
            requestFullscreen(document.documentElement);
            $('body').addClass('expanded');
        });

        fsExitDocButton.addEventListener('click', function(e) {
            e.preventDefault();
            exitFullscreen();
            $('body').removeClass('expanded');
        });
    }

})(jQuery);


    </script>