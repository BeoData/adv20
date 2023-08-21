


<section class="content-header">
        <h1>
            <?php echo $page_title; ?>
            <small><?php echo lang('list');?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><?php echo lang('court');?> <?php echo lang('category');?></li>
        </ol>
</section>

<section class="content">
         <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
                <div class="btn-group pull-right">
                <?php if(check_user_role(60)==1){?> 
                    <a class="btn btn-default" href="<?php echo site_url('admin/court_category/add/'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new');?></a>
                 <?php } ?> 
                </div>
            </div>    
        </div>  
        
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo lang('court');?> <?php echo lang('category');?></h3>                                    
                </div><!-- /.box-header -->
                
                <div class="box-body table-responsive" >
                    <table id="datable_1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo lang('serial_number');?></th>
                                <th><?php echo lang('name');?></th>
                                <th width="20%"><?php echo lang('action');?></th>
                            </tr>
                        </thead>
                        
                        <?php if(isset($categories)):?>
                        <tbody>
                            <?php $i=1;foreach ($categories as $new){?>
                                <tr class="gc_row">
                                    <td><?php echo $i?></td>
                                    <td><?php echo $new->name?></td>
                                    
                                    <td>
                                        <div class="btn-group">
                                         <?php if(check_user_role(61)==1){?>     
                                          <a class="btn btn-primary"  href="<?php echo site_url('admin/court_category/edit/'.$new->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>
                                           <?php } ?>   
                                          <?php if(check_user_role(62)==1){?>   
                                         <a class="btn btn-danger" style="margin-left:20px;" href="<?php echo site_url('admin/court_category/delete/'.$new->id); ?>" onclick="return areyousure()"><i class="fa fa-trash"></i> <?php echo lang('delete');?></a>
                                          <?php } ?>    
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;}?>
                        </tbody>
                        <?php endif;?>
                    </table>
                 </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>