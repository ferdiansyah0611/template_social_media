<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="template social media by ferdiansyah">
	<title>Friends Request</title>
	<link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <style type="text/css">
        .read{
            background-color: #00000014;
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
        <div class="col-12 col-sm-8 offset-sm-2 col-xl-4 offset-xl-4">
            <div class="card bg-white border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0 font-weight-bold text-dark lt-space-2px">Friends Request 
                        <span class="badge bg-danger">29</span>
                    </h5>
                </div>
                <div class="card-body overflow-y-auto default mh-29em">
                    <div class="row mt-1 mb-1">
                        <div class="col">
                            <ul class="list-unstyled mb-0 notification">
                                <?php 
                                for ($i=0; $i < 30; $i++) {  ?>
                                    <li class="animate__animated animate__backInLeft">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid bg-white p-1 rounded-circle" />
                                            </div>
                                            <div class="col-10">
                                                <p class="h5 mb-1 text-dark">Name <?=$i;?> <span class="font-weight-normal float-right fs-12">07:00 12/08/2020</span></p>
                                                <a class="mb-0 text-decoration-none text-dark fs-13">
                                                    Invite you to be friends.
                                                </a>
                                                <p>
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                    <button type="button" class="btn btn-danger">Decline</button>
                                                </p>
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
                        <div class="col">
                            <button type="button" class="w-100 fs-13 btn btn-primary read-notification-all">Confirm all</button>
                        </div>
                        <div class="col">
                            <button type="button" class="w-100 fs-13 btn btn-danger remove-notification-all">Decline all</button>
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