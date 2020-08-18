<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="template social media by ferdiansyah">
	<title>Notification</title>
	<link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <style type="text/css">
        .notification li:hover{
            background-color: #00000014;
            transition: 0.3s all;
        }
    </style>
</head>
<body>
    <noscript>Your browser does not support javascript!</noscript>
    <div id="app">
    <?php include './template/nav.php';?>
    <!-- list profile right click -->
    <div class="dropdown-menu mt-3 shadow border-0 listnav position-fixed transition-02s" aria-labelledby="dropdown_right">
        <li>
            <a class="dropdown-item" href="#">
                <span class="material-icons">mark_email_read</span>
                <span class="position-absolute ml-2">Read</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#">
                <span class="material-icons">archive</span>
                <span class="position-absolute ml-2">Archive</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#">
                <span class="material-icons">delete</span>
                <span class="position-absolute ml-2">Delete</span>
            </a>
        </li>
    </div>
    <div class="pl-3 pr-3 mt-70px">
        <div class="col-12 col-sm-8 offset-sm-2 col-xl-6 offset-xl-3">
            <div class="card bg-white border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0 font-weight-bold text-dark lt-space-2px">Notification</h5>
                </div>
                <div class="card-body overflow-y-auto default mh-29em">
                    <div class="row mt-1 mb-1">
                        <div class="col">
                            <ul class="list-unstyled mb-0 notification">
                                <?php 
                                for ($i=0; $i < 100; $i++) {  ?>
                                    <li class="pointer animate__animated animate__backInLeft">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./src/media/process.png" alt="example" class="img-fluid bg-white p-1" />
                                            </div>
                                            <div class="col-10">
                                                <p class="h5 mb-1 text-dark">System 
                                                    <span class="font-weight-normal float-right fs-12">07:00 12/08/2020</span>
                                                </p>
                                                <a class="mb-0 text-decoration-none text-dark fs-13">
                                                    Safina has like your postSafina has like your postSafina has like your post
                                                    Safina has like your postSafina has like your postSafina has like your post
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                               <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <button type="button" class="w-100 fs-13 btn btn-primary read-notification-all">Read all</button>
                        </div>
                        <div class="col-6 col-sm-4">
                            <button type="button" class="w-100 fs-13 btn btn-danger remove-notification-all">Remove all</button>
                        </div>
                        <div class="col-12 col-sm-4 mt-2 mt-sm-0">
                            <button type="button" class="w-100 fs-13 btn btn-light archive-notification-all">Archive all</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="./src/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
        lavaInstance.notificationPage({
            notification: {
                query: '.notification li',
                dropdown: ''
            }
        })
    </script>
</body>
</html>