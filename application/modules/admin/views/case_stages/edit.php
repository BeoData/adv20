<section class="content-header">
    <h1>
        <?php echo lang('case');?> <?php echo lang('stage');?>
        <small><?php echo lang('edit');?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin')?>"><i class="fa fa-dashboard"></i> <?php echo lang('dashboard');?></a></li>
        <li><a href="<?php echo site_url('admin/case_stage')?>"><?php echo lang('case');?> <?php echo lang('stages');?></a></li>
        <li class="active"><?php echo lang('edit');?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
    <?php 
    if(validation_errors()) {
            ?>
    <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
        <b><?php echo lang('alert');?>!</b><?php echo validation_errors(); ?>
    </div>

    <?php  } ?>  
           
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo lang('edit');?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
            
                <?php echo form_open_multipart('admin/case_stage/edit/'.$id); ?>
                    <div class="box-body">
                        <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name" > <?php echo lang('name');?></label>
                                    <input type="text" name="name" value="<?php echo $stage->name; ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        
                         
                    </div><!-- /.box-body -->
    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><?php echo lang('update');?></button>
                    </div>
             <?php form_close()?>
            </div><!-- /.box -->
        </div>
     </div>
</section>  