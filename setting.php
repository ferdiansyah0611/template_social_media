<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="template social media by ferdiansyah">
    <title>Setting</title>
    <link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <style type="text/css">
    .notification li:hover {
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
                <div class="accordion" id="accordion_setting">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0" id="heading_general">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse_general" aria-expanded="true" aria-controls="collapse_general">
                                    General
                                </button>
                            </h2>
                        </div>
                        <div id="collapse_general" class="collapse show" aria-labelledby="heading_general" data-parent="#accordion_setting">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="d-inline-block text-center">
                                            <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid rounded-circle col-3"/>
                                            <p class="mb-0 text-left text-danger fs-12">* Max 2 MB</p>
                                            <div class="form-file mb-3">
                                                <input type="file" class="form-file-input" id="image_upload_post" accept=".jpg,.png,.jpeg" multiple/>
                                                <label class="form-file-label" for="image_upload_post">
                                                    <span class="form-file-text text-left">Change photo profiles</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="label_name">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="label_name" />
                                            <label class="mt-1" for="label_email">Email</label>
                                            <input type="email" name="email" class="form-control" id="label_email" />
                                            <label class="mt-1" for="label_location">Location</label>
                                            <input type="text" name="location" class="form-control" id="label_location" />
                                        </div>
                                        <div class="col">
                                            <label for="label_born">Born</label>
                                            <input type="date" name="born" class="form-control" id="label_born" />
                                            <label class="mt-1" for="label_gender">Gender</label>
                                            <div class="input-group">
                                                <select name="gender" class="form-select" id="label_gender">
                                                    <option selected>Choose gender...</option>
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                    <option value="">Transgender</option>
                                                </select>
                                            </div>
                                            <label class="mt-1" for="label_password">Password</label>
                                            <input type="password" name="" class="form-control" id="label_password" />
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Please checked to aggree changes in your account
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="submit" class="btn btn-danger">Reset forms</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-header bg-white border-0" id="heading_security">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse_security" aria-expanded="false" aria-controls="collapse_security">
                                    Security
                                </button>
                            </h2>
                        </div>
                        <div id="collapse_security" class="collapse" aria-labelledby="heading_security" data-parent="#accordion_setting">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-header bg-white border-0" id="heading_privacy">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse_privacy" aria-expanded="true" aria-controls="collapse_privacy">
                                    Account
                                </button>
                            </h2>
                        </div>
                        <div id="collapse_privacy" class="collapse" aria-labelledby="heading_privacy" data-parent="#accordion_setting">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit
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