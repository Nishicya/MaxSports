<header class="header">
    <nav>
        <a href="#" class="logo">MAX SPORTS</a>
        <ul>
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">ABOUT</a></li>
        </ul>
        <div class="user-info">
            <?php if(session('loginId')): ?>
                <?php
                    // Ambil data pengguna berdasarkan ID yang ada di session
                    $user = \App\Models\User::find(session('loginId'));
                ?>
                <div class="auth-buttons">
                <span class="user-name"><?php echo e($user->name); ?></span>
                <!-- Tombol logout dengan <ul> dan <li> -->
                <ul class="logout-menu">
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    </li>
                </ul>
                </div>
                
            <?php else: ?>
                <!-- Tautan Login jika pengguna belum login -->
                <div class="auth-buttons">
                    <a href="/login" class="login">Login</a>
                    <a href="/signup" class="signup">Sign Up</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header><?php /**PATH C:\xampp\htdocs\rekap itho\olah_store\resources\views/fe/nav.blade.php ENDPATH**/ ?>