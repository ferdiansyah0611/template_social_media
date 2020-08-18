<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="template social media by ferdiansyah">
	<title>View Profile</title>
	<link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
    	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
    		background-color: var(--bs-light)!important;
    		border-color: #fff!important;
    	}
    	.name-cover{
  			margin: 2% 36%;z-index: 9;
		}
		.name-cover img{
			height: 160px;
    		max-height: 160px;
		}
		.cover{
  			max-height: 300px;
		}
		.latest-photo.scroll{
  			max-height: 240px;
		}
		.list-like-post{
    		width: 100%;
		}
		.mh-300px{
			max-height: 300px;
		}
		.mh-750px{
			max-height: 750px;
		}
  		/*xs*/
  		@media screen and (min-width: 0px) and (max-width: 576px){
    		#tab_view{
      			font-size: 13px;
    		}
    		#friend-tab{
      			visibility: hidden;
    		}
    		.name-cover{
      			margin-left: 28%;
      			font-size: 14px;
    		}
  		}
  		/*sm*/
  		@media screen and (min-width: 576px) and (max-width: 768px){
    		.name-cover{
      			margin-left: 28%;
      			font-size: 14px;
    		}
  		}
  		@media screen and (min-width: 1200px){
  			.avatar-post{
		  		width: 80px;
			}
  		}
    </style>
</head>
<body>
	<noscript>Your browser does not support javascript!</noscript>
	<div id="app">
	<?php include './template/nav.php';?>
		<div class="pl-3 pr-3 mt-70px">
	        <div class="row">
	        	<div class="position-absolute col-5 col-sm-5 col-lg-3 col-xl-3 name-cover">
	        		<div class="card-body">
	        			<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" class="w-100 border-0 rounded-circle" alt="example" />
	        			<h5 class="card-title text-truncate text-center bg-white text-dark font-weight-bold mb-0 p-1 mt-1">Ferdiansyah</h5>
	        		</div>
	        	</div>
	        	<div class="col-12 cover">
	        		<img id="example" src="./src/media/kelly-repreza-vdsDBby6Tn4-unsplash.jpg" data-rellax-speed="-5" class="rellax img-fluid" alt="example" />
	        	</div>
	        	<div class="col-12 mt-4">
	        		<div class="row">
	        			<div class="col-sm-12 col-md-3 information">
	        				<div class="row">
	        					<div class="col-12">
			        				<div class="card border-0 shadow-sm">
			        					<div class="card-body pb-0">
					        				<h5>Information</h5>
			        					</div>
					        			<div class="dropdown-divider"></div>
					        			<div class="card-body pt-0">
					        				<p class="mb-0 mt-3 text-truncate">
					        					<i class="fas fa-envelope font-weight-bold mr-2 text-info"></i>
					        					<span class="fs-14">ferdif9996@gmail.com</span>
					        				</p>
					        				<p class="mb-0 mt-3 text-truncate">
					        					<i class="fas fa-location-arrow font-weight-bold mr-2 text-danger"></i>
					        					<span class="fs-14">Indonesia</span>
					        				</p>
					        				<p class="mb-0 mt-3 text-truncate">
					        					<i class="fab fa-facebook font-weight-bold mr-2 text-primary"></i>
					        					<span class="fs-14">Ferdi Ferdiansyah</span>
					        				</p>
					        				<p class="mb-0 mt-3 text-truncate">
					        					<i class="fab fa-twitter font-weight-bold mr-2 text-primary"></i>
					        					<span class="fs-14">@ferdi_LexSugar</span>
					        				</p>
					        				<p class="mb-0 mt-3 text-truncate">
					        					<i class="fab fa-whatsapp font-weight-bold mr-2 text-success"></i>
					        					<span class="fs-14">+6285966253416</span>
					        				</p>
					        			</div>
					        		</div>
	        					</div>
	        					<!-- <div class="col-12 mt-1">
			        				<div class="card border-0 shadow-sm">
			        					<div class="card-body pb-0">
					        				<h5>Latest Photo</h5>
			        					</div>
					        			<div class="dropdown-divider"></div>
					        			<div class="card-body pt-0 position-sticky latest-photo scroll overflow-auto">
					        				<div class="row">
					        					<div class="col-12">
					        						<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="img-thumbnail border-0" />
					        					</div>
					        					<button class="btn btn-light">
					        						<span class="position-absolute mr-5">More Photo</span> 
					        						<span class="material-icons ml-5em">arrow_forward_ios</span>
					        					</button>
					        				</div>
					        			</div>
					        		</div>
	        					</div> -->
	        				</div>
	        			</div>
	        			<div class="d-none" id="information-fixed"></div>
	        			<div class="col-sm-12 col-md-9 mt-1 mt-sm-1 mt-lg-0">
			        		<div class="card border-0 shadow-sm">
			        			<div class="card-body">
			        				<ul class="nav nav-tabs border-0 row mb-3" id="tab_view" role="tablist">
										<li class="nav-item col text-center" role="presentation">
										  	<a class="nav-link text-dark active" id="post-tab" data-toggle="tab" href="#post" role="tab" aria-controls="post" aria-selected="true">Post</a>
										</li>
										<li class="nav-item col text-center" role="presentation">
										  	<a class="nav-link text-dark" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
										</li>
										<li class="nav-item col text-center" role="presentation">
										  	<a class="nav-link text-dark" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="false">Photo</a>
										</li>
										<li class="nav-item col text-center" role="presentation">
										  	<a class="nav-link text-dark" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
										</li>
										<li class="nav-item col text-center offset-5 offset-sm-0" role="presentation">
										  	<a class="nav-link text-dark" id="friend-tab" data-toggle="tab" href="#friend" role="tab" aria-controls="friend" aria-selected="false">Friend</a>
										</li>
									</ul>
									<div class="tab-content" id="tab_viewContent">
									  	<div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
		                					<div class="card bg-white mt-2 border-0">
								                <div class="card-body">
								                    <div class="row">
								                        <div class="col-2 text-md-center">
								                            <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" class="rounded-circle avatar-post" alt="example" width="100%" />
								                        </div>
								                        <div class="col-5">
								                            <p class="text-truncate mb-0"><a href="./ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah</a></p>
								                            <span class="p-0 text-truncate text-lowercase text-dark font-weight-light fs-13">12 Jam yg lalu</span>
								                        </div>
								                        <div class="col-5">
								                            <div class="dropdown dropleft float-right position-static">
								                                <a class="btn btn-light rounded dropdown-toggle before-none" href="#" id="dropdownMenuLink3" data-toggle="dropdown" aria-expanded="false">
								                                	<i class="fas fa-ellipsis-v"></i>
								                                </a>
								                                <div class="dropdown-menu dropdown-menu-right shadow border-0" aria-labelledby="dropdownMenuLink3">
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">save</span> 
								                                    	<span class="position-absolute ml-1">Save link</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">remove_circle_outline</span>
								                                    	<span class="position-absolute ml-1">Hide post</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">person_remove</span>
								                                    	<span class="position-absolute ml-1">Unfollow</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">content_copy</span>
								                                    	<span class="position-absolute ml-1">Copy link</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">report</span>
								                                    	<span class="position-absolute ml-1">Report</span>
								                                    </a>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="col-12 text-dark mt-1 fs-15">
								                            Content in here
								                            <div class="row">
								                            	<div class="col">
								                            		<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="img-fluid" />
								                            	</div>
								                            </div>
								                        </div>
								                    </div>
								                </div>
								                <div class="card-footer font-weight-light bg-transparent border-0">
								                	<button type="button" class="text-dark btn border-0" data-toggle="modal" data-target="#modal-like-post">1000 people like this post</button>
								                    <div class="row">
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col">
								                        	<i class="far fa-thumbs-up pl-1"></i>
								                        	1000
								                        </button>
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col" data-toggle="modal" data-target="#modal-comment-post">
								                        	<i class="far fa-comment pl-1"></i>
								                        	10
								                        </button>
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col" data-toggle="modal" data-target="#modal-share-post">
								                        	<i class="far fa-share-square pl-1"></i>
								                        	10
								                        </button>
								                    </div>
								                </div>
		                					</div>
		                					<div class="card bg-white mt-2 border-0">
								                <div class="card-body">
								                    <div class="row">
								                        <div class="col-2 text-md-center">
								                            <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" class="rounded-circle avatar-post" alt="example" width="100%" />
								                        </div>
								                        <div class="col-5">
								                            <p class="text-truncate mb-0"><a href="./ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah</a></p>
								                            <span class="p-0 text-truncate text-lowercase font-weight-light fs-13">12 Jam yg lalu</span>
								                        </div>
								                        <div class="col-5">
								                            <div class="dropdown dropleft float-right position-static">
								                                <span class="btn btn-light rounded dropdown-toggle before-none" id="dropdownMenuLink4" data-toggle="dropdown" aria-expanded="false">
								                                	<i class="fas fa-ellipsis-v"></i>
								                                </span>
								                                <div class="dropdown-menu dropdown-menu-right shadow border-0" aria-labelledby="dropdownMenuLink4">
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">save</span> 
								                                    	<span class="position-absolute ml-1">Save link</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">remove_circle_outline</span>
								                                    	<span class="position-absolute ml-1">Hide post</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">person_remove</span>
								                                    	<span class="position-absolute ml-1">Unfollow</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">content_copy</span>
								                                    	<span class="position-absolute ml-1">Copy link</span>
								                                    </a>
								                                    <a class="dropdown-item" href="#">
								                                    	<span class="material-icons">report</span>
								                                    	<span class="position-absolute ml-1">Report</span>
								                                    </a>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="col-12 mt-1 text-dark fs-15">
								                            Content in here
								                            <div class="row">
								                            	<div class="col">
								                            		<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="img-fluid" />
								                            	</div>
								                            	<div class="col">
								                            		<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="img-fluid" />
								                            	</div>
								                            </div>
								                        </div>
								                    </div>
								                </div>
								                <div class="card-footer font-weight-light bg-transparent border-0">
								                    <button type="button" class="text-dark btn border-0" data-toggle="modal" data-target="#modal-like-post">1000 people like this post</button>
								                    <div class="row">
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col">
								                        	<i class="far fa-thumbs-up pl-1"></i>
								                        	1000
								                        </button>
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col" data-toggle="modal" data-target="#modal-comment-post">
								                        	<i class="far fa-comment pl-1"></i>
								                        	10
								                        </button>
								                        <button type="button" class="btn btn-outline-light text-dark border-0 col" data-toggle="modal" data-target="#modal-share-post">
								                        	<i class="far fa-share-square pl-1"></i>
								                        	10
								                        </button>
								                    </div>
								                </div>
		                					</div>
									  	</div>
									  	<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
									  		<div class="row">
									  			<h5>
									  				<span class="material-icons">notes</span>
									  				<span class="position-absolute ml-1">Biography</span>
									  			</h5>
									  			<p>Hallo this biography</p>
									  			<div class="dropdown-divider"></div>
									  			<h5>
									  				<span class="material-icons">shopping_bag</span>
									  				<span class="position-absolute ml-1">Work</span>
									  			</h5>
									  			<p>This work</p>
									  			<div class="dropdown-divider"></div>
									  			<h5>
									  				<span class="material-icons">school</span>
									  				<span class="position-absolute ml-1">Education</span>
									  			</h5>
									  			<p>This education</p>
									  			<div class="dropdown-divider"></div>
									  		</div>
									  	</div>
									  	<div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab">
									  		<div class="row mt-2">
									  			<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="col-sm-12 col-md-3 img-fluid mt-1 pointer" data-toggle="modal" data-target="#modal-view-photo" />
									  			<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="col-sm-12 col-md-3 img-fluid mt-1 pointer" data-toggle="modal" data-target="#modal-view-photo" />
									  			<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="col-sm-12 col-md-3 img-fluid mt-1 pointer" data-toggle="modal" data-target="#modal-view-photo" />
									  			<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="col-sm-12 col-md-3 img-fluid mt-1 pointer" data-toggle="modal" data-target="#modal-view-photo" />
									  		</div>
									  	</div>
									  	<div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
									  		<video class="col-12" buffered controls>
									  			<source src="./src/media/VID_53340831_082725_052.mp4" type="video/mp4">
									  			Your browser does not support the video tag.
									  		</video>
									  	</div>
									  	<div class="tab-pane fade" id="friend" role="tabpanel" aria-labelledby="friend-tab">
									  		<form class="mt-3 mb-3">
									  			<input type="search" name="search" class="form-control" placeholder="Search friends of 9999 people" />
									  		</form>
									  		<div class="row">
									  			<div class="col-3 border border-light mt-2">
									  				<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
									  				<p class="mt-2 mb-1 text-center text-truncate">Ferdiansyah</p>
									  				<p class="mb-0 text-truncate fs-14">
									  					<i class="fas fa-user-friends pr-1"></i>
									  					15 people
									  				</p>
									  				<p class="mb-1 text-truncate fs-14">
									  					<i class="fas fa-location-arrow pr-1"></i>
									  					United States
									  				</p>
									  				<button type="button" class="btn-sm w-100 btn-primary mb-1">Add friends</button>
									  				<button type="button" class="btn-sm w-100 btn-info">Check Profile</button>
									  			</div>
									  			<div class="col-3 border border-light mt-2">
									  				<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
									  				<p class="mt-2 mb-1 text-center text-truncate">Ferdiansyah</p>
									  				<p class="mb-0 text-truncate fs-14">
									  					<i class="fas fa-user-friends pr-1"></i>
									  					15 people
									  				</p>
									  				<p class="mb-1 text-truncate fs-14">
									  					<i class="fas fa-location-arrow pr-1"></i>
									  					United States
									  				</p>
									  				<button type="button" class="btn-sm w-100 btn-primary mb-1">Add friends</button>
									  				<button type="button" class="btn-sm w-100 btn-info">Check Profile</button>
									  			</div>
									  			<div class="col-3 border border-light mt-2">
									  				<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
									  				<p class="mt-2 mb-1 text-center text-truncate">Ferdiansyah</p>
									  				<p class="mb-0 text-truncate fs-14">
									  					<i class="fas fa-user-friends pr-1"></i>
									  					15 people
									  				</p>
									  				<p class="mb-1 text-truncate fs-14">
									  					<i class="fas fa-location-arrow pr-1"></i>
									  					United States
									  				</p>
									  				<button type="button" class="btn-sm w-100 btn-primary mb-1">Add friends</button>
									  				<button type="button" class="btn-sm w-100 btn-info">Check Profile</button>
									  			</div>
									  			<div class="col-3 border border-light mt-2">
									  				<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
									  				<p class="mt-2 mb-1 text-center text-truncate">Ferdiansyah</p>
									  				<p class="mb-0 text-truncate fs-14">
									  					<i class="fas fa-user-friends pr-1"></i>
									  					15 people
									  				</p>
									  				<p class="mb-1 text-truncate fs-14">
									  					<i class="fas fa-location-arrow pr-1"></i>
									  					United States
									  				</p>
									  				<button type="button" class="btn-sm w-100 btn-primary mb-1">Add friends</button>
									  				<button type="button" class="btn-sm w-100 btn-info">Check Profile</button>
									  			</div>
									  		</div>
									  	</div>
									</div>
			        			</div>
			        		</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- modal -->
	    <div class="modal fade" id="modal-view-photo">
	    	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
	    		<div class="modal-content">
	    			<div class="modal-body">
	    				<img src="./src/media/noah-austin-8dgFesiqvPI-unsplash.jpg" alt="example" class="img-fluid" />
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="modal fade" id="modal-like-post" tabindex="-1" aria-labelledby="modal-like-post-Label" aria-hidden="true">
  			<div class="modal-dialog">
  			  	<div class="modal-content">
  			  	  	<div class="modal-header">
  			  	  	  	<h5 class="modal-title" id="modal-like-post-Label">1000 like</h5>
  			  	  	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  			  	  	  	  	<span aria-hidden="true">&times;</span>
  			  	  	  	</button>
  			  	  	</div>
  			  	  	<div class="modal-body">
  			  	  		<div class="row mb-4">
  			  	  			<div class="col">
  			  	  				<ul class="list-unstyled">
  			  	  					<li class="list-like-post mt-1">
  			  	  						<div class="row">
  			  	  							<div class="col-2">
  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid rounded-circle" style="max-height: 60px;" />
  			  	  							</div>
  			  	  							<div class="col-10 p-0">
  			  	  								<p class="mt-3">
  			  	  									<a href="/ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah</a>
  			  	  								</p>
  			  	  							</div>
  			  	  						</div>
  			  	  					</li>
  			  	  				</ul>
  			  	  			</div>
  			  	  		</div>
  			  	  	</div>
  			  	</div>
  			</div>
		</div>
		<div class="modal fade" id="modal-comment-post" tabindex="-1" aria-labelledby="modal-comment-post-Label" aria-hidden="true">
  			<div class="modal-dialog modal-lg modal-dialog-centered">
  			  	<div class="modal-content">
  			  	  	<div class="modal-header">
  			  	  	  	<h5 class="modal-title" id="modal-comment-post-Label">View</h5>
  			  	  	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  			  	  	  	  	<span aria-hidden="true">&times;</span>
  			  	  	  	</button>
  			  	  	</div>
  			  	  	<div class="modal-body">
  			  	  		<div class="row">
  			  	  			<div class="col-12 col-sm-12 fs-15">
  			  	  				<div class="position-sticky default p-1 text-dark">
	  			  	  				<p>Content in here</p>
									<div class="col-12">
										<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid" />
									</div>
  			  	  				</div>
  			  	  			</div>
  			  	  			<div class="col-12 col-sm-12 p-1">
  			  	  				<div class="position-sticky p-3 default shadow-sm overflow-y-auto mh-750px">
	  			  	  				<ul class="list-unstyled">
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  					<li class="mb-2">
	  			  	  						<div class="row">
	  			  	  							<div class="col-2">
	  			  	  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid" />
	  			  	  							</div>
	  			  	  							<div class="col-10">
	  			  	  								<p class="h5 text-dark">Ferdiansyah</p>
	  			  	  								<p class="mb-2 text-dark">this comment</p>
	  			  	  								<p class="mb-1 fs-12 text-dark">
	  			  	  									At 18:00 11/08/2020
	  			  	  								</p>
	  			  	  								<p>
	  			  	  									<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-thumbs-up"></i> 2
			  			  	  							</button>
			  			  	  							<button class="btn btn-light border-0">
			  			  	  								<i class="far fa-comment"></i> 2
			  			  	  							</button>
	  			  	  								</p>
	  			  	  							</div>
	  			  	  						</div>
	  			  	  					</li>
	  			  	  				</ul>
  			  	  				</div>
  			  	  			</div>
  			  	  		</div>
  			  	  	</div>
  			  	  	<div class="modal-footer border-0">
  			  	  		<div class="row">
  			  	  			<div class="col-12 col-sm-10">
  			  	  				<form>
	  			  	  				<textarea class="form-control mb-1 mh-300px" rows="3" placeholder="Type here to comment"></textarea>
	  			  	  			</form>
  			  	  			</div>
  			  	  			<div class="col-12 col-sm-2">
  			  	  				<button class="btn btn-primary w-100 h-100">
  			  	  					<span class="material-icons fs-30">send</span>
  			  	  				</button>
  			  	  			</div>
  			  	  		</div>
  			  	  	</div>
  			  	</div>
  			</div>
		</div>
		<div class="modal fade" id="modal-share-post" tabindex="-1" aria-labelledby="modal-share-post-Label" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-centered">
  			  	<div class="modal-content">
  			  	  	<div class="modal-header">
  			  	  	  	<h5 class="modal-title" id="modal-share-post-Label">Share to</h5>
  			  	  	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  			  	  	  	  	<span aria-hidden="true">&times;</span>
  			  	  	  	</button>
  			  	  	</div>
  			  	  	<div class="modal-body">
  			  	  		<div class="row text-center fs-30">
  			  	  			<div class="col">
  			  	  				<a href="/social-media">
  			  	  					<i class="fab fa-facebook"></i>
  			  	  				</a>
  			  	  			</div>
  			  	  			<div class="col">
  			  	  				<a href="/social-media">
  			  	  					<i class="fab fa-twitter"></i>
  			  	  				</a>
  			  	  			</div>
  			  	  			<div class="col">
  			  	  				<a href="/social-media">
  			  	  					<i class="fab fa-instagram"></i>
  			  	  				</a>
  			  	  			</div>
  			  	  			<div class="col">
  			  	  				<a href="/social-media">
  			  	  					<i class="fab fa-pinterest"></i>
  			  	  				</a>
  			  	  			</div>
  			  	  		</div>
  			  	  	</div>
  			  	</div>
  			</div>
		</div>
	</div>
	<script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
    <script src="./src/vendor/lavosted/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script src="./src/js/app.js" type="text/javascript"></script>
    <script>
    	var rellax = new Rellax('.rellax');
    	lavaInstance.informationFixed({
    		visibility : '.information',
    		instanceFixed : '#information-fixed',
    		top_plus : '60px',
    		top_min : '-500px',
    		zIndex_plus : '999',
    		zIndex_min : '-100',
    	})
    </script>
</body>
</html>