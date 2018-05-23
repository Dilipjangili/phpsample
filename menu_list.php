<!-- header wrapper starts -->

<?php include'includes/header.php' ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/users-assets/css/custom.css">
<div class="clearfix">&nbsp;</div>
<div class="col-md-12 contact-us no-pad">
<!-- add cart -->
<nav class="adding_carts">
      <div id="sidebar-right" class="push-sidebar push-sidebar-right">
        <div class="cartheader">
            <p class="closecartbutton"> <a href="#"><small onclick="add_carts_close()">CLOSE</small></a> </p>
          <h4 class="cart_heading">CART DETAILS</h4>
      	</div>
			<br>
							
<div class="col-md-12 addtocart-main" id="added_items">
										<div class="col-md-4">
											<img class="group list-group-image item_selected img-responsive" src="<?=base_url()?>assets/users-assets/img/p5.jpg" alt=""
											width="100%">
										<!--	<p class="lunch">Lunch : Home</p>-->
										</div>
										<a class="selected_close" onclick="carts()">x</a>
										<div class="col-md-8 item_description">
											<ul>
												<li>
													<h4>Chikecn biryani,mutton with kima koti ulva charu chapathi</h4>
												</li>
											<!--	<li class="selected_chef_name">
													<p>Chef: Raju</p>
												</li> -->
											</ul>
											<span>
											<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="addtocart_vegicon" alt="image1"/><p style="position:relative;top:-7px;left:20px;font-size:14px" >
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											</span>
											<div class="item_btn">
											
												<span id="add">
													<i class="fa fa-minus font-icon" aria-hidden="true"></i>
												</span>
												<span id="total">0</span>
												<span id="sub">
													<i class="fa fa-plus font-icon" aria-hidden="true"></i>
												</span>
											</div>

											<p id="price" class="item_prices">
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<br>
									</div>
<div class="col-md-12 addtocart-main" id="added_items">
										<div class="col-md-4">
											<img class="group list-group-image item_selected img-responsive" src="<?=base_url()?>assets/users-assets/img/p5.jpg" alt=""
											width="100%">
										<!--	<p class="lunch">Lunch : Home</p>-->
										</div>
										<a class="selected_close" onclick="carts()">x</a>
										<div class="col-md-8 item_description">
											<ul>
												<li>
													<h4>Chikecn biryani,mutton with kima koti ulva charu chapathi</h4>
												</li>
											<!--	<li class="selected_chef_name">
													<p>Chef: Raju</p>
												</li> -->
											</ul>
											<span>
											<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="addtocart_vegicon" alt="image1"/><p style="position:relative;top:-7px;left:20px;font-size:14px" >
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											</span>
											<div class="item_btn">
											
												<span id="add">
													<i class="fa fa-minus font-icon" aria-hidden="true"></i>
												</span>
												<span id="total">0</span>
												<span id="sub">
													<i class="fa fa-plus font-icon" aria-hidden="true"></i>
												</span>
											</div>

											<p id="price" class="item_prices">
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<br>
									</div><div class="col-md-12 addtocart-main" id="added_items">
										<div class="col-md-4">
											<img class="group list-group-image item_selected img-responsive" src="<?=base_url()?>assets/users-assets/img/p5.jpg" alt=""
											width="100%">
										<!--	<p class="lunch">Lunch : Home</p>-->
										</div>
										<a class="selected_close" onclick="carts()">x</a>
										<div class="col-md-8 item_description">
											<ul>
												<li>
													<h4>Chikecn biryani,mutton</h4>
												</li>
											<!--	<li class="selected_chef_name">
													<p>Chef: Raju</p>
												</li> -->
											</ul>
											<span>
											<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="addtocart_vegicon" alt="image1"/><p style="position:relative;top:-7px;left:20px;font-size:14px" >
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											</span>
											<div class="item_btn">
											
												<span id="add">
													<i class="fa fa-minus font-icon" aria-hidden="true"></i>
												</span>
												<span id="total">0</span>
												<span id="sub">
													<i class="fa fa-plus font-icon" aria-hidden="true"></i>
												</span>
											</div>

											<p id="price" class="item_prices">
												<i class="fa fa-inr" aria-hidden="true"></i>100</p>
											
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<br>
									</div> 	
      	<div class="carttotal_display">
            <h4>Total:&nbsp;&nbsp;<i class="fa fa-inr" aria-hidden="true"></i>100</h4>
            <button class="btn btn-orange">Check out</button>
      	</div>
      </div>

    </nav>
	
<!-- add cart -->
	<div class="container-fluid  ">
		<main class="T">
			<div class="text-center">
				<?php
					$today=date('d-m-Y');
					for($i=1;$i<8;$i++){	
						$a = date("d",mktime(0,0,0,date('m'),date('d')+$i,date('Y')));
						$year = date('Y').'-'.date('m').'-'.(date('d')+$i);
						$monthNum  = date("m",mktime(0,0,0,date('m'),date('d')+$i,date('Y')));
						$dateObj   = DateTime::createFromFormat('!m', $monthNum);
						$monthName = $dateObj->format('M');
						$timestamp = strtotime("$year");
						//$day = date('D', $timestamp);
						//$week = date('l', strtotime( $year));
						$week = date('l', strtotime( date('Y-m-d',strtotime('+'.$i.' days'))));
						if($i==1){
							$active="checked";
							$dayName = ($monthName).' '.$a.'<br>'.' Tomm';
						}else{
							$active='';
							$dayName = ($monthName).' '.$a.'<br> '.($week);
						}
				?>
					<input id="tab<?=$i;?>" type="radio" name="tabs" <?=$active;?> value="
					<?php echo date('Y-m-d',strtotime('+'.$i.' days'))?>" class='selected_dates'>
					<label class="date-label" for="tab<?=$i;?>">
						<?php echo $dayName; ?> </label>
					<?php
				}
				?>
				<img src="<?=base_url()?>assets/images/food_items/cart_icon_again.png" class="addtocart_img" onclick="add_carts()" height="36px" width="36px" alt="image1"/><span class="cart_number">0</span>

					<section id="content1">
						<div class="container-fluid">
							<div class="box">

								<div class="row" id="cusine_list">
									<!--  starts here -->
									
									
								   <div class="col-md-12 tabs">
									
										<div class="col-md-12 daily-type">
											<div class="btn-group">
												<a id="grid" class="timing timing_first" style="margin-left:-7px" onclick="view_type(2)">
													<span>Break Fast</span>
												</a>
												<a id="list" class="timing timing_second" onclick="view_type(1)">
													<span>&nbsp;&nbsp;&nbsp;Lunch&nbsp;&nbsp;&nbsp;</span>
												</a>
												<a id="dinner" class="timing timing_third" onclick="view_type(0)">
													<span>&nbsp;&nbsp;&nbsp;Dinner&nbsp;&nbsp;&nbsp;</span>
												</a>
											</div>
										</div>
									</div>
    
									

									<!--  lunch dinner -->

									<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
										<div class="MultiCarousel-inner">
											<?php foreach($cuisine_details as $cusine){?>

											<div class="item">
												<div>
												
													<div class="thumbnail thumbnail_img">
														<a href="#" class='cusines' id="<?php echo $cusine['cusine_id'];?>" lang="<?=$cusine['cusine_name'];?>">
																<img alt="" src="<?php echo base_url().$cusine['cusine_image'];?>">
														</a>
														<p class="chef-name">
															<?=strtoupper($cusine['cusine_name']);?>
														</p>
													</div>
												</div>
											</div>

											<?php } ?>
										</div>
										<!--<button class="btn btn-primary leftLst"><i class="fa fa-chevron-left"></i></button>
										<button class="btn btn-primary rightLst"><i class="fa fa-chevron-right"></i></button>-->
										

										<i class="fa fa-chevron-left leftLst slide_icon"></i>
										<i class="fa fa-chevron-right rightLst slide_icon"></i>
										
									</div>
									

								</div>

								<!-- <div class="cart-details">
								<div class="slide-zoom item-hover"><div class="subscriptionSlideContent lunch"><div class="mainMealText"><p><span class="kitchenText">Chef Name</span> : Test</p><p><span class="kitchenText">Item Name</span> : Testing33</p></div><div class="mealTypeAndLocation">Home : Lunch</div> <div class="mealCost">Rs 0  </div></div></div>
								</div> -->
								<div class="myItemList">

								</div>
								<!-- adress change starts -->



								<!-- adress change ends -->
								<div class="container-fluid">
									<div class="col-md-12 daily-cuisine">

										<!-- search -->

										<!-- search -->
										<div class="clearfix">&nbsp;</div>


										<div class="container-fluid">
											<div class="col-md-12 foodtype">
												<div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
													
													<div class="col-md-12 subCatMenuList-main">
														<div class="list-inline">
															
															<!-- search button -->
															
															
															<div class="clearfix"></div>

														</div>
														<div class="clearfix"></div>
													</div>
													<div class="clearfix"></div>
													<div class="col-md-12 subCatMenuList no-pad item_price">
														<!--product display start-->

													</div>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<!--product end-->

									</div>
									<div class="clearfix"></div>
									<!--product starts new-->
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-10 col-md-offset-2 item_main">
												
													<div class="col-md-4 col-sm-4 item_sub">
														<div class="item_img">


															<img src="<?=base_url()?>assets/images/cusine_images/1506408025South Indian.jpg" class="item_details" alt="image1"
															/>
											
															<span class="dish-rating">4.8&nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i>
															</span>
															<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="veg_icon" alt="image1"/>
															<p class="item_caption">
																2 pulkha, Rice, Tomato Dal, Fry
																Palak Panner, 3 butter naans.2 pulkha, Rice, Tomato Dal, Fry
																Palak Panner, 3 butter naans.
															</p>							
															<p class="chef_name">Chef Name</p>
															<button type="button" class="btn btn-light add_btn" onclick="add()" data-toggle="modal" data-target="#add_address">ADD MEAL</button>
															<strike class="item_price"><i class="fa fa-inr" aria-hidden="true"></i>200</strike>&nbsp;&nbsp;<span class="strike_price"><i class="fa fa-inr" aria-hidden="true"></i>150</span>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 item_sub">
														<div class="item_img">


															<img src="<?=base_url()?>assets/images/cusine_images/1506408025South Indian.jpg" class="item_details" alt="image1"
															/>
											
															<span class="dish-rating">4.8&nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i>
															</span>
															<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="veg_icon" alt="image1"/>
															<p class="item_caption">
																2 pulkha, Rice, Tomato Dal,
																
															</p>							
															<p class="chef_name">Chef Name</p>
															<button type="button" class="btn btn-light add_btn" onclick="add()">ADD MEAL</button>
															<strike class="item_price"><i class="fa fa-inr" aria-hidden="true"></i>200</strike>&nbsp;&nbsp;<span class="strike_price"><i class="fa fa-inr" aria-hidden="true"></i>150</span>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 item_sub">
														<div class="item_img">


															<img src="<?=base_url()?>assets/images/cusine_images/1506408025South Indian.jpg" class="item_details" alt="image1"
															/>
											
															<span class="dish-rating">4.8&nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i>
															</span>
															<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="veg_icon" alt="image1"/>
															<p class="item_caption">
																2 pulkha, Rice, Tomato Dal, Fry
																Palak Panner, 3 butter naans.
															</p>							
															<p class="chef_name">Chef Name</p>
															<button type="button" class="btn btn-light add_btn" onclick="add()">ADD MEAL</button>
															<strike class="item_price"><i class="fa fa-inr" aria-hidden="true"></i>200</strike>&nbsp;&nbsp;<span class="strike_price"><i class="fa fa-inr" aria-hidden="true"></i>150</span>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 item_sub">
														<div class="item_img">


															<img src="<?=base_url()?>assets/images/cusine_images/1506408025South Indian.jpg" class="item_details" alt="image1"
															/>
											
															<span class="dish-rating">4.8&nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i>
															</span>
															<img src="<?=base_url()?>assets/images/food_items/veg_icon.png" class="veg_icon" alt="image1"/>
															<p class="item_caption">
																2 pulkha, Rice, Tomato Dal, Fry
																Palak Panner, 3 butter naans.
															</p>							
															<p class="chef_name">Chef Name</p>
															<button type="button" class="btn btn-light add_btn" onclick="add()">ADD MEAL</button>
															<strike class="item_price"><i class="fa fa-inr" aria-hidden="true"></i>200</strike>&nbsp;&nbsp;<span class="strike_price"><i class="fa fa-inr" aria-hidden="true"></i>150</span>
														</div>
													</div>
													</div>
												
											</div>
												
											</div>
											</div>
											
											<!--product end-->

											<!--product display end-->
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>

								</div>
							</div>
					</section>
		</main>

		</div>
		<div> pop up</div>
		<!-- pop up add address -->
		<div class="modal fade" id="add_address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content address_popup">
			<div class="modal-header">
			
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
				<h4 class="modal-title addres_notfound_text"></h4>
			</div>
				<!-- Begin | Register Form -->
				<div class="modal-body">
				<img src="<?=base_url()?>assets/users-assets/img/Just-Chef.png" class="adress_img" alt="image1"/><p class="text_adress"> No Address Found For Lunch</p>
				</div>
				<div class="modal-footer">
				<form class="signup_form" id="signup_form" style="text-align:center">
				<button class="btn address_btn" type="button" onclick="register()">Add Address</button>
						<div class="col-md-12" id="signupLoader" style="display:none">
						<img src="<?=base_url('assets/users-assets/img/signup-loder.gif')?>" style="height: 40px;margin-top: -30px;align-content: center;text-align: center;">
						<span id="error_passwordmobile" class="red"> Please wait </span>
						</div>
				</div>		
					<div id="user_otp" style="display:none">
					<!--form fields -->
					<form id="mobile_frm" method="post" style="text-align:center">
				<span id="error_mobile_message" class="red"></span>
				<div>
					<div class="col-md-12">
						<input type="hidden" id="add-address-type">
						<div class="custom-input col-md-6">
							<labe class="form-control-placeholder" for="email"></label>
							<input type="text" class="form-control" id="mobile_save" name="mobile_save" placeholder="Address1" />
						</div>
						<div class="custom-input col-md-6">
							<labe class="form-control-placeholder" for="email"></label>
							<input type="" class="form-control" id="mobile_save" name="mobile_save" placeholder="Address2" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="custom-input col-md-6">
							<labe class="form-control-placeholder" for="email"></label>
							<input type="text" name="mobile_otp" id="mobile_otp" class="form-control" value="" placeholder="Area"/>
						</div>
						<div class="custom-input col-md-6">
							<labe class="form-control-placeholder" for="email"></label>
							<input type="text" class="form-control" id="mobile_save" name="mobile_save" placeholder="Pincode" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="custom-input col-md-6">
							<select class="user_select">
								<option>Location</option>
								<option>Hitech</option>
								<option>madhapur</option>
								<option>Gachibowli</option>
							</select>
						</div>
						<div class="custom-input col-md-6">
							<select class="user_select">
								<option>Location</option>
								<option>Hitech</option>
								<option>madhapur</option>
								<option>Gachibowli</option>
							</select>
						</div>
					</div>
					<div class="custom-input col-md-11">
							<label class="form-control-placeholder" for="email"></label>
							<input type="text" class="form-control" style="margin-left:14px" id="mobile_save" name="mobile_save" placeholder="Address" />
							<span class="input-group-btn">
                            <button class="btn address_btn2" type="button">Locate Me</button>
                        	</span>
					</div>
					<div class="col-md-12" style="padding-top:34px">
						<input type="button" class="btn1" value="Add Address" />
					</div>
				</div>
		</div>
		</form>
					<!--form fields -->		
					</div>
				</form>
				<!-- End | Register Form -->
			</div>
		</div>
	</div>
</div>
		<!-- pop up add address -->
		<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<!-- add address to order Modal-->
		<!-- Large modal -->

		<div id="addressModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
		aria-hidden="true">
			Footer
		</div>

		<!--footer section strat -->
		<?php include 'includes/footer.php'; ?>
		<script src="<?=base_url('assets/users-assets/js/index.js')?>"></script>
		<script src="<?=base_url('assets/users-assets/js/cart.js')?>"></script>
		<script>
	function add_carts_close(){
		document.getElementById("sidebar-right").style.display="none";
	}
	function add(){
		document.getElementById("sidebar-right").style.display="block";
	}
	function add_carts(){
		document.getElementById("sidebar-right").style.display="block";
	}
	function carts(){
		alert("image")
		document.getElementById("added_items").style.display="none";
	}
	var count = 0;
	var price = 0;
	$("#add").click(function () {
		alert("hi")
		count = count - 1;
		price = price - 100;
		$("#total").text(count);
		$("#price").text(price);
	})
	$("#sub").click(function () {
		count = count + 1;
		price = price + 100;
		$("#total").text(count);
		$("#price").text(price);
	});
	
			function view_type(id) {
		if (id == 1) {
				
			$("#grid").css({"background":"#FA4E1C","color":"#fff"});
			$("#list").css({"background":"#fff","color":"#FA4E1C"});
			$("#dinner").css({"background":"#FA4E1C","color":"#fff"});
		} else if (id == 0) {

			$("#grid").css({"background":"#FA4E1C","color":"#fff"});
			$("#list").css({"background":"#FA4E1C","color":"#fff"});
			$("#dinner").css({"background":"#fff","color":"#FA4E1C"});
		} else {
		$("#grid").css({"background":"#fff","color":"#FA4E1C"});
			$("#list").css({"background":"#FA4E1C","color":"#fff"});
			$("#dinner").css({"background":"#FA4E1C","color":"#fff"});

		}
	}
		</script>
		<!-- toggle link -->
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<!-- toggle ends -->
