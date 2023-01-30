<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel_s">
                        <div class="panel-body">
                            <?php echo 'Welcome '.$company ?>
                            <?php render_datatable(array(
                                'Tên nhân viên',
                                'Ngày sinh',
                                'Giới tính',
                                'Ngày tạo',
                            ),'demo_staff'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<script>
    $(function(){
        initDataTable('.table-demo_staff', admin_url+'demo_datatable/table');
    });
</script>

