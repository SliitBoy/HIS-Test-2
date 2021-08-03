<?php
/*
------------------------------------------------------------------------------------------------------------------------
Copyright (c) Digital Pulz (Pvt) Ltd, 2021
<http: http://www.digitalpulz.com />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border col-md-12">
                            <h3 class="box-title text-bold">Add Test</h3>
                        </div>

                            <div class="box-body">
                                                             
                                <div class="col-md-4 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Name</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Name" tabindex="1"
                                               aria-describedby="basic-addon1" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-2 form-group">
                                    <div class="input-group">
                                        <button class="btn btn-primary" tabindex="2" id="add">Add</button>
                                        <button class="btn btn-primary" tabindex="2" id="update" style="display: none;">Update</button>
                                    </div>
                                </div>
                             
                            </div>
                        
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                  
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Tests</h3>
                        </div>
                       
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Test Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody id="tableBody" name="tableBody">

                                <?php
                                if(isset($tests)) {
                                    foreach ($tests as $value) { ?>
                                        <tr id="<?php echo $value['id']; ?>">                                        
                                            <td><?php echo $value['name']; ?></td>
                                            <td>
                                                <button class="btn btn-primary edit_btn" type="button" data-id="<?php echo $value['id']; ?>" title="Edit Test">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger delete_btn" type="button" data-id="<?php echo $value['id']; ?>" title="Delete Test">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>

</div>
<script>

    $('#add').click(function () {

        var name = $("#name").val();

        if(name.length==0){
            bootbox.alert("Please enter a test name");
            return;
        }
       
        var obj = {};
        obj['name'] = name;
        obj['loggedUser'] = '<?php echo $this->session->userdata('userid');?>';

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/Examination_test_c/addTest',
            data: {'obj': obj},
            success: function (data) {
                result = JSON.parse(data);
                if(result.id>0){
                    bootbox.alert("Test Added Successfully",function(){
                        window.location.href = "<?php echo base_url();?>index.php/Examination_test_c";
                    });
                }else{
                    bootbox.alert("Failed to add Test");
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                bootbox.alert(xhr.status);
                bootbox.alert(thrownError);
            }
        });
                            
    });



    $('#update').click(function () {

        var name = $("#name").val();
        var id = $(this).data('id');

        if(name.length==0){
            bootbox.alert("Please enter a test name");
            return;
        }

        var obj = {};
        obj['name'] = name;
        obj['loggedUser'] = '<?php echo $this->session->userdata('userid');?>';

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/Examination_test_c/updateTest',
            data: {'testId': id, 'obj': obj},
            success: function (data) {
                result = JSON.parse(data);
                if(result.id>0){
                    bootbox.alert("Test Updated Successfully",function(){
                        window.location.href = "<?php echo base_url();?>index.php/Examination_test_c";
                    });
                }else{
                    bootbox.alert("Failed to update Test");
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                bootbox.alert(xhr.status);
                bootbox.alert(thrownError);
            }
        });
                            
    });

    $('body').on('click', '.edit_btn', function () {

        var row_id = $(this).data('id');
        var td = $(this).closest('tr').find('td');
        var name = (td.eq(0).html().trim());

        if(row_id>0){
            $('#name').val(name);
            $('#update').data('id', row_id);
            $('#add').hide();
            $('#update').show();
        }

    });

    $('body').on('click', '.delete_btn', function () {

        var row_id = $(this).data('id');

        if(row_id>0){

            bootbox.confirm({
                message: "Do you want to delete this test?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {

                        var obj = {};
                        obj['loggedUser'] = '<?php echo $this->session->userdata('userid');?>';
                        
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/Examination_test_c/deleteTest',

                            data: {'deleteId': row_id, 'obj': obj},
                            success: function (result) {

                                bootbox.alert("Successfully deleted!", function () {
                                    window.location.href = "<?php echo site_url("/Examination_test_c"); ?>";
                                });


                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                console.log(xhr.status);
                                console.log(thrownError);
                            }
                        });
                    }
                }
            });

        }

    });

</script>
