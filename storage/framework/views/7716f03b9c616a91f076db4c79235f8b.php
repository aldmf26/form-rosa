<style>
    .text-color {
        color: #25396F;
    }
</style>
<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block badge bg-primary">
                <i class="fa-solid fa-bars fs-5"></i>
            </a>

            <a href="#" class="d-none text-color ms-2 burger-btn d-block">
                <i class="text-color fa-solid fa-calendar-days fs-5"></i>

                <span class="text-color ms-2">
                    <?php echo e(\Carbon\Carbon::now()->locale('id_ID')->translatedFormat('l, j F Y')); ?>

                </span>
                |
                <i class="text-color fa-solid fa-clock"></i>
                <span>
                    <?php echo e(\Carbon\Carbon::now()->locale('id_ID')->translatedFormat('H:i')); ?>

                </span>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0"><?php echo e(strtoupper(Auth::user()->name)); ?></h6>
                                <p class="mb-0 text-sm text-success">
                                    
                                    <?php
                                        $idSubscription = auth()->user()->business->subscription_id;
                                    ?>
                                    <?php if($idSubscription == 1): ?>
                                        <span class="badge bg-info">Gratis</span>
                                    <?php elseif($idSubscription == 2): ?>
                                        <span class="badge bg-primary">Bulanan</span>
                                    <?php elseif($idSubscription == 3): ?>
                                        <span class="badge bg-success">Tahunan</span>
                                    <?php endif; ?>
                                    |
                                    <?php echo e(ucwords(auth()->user()->roles[0]->name)); ?>

                                </p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="<?php echo e(Auth::user()->profile_photo_url); ?>">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Langganan aktif sampai: <br> <?php echo e(tanggalId(auth()->user()->business->subscription_end)); ?></h6>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>"><i
                                    class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                            <li>
                                <a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                    <?php echo e(__('API Tokens')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\laragon\www\kasirok\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>