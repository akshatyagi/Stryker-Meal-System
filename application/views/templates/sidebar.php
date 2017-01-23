<div class='container-fluid'>
	<!-- Modals -->
	<div class='modal fade ' id='add_item_modal' role='dialog'>
		<div class='modal-dialog'>
			<div style='background-color:#f8f8f8;'  class='modal-content'>
				<div class='modal-header'>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-success modal-title"><span class='glyphicon glyphicon-plus'></span>Add a new Menu Item</h4>
				</div>
				<div class='modal-body'>
					<form id='insert_form' action="" role="form" >
						<div class='form-group'>
							<label class=' text-primary' for="item_name">Item Name</label>
							<input type='text' maxlength="50" class='form-control' placeholder='Enter the name of the food Item' id='item_name' name='item_name' required />
						</div>
						<div class='form-group'>
							<label class=' text-primary' for="item_category">Item Category</label>
							<select class='form-control' id='item_category' name='item_category'>
								<option>Select the category of food</option>
								<option value='Main-Course'>Main Course</option>
								<option value='Beverage' >Beverage</option>
								<option value='Salad'>Salads</option>
								<option value='Dessert'>Desserts</option>
								<option value='Special'>Special</option>
							</select>
						</div>
						<div class='form-group'>
							<label class='text-primary' for="item_type">Item Type</label>
							<select class='form-control' id='item_type' name='item_type'>
								<option>Select the type of food</option>
								<option value='Vegetarian' style='color:green'>Vegetarian</option>
								<option value='Non-Vegetarian' style='color:red'>Non-Vegetarian</option>
							</select>
						</div>
					</form>
				</div>
				<div class='modal-footer'>
					<button id='add_item_menu' type = 'submit' class='btn btn-success'><span class='glyphicon glyphicon-ok'></span>Add Item</button>
					<button class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Cancel</button>
				</div>
			</div>
		</div>
	</div> 
	<div class='modal fade' id='add_news_modal' role='dialog'>
		<div class='modal-dialog'>
			<div style='background-color:#f8f8f8;' class='modal-content'>
				<div class='modal-header'>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-success modal-title"><span class='glyphicon glyphicon-plus'></span>Add a News Article</h4>
				</div>
				<div class='modal-body'>
					<form id='insert_form_news' action="" role="form" >
						<div class='form-group'>
							<label class=' text-primary' for="news_title">Title</label>
							<input maxlength="40" type='text' class='form-control' placeholder='Enter the title of the News Article' id='news_title' name='news_title' required />
						</div>
						<div class='form-group'>
							<label class=' text-primary' for="news_article">Article</label>
							<textarea maxlength="150" type='text' class='form-control'  placeholder='Enter the information(max. 150 words)' id='news_article' name='news_article' required></textarea>
						</div>
					</form>
				</div>
				<div class='modal-footer'>
					<button id='add_item_news' type = 'submit' class='btn btn-success'><span class='glyphicon glyphicon-ok'></span>Add Item</button>
					<button class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<div class='modal fade ' id='add_instruction_modal' role='dialog'>
		<div class='modal-dialog'>
			<div style='background-color:#f8f8f8;'  class='modal-content'>
				<div class='modal-header'>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-success modal-title"><span class='glyphicon glyphicon-plus'></span>Add a New Instruction Item</h4>
				</div>
				<div class='modal-body'>
					<form id='insert_form_instruction' action="" role="form" >
						<div class='form-group'>
							<label class=' text-primary' for="item_name">Instruction</label>
							<input type='text' maxlength="100" class='form-control' placeholder='Enter the Instruction(max 100 words)' id='item_instruction' name='item_instruction' required />
						</div>
					</form>
				</div>
				<div class='modal-footer'>
					<button id='add_item_instruction' type = 'submit' class='btn btn-success'><span class='glyphicon glyphicon-ok'></span>Add Item</button>
					<button class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<div class='modal fade ' id='message' role='dialog'>
		<div class='modal-dialog'>
			<div style='background-color:#f8f8f8;'  class='modal-content'>
				<div class='modal-header'>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-success modal-title"><span class='glyphicon glyphicon-envelope'></span>Message</h4>
				</div>
				<div id = 'comment' class='modal-body'>

					<!-- Message here -->
				</div>
				<div class='modal-footer'>
					<button class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span>Close </button>
				</div>
			</div>
		</div>
	</div> 
	<!-- End of Modals -->	
	<div class='row'>
		<div class='col-md-3'>
			<ul id='sidebar' class='nav nav-pills nav-stacked'>
				<div class='well well-sm addGradient' style='border-radius:4px'>
					<h4 style='text-align:center'>Administrator Section</h4>
				</div>
				<li class='active' ><a data-toggle='pill' href='#m_a'>Menu</a></li>
				<li><a id='test' data-toggle='pill' href='#f_a'>Feedback/Messages <span id='n_msg_1' class = 'badge badge-sm'><?php echo $number_messages+$num_feedback; ?></a></li>
				<li><a data-toggle='pill' href='#n_a'>News</a></li>
				<li><a data-toggle='pill' href='#i_a'>Instructions</a></li>
				<li><a data-toggle='pill' href='#ab_a'>About Us</a></li>
			</ul>
		</div>
		<div class='col-md-9'>			
			<div class='tab-content'>
				<!-- Menu Template -->				
				<div id='m_a' class='tab-pane fade in active'>	
					<!-- Upper Tab -->
					<ul id='sidebar_menu' class='nav nav-tabs'>
						<li class='active'><a data-toggle='pill' href='#m1'>Weekly Menu</a></li>
						<li><a data-toggle='pill' href='#m2'>All Items</a></li>			
					</ul>			
					<!-- End -->		
					<div class='tab-content'>
						<div id='m1' class='tab-pane fade in active'><br>
							<!-- Weekly Menu -->
							<?php 			
								if($is_set){
									echo "<h1 style='text-decoration:underline' class='text-responsive text-center text-primary'>Weekly Menu</h1>";	
									echo"<button id='reset_weekly_menu' class='btn btn-danger btn-lg'>Reset</button>";
								}
								else{
									echo "<h1 class='text-responsive text-center text-danger'>No Weekly Menu set!</h1>";	
								}
							?>
							<div class='row'>
								<div id='new_weekly_menu_set' class='col-md-12'>
									<?php
										if(!$is_set){
									 	echo "<h2 style='text-decoration:underline' class = 'text-center text-responsive text-success'>New Weekly Menu</h2>";
									 	}
									?>
									<form action="" id='new_weekly_menu_form' role='form'>
										<div class='row'><br>
											<?php  
												$days = array('Monday','Tuesday','Wednesday','Thursday','Friday');
												for($i=0;$i<=count($days)-1;$i++){
													echo "<div class='col-md-12 container-fluid'>"
														."<h4 style='text-decoration:underline' class='text-responsive text-center text-primary'>".$days[$i]
															."</h4>";
													if(!$is_set){
														foreach($items as $item){

															echo "<div class='checkbox'><label><input type='checkbox' name='".$days[$i]."[]' value='".$item->index."'>".$item->item_name."</label></div>";
														}
													}
													else{

														switch($days[$i]){
															case 'Monday': 
																echo "<ul class='list-group'>";
																foreach ($Monday as $m){
																echo "<li class='list-group-item'>".$m['item_name']."</li>"; 
																}
																echo "</ul>";
																break;
															case 'Tuesday': 
															    echo "<ul class='list-group'>";
																foreach ($Tuesday as $m){
																echo "<li class='list-group-item'>".$m['item_name']."</li>"; 
																}
																echo "</ul>";
																break;
															case 'Wednesday':
															    echo "<ul class='list-group'>";
																foreach ($Wednesday as $m){
																echo "<li class='list-group-item'>".$m['item_name']."</li>"; 
																}
																echo "</ul>";
																break; 
															case 'Thursday': 
															    echo "<ul class='list-group'>";
																foreach ($Thursday as $m){
																echo "<li class='list-group-item'>".$m['item_name']."</li>"; 
																}
																echo "</ul>";
																break;
															case 'Friday': 
															    echo "<ul class='list-group'>";
																foreach ($Friday as $m){
																echo "<li class='list-group-item'>".$m['item_name']."</li>"; 
																}
																echo "</ul>";
																break;
														}
													}
													echo "</div>";
												}
											?>
										</div><br>
										<?php
											if(!$is_set) {
												echo "<button type='submit' class='btn btn-success btn-lg'>Create Weekly Menu</button>";
											}
										?>
									</form>
								</div>
								<div id='new_weekly_menu_reset' class='col-md-12'>

								</div>
							</div>
						</div>
						<div id='m2' class='tab-pane fade'>
							<div class='row'><br>	
								<div class='col-md-3 '>
			    					<form role='form'>
			    						<div class='form-group'>	
			    							<!--<input type='search' style='width:250px' class='form-control text-responsive' placeholder='Enter the item name' />-->

			    						</div>  						
  									</form>
			    				</div>	
			    				<div class='col-md-3'>
			    					<!--<button class="btn btn-primary btn-md dropdown-toggle" type="button" data-toggle="dropdown">Select Category
 										<span class="caret"></span>
 									</button>
  									<ul class="dropdown-menu">
    									<li><a href="#">Main Course</a></li>
    									<li><a href="#">Salads</a></li>
    									<li><a href="#">Dessert</a></li>
  									</ul>	-->												
			    				</div>
			    				<div style='float:right' class='col-md-2'>
			    					<button data-toggle='modal' data-target ='#add_item_modal' class="btn btn-success btn-md" id='add_item' type="button"><span class="glyphicon glyphicon-plus"></span>
 									</button>													
			    				</div>		
			    			</div>
			    			<div class='container-fluid table-responsive'>    			
			    				<table id='all_items_menu' class='table-hover table table-condensed table-bordered '>	<br>	
			    					<thead class='text-responsive'>
			    					<tr>			    						
			    						<th><h4><b>Item Name</b></h4></th>
			    						<th><h4><b>Item Category</b></h4></th>
			    						<th><h4><b>Item Type</b></h4></th>
			    						<th><h4><b>Action</b></h4></th>
			    					</tr>
			    					</thead>	
			    					<?php function checkColor($item_category){
			    							$color_category ="";
											switch($item_category){
											case "Main-Course": $color_category ="purple"; break;
											case "Salad": $color_category ="maroon"; break;
											case "Special": $color_category ="orange"; break;
											case "Beverage": $color_category ="brown"; break;
											case "Dessert": $color_category ="blue"; break;
											default: $color_category ="black";
											}
											return $color_category;
			    						} ?>
			    					<?php foreach($items as $i) { ?> 	
			    					<tr>	    					
			    						<td hidden><?php echo $i->id; ?></td>
			    						<td><h4  class = 'editable'><?php echo $i->item_name; ?></h4></td>
			    						<td><h4  style = "color:<?php echo checkColor($i->item_category) ?>" class = 'editable'><?php echo $i->item_category; ?><?php echo"" ?></h4></td>
			    						<td><h4 class = ' editable' style = "color:<?php if($i->type == 'Vegetarian'){echo 'green';}else{echo 'red';} ?>"><?php echo $i->type; ?></h4></td>
			    						<td>
			    													
			    								<!--<button data-toggle='popover' id = 'update_menu' class= 'btn btn-info'><span class='glyphicon glyphicon-pencil'>Update</span></button> -->
			    								<button id = "<?php echo $i->index; ?>" 
			    								class='btn btn-danger delete_item'><span class='glyphicon glyphicon-remove'></span>Delete Item</button>	
			    						</td>
			    					</tr>
			    					<?php } ?>	
			    				</table>	
			    			</div>			  		
			    		</div>	
			    	</div>
			    </div>	
			    <!-- End of Menu Template -->			
				<div id='f_a' class='tab-pane fade'>	
					<ul id='sidebar_menu' class='nav nav-tabs'>
						<li class='active'><a data-toggle='pill' href='#f1'></span> Feedback <span id='n_fb_2' class = 'label label-warning'><?php echo $num_feedback; ?></a></li>
						<li><a data-toggle='pill' href='#f2'>Messages <span id='n_msg_2' class = 'label label-success'><?php echo $number_messages; ?></span></a></li>			
					</ul>		
					<div class='tab-content'>
						<div id='f1' class='tab-pane fade in active'>
							<div class = 'row'>
								<h2 id= 'del_text' class = 'text-center text-responsive'></h2>	
								<div id = "avg_feedback"  class = 'col-md-10 container-fluid table-responsive'><br><br>
									<h2 id= 'del_text' class = 'text-primary text-center text-responsive'>Average Feedback</h2>
									<table id = "avg_feedback" class= 'table-bordered table-hover table table-condensed'>
										<thead>
										<?php foreach($feedback_fields as $ff){ ?>
											<th><?php echo $ff; ?></th>
										<?php } ?>
										</thead>
										<tbody>
										<?php  if(empty($feedback)){for($i=1;$i<=count($feedback_fields);$i++){echo "<td>NA</td>";}} else { ?>
											<tr>
  												<td><?php echo $avg_feedback['SERVICE'][0]->SERVICE; ?></td>
  												<td><?php echo $avg_feedback['STAFF_FRIENDLINESS'][0]->STAFF_FRIENDLINESS; ?></td>
  												<td><?php echo $avg_feedback['FOOD_QUALITY'][0]->FOOD_QUALITY; ?></td>
  												<td><?php echo $avg_feedback['ATMOSPHERE'][0]->ATMOSPHERE; ?></td>
  												<td><?php echo $avg_feedback['CLEANLINESS'][0]->CLEANLINESS; ?></td>
  												<td><?php echo $avg_feedback['TIMELINESS'][0]->TIMELINESS; ?></td>
  												<td>NA</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class = 'row'><br><br>
								<div class = 'col-md-2 center-block'>
			    					<button class="center-block btn btn-danger btn-lg " id='delete_feedback' type="button"><span class="glyphicon glyphicon-minus"></span>Delete Feedback
 									</button>													
			    				</div>
							</div>
							<div class = 'row'>
								<div id = "feedback_table" class = 'col-md-10 container-fluid table-responsive'><br><br>
									<h2 id = 'del_text' class = 'text-primary text-center text-responsive'>All Feedback</h2><br>
									<table class= 'table-bordered table-hover table table-condensed'>
										<thead>
										<?php foreach($feedback_fields as $ff){ ?>
											<th><?php echo $ff; ?></th>
										<?php } ?>
										</thead>
										<tbody>
											<?php  
												if(empty($feedback)){
													echo "<tr>";		
													for($i=1;$i<=count($feedback_fields);$i++){ 
											 			echo "<td class='nodata'>No Data</td>"; 
											 		} 
											 		echo "</tr>";
											 	}
											 	else {
											?>
											<?php foreach($feedback as $f){ ?>
												<tr>
													<td><?php echo $f->SERVICE; ?></td>
													<td><?php echo $f->STAFF_FRIENDLINESS; ?></td>
													<td><?php echo $f->FOOD_QUALITY; ?></td>
													<td><?php echo $f->ATMOSPHERE; ?></td>
													<td><?php echo $f->CLEANLINESS; ?></td>
													<td><?php echo $f->TIMELINESS; ?></td>
													<td><?php echo $f->DATE; ?></td>
												</tr>
											<?php } } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
						<div id='f2' class='tab-pane fade '>
							<div class = 'row'>
								<div  class = 'col-md-12 container-fluid table-responsive'><br><br>
									<h2 id = 'del_text_msg' class = 'text-primary text-center text-responsive'>Messages</h2><br>
									<table  id = "messages_table" class= 'table-bordered table-hover table table-condensed'>
										<thead>
										<?php 
											foreach($messages_fields as $mf){ 
												if($mf == 'ID'){continue;}
												echo "<th><h4><b>".$mf."</b></h4></th>"; 
											} 
										?>
											<th><h4><b>Action</b></h4></th>
										</thead>
										<tbody>
											<?php  
												if(empty($messages)){
													echo "<tr>";		
													for($i=1;$i<=count($messages_fields)+1;$i++){ 
											 			echo "<td class = 'nodata'>No Data</td>"; 
											 		} 

											 		echo "</tr>";
											 	}
											 	else {
											?>
											<?php foreach($messages as $m){ ?>
												<tr id = "<?php $param = 'ID'; echo $m->$param; ?>">
												<td><h4><?php $param = 'First_Name'; echo $m->$param; ?></h4></td>
												<td><h4><?php $param = 'Last_Name'; echo $m->$param; ?></h4></td>
												<td><h4><?php $param = 'Email'; echo $m->$param; ?></h4></td>
												<td><button data-toggle='modal' data-target='#message' class = 'btn btn-link btn-lg view_comment'> View Comment</button></td>
												<td><h4><?php $param = 'Date-Time'; echo $m->$param; ?></h4></td>
												<td><button class = 'btn btn-danger delete_message'>Delete Message</td>
												</tr>
											<?php } } ?>
										</tbody>
									</table>
								</div>
							</div>



			    		</div>						
					</div>
				</div>
				<div id='n_a' class='tab-pane fade '>	
					<ul id='sidebar_menu' class='nav nav-tabs'>
						<li class='active'><a data-toggle='pill' href='#n1'>News Items</a></li>		
					</ul>		
					<div class='tab-content'>
						<div id='n1' class='tab-pane fade in active'>
							<!-- News Bulletin -->
							<div class='row'><br>	
								<div class='col-md-3 '>
			    					<form role='form'>
			    						<div class='form-group'>	
			    							<!--<input type='search' style='width:250px' class='form-control text-responsive' placeholder='Search Item' />-->
			    						</div>  						
  									</form>
			    				</div>	
			    				<div style='float:right' class='col-md-2'>
			    					<button data-toggle='modal' data-target ='#add_news_modal' class="btn btn-success btn-md" id='add_news' type="button"><span class="glyphicon glyphicon-plus"></span>
 									</button>													
			    				</div>		
			    			</div>
			    			<div class='container-fluid table-responsive col-md-12'>    			
			    				<table id='all_items_news' class='table-hover table table-condensed table-bordered '>	<br>	
			    					<thead class='text-responsive'>
			    					<tr>			    						
			    						<th><h4><b>Title<bb></h4></th>
			    						<th><h4><b>Details</b></h4></h4></th>
			    						<th><h4><b>Action</b></h4></th>
			    					</tr>
			    					</thead>	
			    					<?php foreach($news_items as $n) { ?> 	
			    					<tr>	    					
			    						<td><h4><?php echo $n->title; ?></h4></td>
			    						<td><h4><?php echo $n->article; ?></h4></td>
			    						<td>					
			    							<!--<button data-toggle='popover' id = 'update_menu' class= 'btn btn-info'><span class='glyphicon glyphicon-pencil'>Update</span></button> -->
			    							<button id = "<?php echo $n->index; ?>" 
			    							class='btn btn-danger delete_news' onclick='delete()'><span class='glyphicon glyphicon-remove'></span>Delete Item</button>	
			    						</td>
			    					</tr>
			    					<?php } ?>	
			    				</table>	
			    			</div>			  		
							<!-- END OF News Bulletin -->
						</div>						
					</div>			
				</div>
				<div id='i_a' class='tab-pane fade'>				
					<ul id='sidebar_menu' class='nav nav-tabs'>
						<li class='active'><a data-toggle='pill' href='#i1'>Instructions</a></li>	
					</ul>		
					<div class='tab-content'>
						<div id='i1' class='tab-pane fade in active'>	
							<div class='row'><br>	
								<div class='col-md-3 '>
			    					<form role='form'>
			    						<div class='form-group'>	
			    							<!--<input type='search' style='width:250px' class='form-control text-responsive' placeholder='Search Item' />-->
			    						</div>  						
  									</form>
			    				</div>	
			    				<div style='float:right' class='col-md-2'>
			    					<button data-toggle='modal' data-target ='#add_instruction_modal' class="btn btn-success btn-md" id='add_instruction' type="button"><span class="glyphicon glyphicon-plus"></span>
 									</button>													
			    				</div>		
			    			</div>							
  							<div class="list-group container-fluid col-md-9 table-responsive"><br>
  							<table id='all_items_instruction' class='table-hover table table-condensed table-bordered '>	<br>	
			    					<thead class='text-responsive'>
			    					<tr>			    						
			    						<th>Instruction</th>
			    						<th>Action</th>
			    					</tr>
			    					</thead>	
			    					<?php foreach($rules as $r){ ?> 	
			    					<tr>	    					
			    						<td><h4><?php echo $r->item; ?></h4></td>
			    						
			    						<td>					
			    							<!--<button data-toggle='popover' id = 'update_menu' class= 'btn btn-info'><span class='glyphicon glyphicon-pencil'>Update</span></button> -->
			    							<button id = "<?php echo $r->index; ?>" 
			    							class='btn btn-danger delete_instruction'><span class='glyphicon glyphicon-remove'></span>Delete Item</button>	
			    						</td>
			    					</tr>
			    					<?php } ?>	
			    				</table>	
  							</div>
						</div>						
					</div>
				</div>
				<div id='ab_a' class='tab-pane fade '>	
					<ul id='sidebar_menu' class='nav nav-tabs col-md-9'>
						<li class='active'><a data-toggle='pill' href='#ab1'>Contact Information</a></li>
					</ul>		
					<div class='tab-content'>
						<div id='ab1' class='tab-pane fade in active'>
							<div class = 'row'>
								<div class = 'col-md-9 container-fluid table-responsive'><br><br>
									<table class= 'table-bordered table-hover table table-condensed'>
										<thead>
											<th>Email</th>
											<th>Action</th>
										</thead>
										<tbody>
											<tr>
												<?php foreach($contact as $c){ ?>
													<td style = 'width:60%'>
														<form role='form' action="">
														<input type = 'email' pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" maxlength ="30" id = 'new_email' class = 'form-control' placeholder = 'Enter the new email(max 30 characters)' required />
														<h4 id = 'old_email' placeholder = "<?php echo $c->email ?>"><?php echo $c->email; ?></h4>
													</td>
													<td>
														<div class = 'btn-group' id ="foremail">
															<button class = 'btn btn-info update_data'>Update</button>
															<button type="submit" class = 'btn btn-success update_success'>Change</button>
															<button class = 'btn btn-danger update_cancel'>Cancel</button>
															<form>
														</div>
													</td>
												<?php } ?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class = 'row'>
								<div class = 'col-md-9 container-fluid table-responsive'><br><br>
									<table class= 'table-bordered table-hover table table-condensed'>
										<thead>
											<th>Phone</th>
											<th>Action</th>
										</thead>
										<tbody>
											<tr>
												<?php foreach($contact as $c){ ?>
													<td style = 'width:60%'>
														<input type = 'text' id = 'new_phone' class = 'form-control' maxlength="20" placeholder = 'Enter the new phone number (max 20 characters)' required />
														<h4 id = 'old_phone' placeholder = "<?php echo $c->phone ?>"><?php echo $c->phone; ?></h4>
													</td>
													<td>
														<div class = 'btn-group' id ="forphone">
															<button class = 'btn btn-info update_data'>Update</button>
															<button type="submit" class = 'btn btn-success update_success'>Change</button>
															<button class = 'btn btn-danger update_cancel'>Cancel</button>
														</div>
													</td>
												<?php } ?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class = 'row'>
								<div class = 'col-md-9 container-fluid table-responsive'><br><br>
									<table class= 'table-bordered table-hover table table-condensed'>
										<thead>
											<th>Address</th>
											<th>Action</th>
										</thead>
										<tbody>
											<tr>
												<?php foreach($contact as $c){ ?>
													<td style = 'width:60%'>
														<input type = 'text' maxlength="50" id = 'new_address' class = 'form-control' placeholder = 'Enter the new address(max 50 characters)' required />
														<h4 id = 'old_address' placeholder = "<?php echo $c->address ?>"><?php echo $c->address; ?></h4>
													</td>
													<td>
														<div class = 'btn-group' id ="foraddress">
															<button class = 'btn btn-info update_data'>Update</button>
															<button type="submit" class = 'btn btn-success update_success'>Change</button>
															<button class = 'btn btn-danger update_cancel'>Cancel</button>
														</div>
													</td>
												<?php } ?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>