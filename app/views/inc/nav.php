<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?= URLROOT ?>" class="nav-link px-2 link-secondary"><?= SITENAME ?></a></li>
        <li><a href="<?= URLROOT ?>pages/about" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control" placeholder="Search...">
    </form>
    <div class="dropdown text-end">
        <?php //if(){ ?>
        <!-- <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Projects</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= URLROOT ?>users/logout">Sign out</a></li>
        </ul> -->
        <?php //}else{} ?>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?= URLROOT ?>users/login" class="nav-link px-2 link-secondary">Sign up</a></li>
        </ul>
        <?php //} ?>
    </div>
</div>