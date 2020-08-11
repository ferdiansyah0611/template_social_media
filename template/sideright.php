<div class="position-fixed col-2">
    <div class="position-sticky scroll animate__animated animate__backInRight" style="max-height: 37em;height: 37em;margin-left: -14px;">
        <h6 class="p-3 text-dark">
            <i class="fas fa-user pr-3"></i> My Pages
        </h6>
        <?php for ($i=0; $i < 20; $i++) { ?>
            <a href="" class="nav-link p-3 text-dark text-decoration-none">
                <i class="fas fa-user pr-3"></i> Pages 1
            </a>
        <?php } ?>
    </div>
</div>
<div class="position-fixed col-1" style="right: 0;">
    <div class="position-sticky scroll animate__animated animate__backInRight" style="max-height: 37em;height: 37em;">
        <ul class="list-unstyled list-online">
            <?php
            for ($i=0; $i < 20; $i++) { ?>
                <li class="pt-2 pointer">
                    <img src="./src/media/steve-halama-T9A31lqrXnU-unsplash.jpg" alt="example" class="rounded-circle w-100" />
                </li>
            <?php } ?>
        </ul>
    </div>
</div>