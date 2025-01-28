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
            @if(session('loginId'))
                <?php
                    // Ambil data pengguna berdasarkan ID yang ada di session
                    $user = \App\Models\User::find(session('loginId'));
                ?>
                <div class="auth-buttons">
                <span class="user-name">{{ $user->name }}</span>
                <!-- Tombol logout dengan <ul> dan <li> -->
                <ul class="logout-menu">
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    </li>
                </ul>
                </div>
                
            @else
                <!-- Tautan Login jika pengguna belum login -->
                <div class="auth-buttons">
                    <a href="/login" class="login">Login</a>
                    <a href="/signup" class="signup">Sign Up</a>
                </div>
            @endif
        </div>
    </nav>
</header>