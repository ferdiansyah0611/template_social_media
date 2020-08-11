<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="template social media by ferdiansyah">
	<title>Chatting</title>
	<link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
    	body{
    		overflow-x: hidden;
    	}
    	.nav.nav-tabs > li > a.active{
    		border: 0;
    		background-color: #00000014;
    	}
    	.card.chat{
    		height: 35em;
    		max-height: 35em;
    	}
    	.maxH-33em{
    		max-height: 33em;
    	}
    	.maxH-28em{
    		max-height: 25em;
    	}
    	.bg-gray{
    		background-color: var(--bs-gray);
    	}
    	@media screen and (min-width: 0px) and (max-width: 576px){
    		input[name="search"]{
    			font-size: 12px;
    		}
    		#tabChat{
    			font-size: 12px;
    			margin-left: -100%;
    			position: fixed;
    			transition: 0.1s all ease-in;
    			visibility: hidden;
    		}
    		.chat-message > .chat-me > p{
    			font-size: 11px !important;
    		}
    		.chat-message > .chat-friends > p{
    			font-size: 11px !important;
    		}
    		.profile-chat{
    			z-index: 999;
    			top: 0;
    			left: 0;
    			width: 100%;
    		}
    	}
    </style>
</head>
<body>
	<noscript>Your browser does not support javascript!</noscript>
	<div id="app">
	<?php include './template/nav.php';?>
		<!-- list profile right click -->
		<div class="dropdown-menu mt-3 shadow border-0 listnav position-fixed" aria-labelledby="dropdown_right" style="transition: all 0.2s ease 0s;">
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">person</span>
	            	<span class="position-absolute ml-2">Check Profile</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">archive</span>
	            	<span class="position-absolute ml-2">Archive Chat</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">delete</span>
	            	<span class="position-absolute ml-2">Delete Chat</span>
	        	</a>
            </li>
        </div>
        <!-- chat message right click -->
		<div class="dropdown-menu mt-3 shadow border-0 chatmenume position-fixed" aria-labelledby="dropdown_right" style="transition: all 0.2s ease 0s;">
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">person</span>
	            	<span class="position-absolute ml-2">Check Profile</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">archive</span>
	            	<span class="position-absolute ml-2">Archive Chat</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">delete</span>
	            	<span class="position-absolute ml-2">Delete Chat</span>
	        	</a>
            </li>
        </div>
        <!-- chat message right click -->
		<div class="dropdown-menu mt-3 shadow border-0 chatmenufriends position-fixed" aria-labelledby="dropdown_right" style="transition: all 0.2s ease 0s;">
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">person</span>
	            	<span class="position-absolute ml-2">Check Profile</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">archive</span>
	            	<span class="position-absolute ml-2">Archive Chat</span>
	            </a>
            </li>
            <li>
	            <a class="dropdown-item" href="#">
	            	<span class="material-icons">delete</span>
	            	<span class="position-absolute ml-2">Delete Chat</span>
	        	</a>
            </li>
        </div>
		<div class="pl-3 pr-3 mt-70px">
			<div id="clickMenuTab" class="position-fixed shadow bg-light p-3 pointer d-block d-sm-none" style="z-index: 9999;border-bottom-right-radius: 90%;border-top-right-radius: 90%;top: 45%;left: 0;transition: 1s all;">
				<span class="material-icons text-primary">people</span>
			</div>
			<div id="closeMenuTab" class="position-fixed shadow p-3 pointer" style="margin-left: -100%;z-index: 9999;border-bottom-right-radius: 90%;border-top-right-radius: 90%;top: 45%;left: 0;transition: 1s all;">
				<span class="material-icons">close</span>
			</div>
	        <div class="row">
	        	<div class="col-12 p-0">
	        		<div class="card chat border-0">
	        			<div class="card-body pr-0 pl-0 pt-0 pb-0">
	        				<div class="row">
		        				<div class="col-sm-3 col-xl-3 col-lg-3 col-md-3 d-none d-sm-block bg-white shadow-sm">
					        		<form id="search-contact">
					        			<input type="search" name="search" class="form-control mb-1 rounded-lg mt-2 ml-1 border-0" placeholder="Search contact, chat and more..." />
					        		</form>
		        				</div>
		        				<div class="col-12 col-sm-9 col-xl-9 col-lg-9 col-md-9 position-xs-absolute p-2 bg-white shadow-sm profile-chat">
		        					<div class="row">
		        						<div class="col">
		        							<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" class="rounded-circle float-left" width="50px" height="40px" />
		        							<span class="ml-3 float-left mt-2 text-dark pointer">Ferdiansyah</span>
		        							<div class="dropdown position-absolute" style="top: 0;right: 0;">
		        								<a class="dropdown-toggle after-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false" style="margin-right: 20px;font-size: 37px;">
		        									<span class="material-icons">more_vert</span>
		        								</a>
  												<ul class="dropdown-menu shadow border-0 mt-3" aria-labelledby="dropdownMenuLink" style="margin-left: -160px">
  												  <li>
											            <a class="dropdown-item" href="#">
											            	<span class="material-icons">person</span>
											            	<span class="position-absolute ml-2">Check Profile</span>
											            </a>
										            </li>
										            <li>
											            <a class="dropdown-item" href="#">
											            	<span class="material-icons">archive</span>
											            	<span class="position-absolute ml-2">Archive Chat</span>
											            </a>
										            </li>
										            <li>
											            <a class="dropdown-item" href="#">
											            	<span class="material-icons">delete</span>
											            	<span class="position-absolute ml-2">Delete Chat</span>
											        	</a>
										            </li>
  												</ul>
		        							</div>
		        						</div>
		        					</div>
		        				</div>
	        				</div>
	        				<div class="position-sticky default overflow-y-auto col-12 col-sm-3 col-xl-3 col-lg-3 col-md-3 float-left bg-white maxH-28em d-sm-block">
				        		<ul class="nav nav-tabs d-block border-0 p-0" id="tabChat" role="tablist">
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark active" id="friends-1-tab" data-toggle="tab" href="#friends-1" role="tab" aria-controls="friends-1" aria-selected="true">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 1</span>
			  						  		<span class="badge bg-info text-white position-absolute" style="right: 17px;top: 17px">3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="friends-2-tab" data-toggle="tab" href="#friends-2" role="tab" aria-controls="friends-2" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2">
			  						  		<span>Friends 2</span>
			  						  	</a>
			  						</li>
			  						<li class="nav-item" role="presentation">
			  						  	<a class="nav-link text-truncate text-dark" id="fiends-3-tab" data-toggle="tab" href="#fiends-3" role="tab" aria-controls="fiends-3" aria-selected="false">
			  						  		<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle img-fluid col-2" />
			  						  		<span>Friends 3</span>
			  						  	</a>
			  						</li>
								</ul>
	        				</div>
	        				<div class="position-sticky default overflow-y-auto col-12 col-sm-9 col-xl-9 col-lg-9 col-md-9 float-left pl-1 maxH-28em parent-chat bg-white bg-gradient">
								<div class="tab-content col-12" id="tabChatContent">
								  	<div class="tab-pane fade show active" id="friends-1" role="tabpanel" aria-labelledby="friends-1-tab">
								  		<div class="container mt-sm-3" style="margin-top: 4.5em;">
								  			<div class="row">
								  				<div class="col-12">
								  					<div class="float-right">
								  						<div class="row">
								  							<div class="chat-message">
								  								<div class="chat-me bg-primary bg-gradient text-light p-2 shadow-sm">
								  									<p class="mb-0 fs-15 text-white">Hello my friends</p>
								  								</div>
								  								<p class="fs-12 mt-1 text-dark float-right">15:00 05-08-2020</p>
								  							</div>
								  						</div>
								  					</div>
								  				</div>
								  				<div class="col-12">
								  					<div class="float-right">
								  						<div class="row">
								  							<div class="chat-message">
								  								<div class="chat-me bg-primary bg-gradient text-light p-2 shadow-sm">
								  									<p class="mb-0 fs-15 text-white">Hello my friends</p>
								  								</div>
								  								<p class="fs-12 mt-1 text-dark float-right">15:00 05-08-2020</p>
								  							</div>
								  						</div>
								  					</div>
								  				</div>
								  				<div class="col-12">
								  					<div class="float-left">
								  						<div class="row">
								  							<div class="chat-message">
								  								<img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid col-6" />
								  								<p class="fs-12 mt-1">15:00 05-08-2020</p>
								  							</div>
								  						</div>
								  					</div>
								  				</div>
								  			</div>
								  		</div>
								  	</div>
								  	<div class="tab-pane fade" id="friends-2" role="tabpanel" aria-labelledby="friends-2-tab">2...</div>
								  	<div class="tab-pane fade" id="fiends-3" role="tabpanel" aria-labelledby="fiends-3-tab">3...</div>
								</div>
	        				</div>
	        			</div>
	        			<div class="card-footer bg-white text-light">
	        				<div class="row">
								<div id="editor" class="col-12 col-sm-10" style="max-height: 94px">Message..</div>
	        					<div class="col-12 col-sm-2 mt-2 mt-sm-0">
	        						<div class="row">
	        							<div class="col-12">
			        						<div class="form-file">
		  										<input type="file" class="form-file-input" id="customFile">
		  										<label class="form-file-label" for="customFile">
		    										<span class="form-file-button w-100">
		    											<span class="material-icons">attachment</span>
		    											<span class="position-absolute">Attach file</span>
													</span>
		  										</label>
											</div>
	        								
	        							</div>
	        							<div class="col mt-2">
			        						<button type="button" class="btn-sm btn-primary w-100" style="padding-top: 10px;">
			        							<span class="material-icons">send</span>
			        						</button>
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
	<script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
    <script src="./src/vendor/lavosted/main.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/balloon/ckeditor.js"></script>
    <script src="./src/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">lavaInstance.chatPage({
    	ckeditorInit: '#editor',
    	listChatTab: {
    		query: '#tabChat',
    		parentTab: 'div.position-sticky.default.overflow-y-auto.col-12.col-sm-3.col-xl-3.col-lg-3.col-md-3.float-left.maxH-28em.d-none.d-sm-block',
    		onClick: '#clickMenuTab',
    		clickClose: '#closeMenuTab'
    	}
    })
	</script>
</body>
</html>