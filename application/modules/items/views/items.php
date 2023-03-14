<div id="page-wrapper">
            
            <div class="row">
                <div class="col-md-12">
				
			
            	<a title="<?php echo get_languageword('add_record'); ?>" class="btn btn-primary btn-xs pull-right" href="<?php echo URL_ADD_ITEM; ?>"><i class="fa fa-plus"></i> </a>
				
					<?php $this->load->view('common_sections/multi_action_section'); ?>

					<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <?php if(!empty($pagetitle)) echo $pagetitle;?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							
			<?php echo $this->session->flashdata('message'); ?>
		
			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">
			  	<thead>
					<tr>
						<th><input type="checkbox" class="ip_check_all" name="check_all" id="check_all" onclick="toggle_check_all(this);"> </th>
						<th><?php echo get_languageword('menu_name');?></th>
						<th><?php echo get_languageword('item_name');?></th>
						<th><?php echo get_languageword('item_price');?></th>
						<th><?php echo get_languageword('item_type');?></th>
						
						<th><?php echo get_languageword('item_image');?></th>
						<th><?php echo get_languageword('status');?></th>
						<th><?php echo get_languageword('actions');?></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th><input type="checkbox" class="ip_check_all" name="check_all" id="check_all" onclick="toggle_check_all(this);"> </th>
						<th><?php echo get_languageword('menu_name');?></th>
						<th><?php echo get_languageword('item_name');?></th>
						<th><?php echo get_languageword('item_price');?></th>
						<th><?php echo get_languageword('item_type');?></th>
						
						<th><?php echo get_languageword('item_image');?></th>
						<th><?php echo get_languageword('status');?></th>
						<th><?php echo get_languageword('actions');?></th>
					</tr>
				</tfoot>

				<tbody>

				</tbody>
			</table>
			</div>
			</div>
			</div>
		 </div>
                        </div>
                   
                    <!--End Advanced Tables -->
                </div>
				
				
 	<?php $this->load->view('modals/delete-modal'); ?>