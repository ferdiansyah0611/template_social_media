<nav class="navbar navbar-light bg-white fixed-top shadow-sm pl-0 pl-md-5 pr-0 pr-md-5 d-none d-xl-block">
    <div class="col-4 float-left d-none d-md-none d-xl-block">
        <a href="#" class="float-left col-2 p-0 text-dark" title="Logo">
            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 118 94" role="img">
                <title>Bootstrap</title>
                <path 
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                    fill="currentColor">
                </path>
            </svg>
        </a>
        <div class="col-9 float-left">
            <form class="form-search">
                <input type="search" name="search" aria-label="search" aria-describedby="icon-1" list="datalistOptions" class="form-control nav-search" placeholder="What do you search" />
                <datalist id="datalistOptions">
                    <option value="Friends 1">
                    <option value="Friends 2">
                    <option value="Friends 3">
                    <option value="Friends 4">
                    <option value="Friends 5">
                </datalist>
                <div class="opacity-search-none"></div>
                <div class="position-fixed bg-white d-none col-10 offset-1 left-0 search-data" style="top: 80px;z-index: 99;">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col">
                                    <h5 class="modal-title" id="modal-story-Label">Search : </h5>
                                </div>
                                <div class="col text-right">
                                    <button type="button" class="close close-search" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-1">
                                        <select class="form-select" aria-label=".form-select-sm">
                                            <option selected>Choose time...</option>
                                            <option value="">Latest</option>
                                            <option value="Latest">Older</option>
                                            <option value="">Random</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-1">
                                        <select class="form-select" aria-label=".form-select-sm">
                                            <option selected>Choose filtering...</option>
                                            <option value="">People</option>
                                            <option value="">Page</option>
                                            <option value="">Group</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="position-sticky default overflow-auto p-3" style="max-height: 430px;">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="h5 mb-0">People :</p>
                                            <div class="row">
                                                <?php
                                                for ($i=0; $i < 4; $i++) { ?>
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
                                                <?php }
                                                ?>
                                                <div class="col-12 text-center mt-2">
                                                    <button type="button" class="text-decoration-none text-dark font-weight-bold btn btn-light">Click to load 15 more data</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="col-12 mt-2">
                                            <p class="h5 mb-0">Pages :</p>
                                            <div class="row">
                                                <?php
                                                for ($i=0; $i < 4; $i++) { ?>
                                                <div class="col-3 border border-light mt-2">
                                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
                                                    <p class="mt-2 mb-1 text-center text-truncate">Ferdiansyah</p>
                                                    <p class="mb-0 text-truncate fs-14">
                                                        <i class="fas fa-user-friends pr-1"></i>
                                                        15 followers
                                                    </p>
                                                    <p class="mb-1 text-truncate fs-14">
                                                        <i class="fas fa-location-arrow pr-1"></i>
                                                        United States
                                                    </p>
                                                    <button type="button" class="btn-sm w-100 btn-primary mb-1">Follow</button>
                                                    <button type="button" class="btn-sm w-100 btn-info">Check Pages</button>
                                                </div>
                                                <?php }
                                                ?>
                                                <div class="col-12 text-center mt-2">
                                                    <button type="button" class="text-decoration-none text-dark font-weight-bold btn btn-light">Click to load 15 more data</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="col-12 mt-2">
                                            <p class="h5 mb-0">Group :</p>
                                            <div class="row">
                                                <?php
                                                for ($i=0; $i < 4; $i++) { ?>
                                                <div class="col-3 border border-light mt-2">
                                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid mt-1" />
                                                    <p class="mt-2 mb-1 text-center text-truncate">Laravel Indonesia <?=$i;?></p>
                                                    <p class="mb-0 text-truncate fs-14">
                                                        <i class="fas fa-user-friends pr-1"></i>
                                                        15 members
                                                    </p>
                                                    <p class="mb-1 text-truncate fs-14">
                                                        <i class="fas fa-location-arrow pr-1"></i>
                                                        United States
                                                    </p>
                                                    <button type="button" class="btn-sm w-100 btn-primary mb-1">Enter The Group</button>
                                                    <button type="button" class="btn-sm w-100 btn-info">Check Group</button>
                                                </div>
                                                <?php }
                                                ?>
                                                <div class="col-12 text-center mt-2">
                                                    <button type="button" class="text-decoration-none text-dark font-weight-bold btn btn-light">Click to load 15 more data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-12 col-xl-4 float-left text-center icon-24 p-0">
        <div class="dropdown">
        <a href="./" name="a" class="nav-link d-none d-xl-inline-block active pb-0 text-center">
            <span class="material-icons text-primary">web</span>
        </a>
            <a href="#" class="nav-link d-none d-xl-inline-block dropdown-toggle after-none pb-0 text-center" id="friends_request" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons text-primary">people</span>
                <span class="badge bg-danger position-absolute fs-12">2</span>
            </a>
            <div class="dropdown-menu mt-3 p-2 border-0 shadow bg-white" aria-labelledby="friends_request">
                <div class="col-12">
                    <ul class="list-unstyled position-sticky friend-request">
                        <li class="pt-1">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid rounded-circle"/>
                                </div>
                                <div class="col-9">
                                    <a href="/ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah invite you to be friends</a>
                                    <p>
                                        <button class="btn-sm btn-primary border-0">Confirm</button>
                                        <button class="btn-sm btn-danger border-0">Decline</button>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="pt-1">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="img-fluid rounded-circle"/>
                                </div>
                                <div class="col-9">
                                    <a href="/ferdiansyah" class="text-decoration-none text-dark">Ferdiansyah invite you to be friends</a>
                                    <p>
                                        <button class="btn-sm btn-primary border-0">Confirm</button>
                                        <button class="btn-sm btn-danger border-0">Decline</button>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="./chat" name="a" class="nav-link d-none d-xl-inline-block pb-0 text-center">
                <span class="material-icons text-primary">chat</span>
            </a>
            <a href="./notification" name="a" class="nav-link d-none d-xl-inline-block pb-0 text-center">
                <span class="material-icons text-primary">notifications_none</span>
            </a>
        </div>
    </div>
    <div class="col-4 float-left d-none d-md-none d-xl-block text-right">
        <div class="dropdown dropdown-nav-right open">
            <a href="#" class="dropdown-toggle text-decoration-none text-dark" id="dropdown_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle"/> Ferdiansyah
            </a>
            <div class="dropdown-menu mt-3 shadow border-0" aria-labelledby="dropdown_menu">
                <a class="dropdown-item" href="./view-profile"><i class="fas fa-user mr-3"></i> Profile</a>
                <a class="dropdown-item" href="./setting.php"><i class="fas fa-cog mr-3"></i> Setting</a>
                <a class="dropdown-item" href="#" onclick="javascript:confirm('Do you want exit from application ?')"><i class="fas fa-sign-out-alt mr-3"></i> Logout</a>
            </div>
        </div>
    </div>
</nav>
<div class="fixed-top bg-white shadow-sm d-block d-xl-none">
    <div class="row text-center">
        <a href="./" class="nav-link fs-20 col active">
            <i class="far fa-newspaper text-primary"></i>
        </a>
        <a href="./chat.php" class="nav-link fs-20 col">
            <i class="far fa-comment-alt text-primary"></i>
        </a>
        <a href="./notification.php" class="nav-link fs-20 col">
            <i class="far fa-bell text-primary"></i>
        </a>
        <span href="#" class="nav-link fs-20 col pointer" id="sidebar">
            <i class="fas fa-bars text-primary"></i>
        </span>
    </div>
    <!-- sidebar-menu -->
    <div class="opacity-sidebar"></div>
    <div class="sidebar-menu bg-white">
        <div class="col-12 h-100 p-0">
            <div class="position-sticky overflow-y-auto default menu-overflow">
                <ul class="list-unstyled ul-menu-mobile">
                    <li>
                        <div class="dropdown">
                            <a href="#" class="nav-link text-dark dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="profile" class="rounded-circle sidebar-profile" />
                                <span class="font-weight-normal">Ferdiansyah</span>
                            </a>
                            <ul class="dropdown-menu shadow border-0 sidebar-profile-list" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="./view-profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="./setting.php">Setting</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php 
                    for ($i=2; $i < 22; $i++) { ?>
                    <li>
                        <span data-target="#multiCollapseExample<?= $i;?>" class="nav-link text-dark" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample<?= $i;?>">
                            <span class="material-icons fs-30">people_alt</span>
                            <span class="position-absolute ml-14px mt-1">Pages</span>
                        </span>
                        <div class="collapse multi-collapse shadow-sm" id="multiCollapseExample<?= $i;?>">
                            <ul class="list-unstyled menu-mobile-ul">
                                <li>
                                    <a href="" class="text-dark nav-link">
                                        <span class="material-icons fs-30">people_alt</span>
                                        <span class="text-decoration-none position-absolute ml-14px mt-1">Pages 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-dark nav-link">
                                        <span class="material-icons fs-30">people_alt</span>
                                        <span class="text-decoration-none position-absolute ml-14px mt-1">Pages 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>