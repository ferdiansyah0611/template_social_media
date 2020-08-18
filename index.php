<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media</title>
    <link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <style type="text/css">
        .next-story{
            position: absolute;
            background: var(--bs-white);
            right: -5px;
            top: 90px;
            cursor: pointer;
            z-index: 9;
        }
        .next-story span{
            font-size: 40px;
        }
        .previous-story{
            position: absolute;
            background: var(--bs-white);
            left: -5px;
            top: 90px;
            cursor: pointer;
            z-index: 9;
        }
        .previous-story span{
            font-size: 40px;
        }
        .story::-webkit-scrollbar{
            width: 5px;
            background-color: #cecece;
            display: none;
        }
        .story::-webkit-scrollbar-thumb{
            width: 5px;
            background-color: #cecece;
            display: none;
        }
        .story{
            position: sticky;
            display: flex;
            z-index: 9;
            overflow-x: auto;
        }
        .story img{
            width: 153.63px;
            max-width: 153.63px;
            cursor: pointer;
            padding: 5px;
        }
        .story button{
            position: absolute;
            right: 0;
            bottom: 0;
            padding: 28px;
        }
        .story-textarea{
            opacity: 1;
            padding: 20px;
            background: var(--bs-white);
            border: 0;
            color: var(--bs-dark);
        }
    </style>
</head>
<body>
    <noscript>Your browser does not support javascript!</noscript>
    <div id="app">
    <?php include './template/nav.php';?>
        <div class="mt-5 pl-3 pr-3">
            <div class="row">
                <div class="col-12 col-md-3 d-none d-xl-block p-0 mt-3">
                    <?php include './template/sideleft.php';?>
                </div>
                <div class="col-12 col-md-10 col-xl-6 offset-md-1 offset-xl-0 mt-4 mt-md-0">
                    <div class="card border-0 shadow-sm mt-2">
                        <div class="card-body">
                            <div class="story pb-2 bg-white">
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="image" class="col-3 float-left" data-toggle="modal" data-target="#modal-story" />
                            </div>
                            <div class="next-story rounded-circle shadow-sm">
                                <span class="material-icons p-1">chevron_right</span>
                            </div>
                            <div class="previous-story rounded-circle shadow-sm">
                                <span class="material-icons p-1">chevron_left</span>
                            </div>
                            <form>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm">
                                        <option selected>Choose privacy...</option>
                                        <option value="">Only me</option>
                                        <option value="">Fiends</option>
                                        <option value="">Public</option>
                                    </select>
                                </div>
                                <textarea class="form-control mt-2" placeholder="What do you think now ?" rows="4"></textarea>
                                <div class="form-file form-file-sm mt-2">
                                    <input type="file" class="form-file-input" id="image_upload_post" accept=".jpg,.png,.jpeg" multiple/>
                                    <label class="form-file-label" for="image_upload_post">
                                        <span class="form-file-text">Choose file image...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                </div>
                                <div class="form-file form-file-sm mt-2">
                                    <input type="file" class="form-file-input" id="video_upload_post" accept=".mp4" multiple/>
                                    <label class="form-file-label" for="video_upload_post">
                                        <span class="form-file-text">Choose file video...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                </div>
                                <div class="dropdown-divider"></div>
                                <button type="submit" class="btn btn-primary w-100">Post now</button>
                            </form>
                        </div>
                    </div>
                    <div class="card bg-white mt-2 border-0 shadow-sm animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-md-center">
                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" class="rounded-circle avatar-post" alt="example" width="100%" />
                                </div>
                                <div class="col-5">
                                    <p class="text-truncate mb-0">
                                        <a href="./ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah</a>
                                    </p>
                                    <span class="p-0 text-truncate text-lowercase text-dark font-weight-light fs-13">12 Jam yg lalu</span>
                                </div>
                                <div class="col-5">
                                    <div class="dropdown dropleft float-right">
                                        <a class="btn btn-light rounded dropdown-toggle before-none" href="#" name="dropdownMenuLink3" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <div class="col-12 mt-1 text-dark fs-15">
                                    Content in here
                                    <div class="row">
                                        <div class="col">
                                            <img src="./src/media/kelly-repreza-vdsDBby6Tn4-unsplash.jpg" alt="example" class="img-fluid" />
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
                    <div class="card bg-white mt-2 border-0 shadow-sm animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-md-center">
                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle avatar-post" width="100%" />
                                </div>
                                <div class="col-5">
                                    <p class="text-truncate mb-0">
                                        <a href="./ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah</a>
                                    </p>
                                    <span class="p-0 text-truncate text-lowercase text-dark font-weight-light fs-13">12 Jam yg lalu</span>
                                </div>
                                <div class="col-5">
                                    <div class="dropdown dropleft float-right">
                                        <a class="btn btn-light rounded dropdown-toggle before-none" href="#" name="dropdownMenuLink3" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <div class="col-12 mt-1 text-dark fs-15">
                                    Content in here
                                    <div class="row">
                                        <div class="col">
                                            <img src="./src/media/kelly-repreza-vdsDBby6Tn4-unsplash.jpg" alt="example" class="img-fluid" />
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
                    <div class="col-12 text-center mt-2">
                        <button type="button" class="text-decoration-none text-dark font-weight-bold btn btn-light">Click to load 15 more data</button>
                    </div>
                    <footer class="card bg-white mt-2 border-0 shadow-sm animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-left">
                                    <i class="far fa-copyright fs-20"></i>
                                    <span class="ml-2 font-weight-bold">Copyright reserved 2020</span>
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-right">Design by 
                                    <a target="blank" href="https://github.com/ferdiansyah0611" class="font-weight-bold text-decoration-none">
                                        <span>Ferdiansyah</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="mt-3 col-12 col-md-3 d-none d-xl-block">
                    <div class="row">
                    <?php include './template/sideright.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-story" tabindex="-1" aria-labelledby="modal-story-Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-story-Label">Ferdiansyah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 pb-2">
                            <img src="./src/media/kelly-repreza-vdsDBby6Tn4-unsplash.jpg" alt="example" class="img-fluid" />
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-sm-10">
                                    <form>
                                        <textarea type="text" name="comment" placeholder="Type here to comment" class="form-control story-textarea"></textarea>
                                    </form>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <button type="submit" class="btn btn-primary w-100 h-100">
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
    <script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
    <script src="./src/vendor/lavosted/main.js"></script>
    <script src="./src/js/app.js" type="text/javascript"></script>
    <script>
        lavaInstance.theme('light')
        lavaInstance.indexPage()
    </script>
</body>
</html>