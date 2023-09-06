@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/student/css/style.css') }}" />

    <title>Hi</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <i class="bx bxs-smile"></i>
            <span class="text">Hello</span>
        </a>
        <ul class="side-menu top">
            <li class="sidebar-link" data-page="admin">
                <a href="admin">
                    <i class='bx bx-cog'></i>
                    <span class="text">Admin</span>
                </a>
            </li>
            <li class="sidebar-link" data-page="students">
                <a href="students">
                    <i class='bx bxs-face'></i>
                    <span class="text">Students</span>
                </a>
            </li>
            <li class="sidebar-link" data-page="codes">
                <a href="codes">
                    <i class='bx bx-barcode'></i>
                    <span class="text">Codes</span>
                </a>
            </li>
            <li class="sidebar-link" data-page="codes">
                <a href="adminVideos">
                    <i class='bx bxs-videos'></i>
                    <span class="text">Manage videos</span>
                </a>
            </li>
            <li class="sidebar-link" data-page="upload">
                <a href="upload">
                    <i class='bx bx-upload'></i>
                    <span class="text">Upload video</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li class="sidebar-link" data-page="profile">
                <a href="profile">
                    <i class='bx bx-user'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a class="logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bx bxs-log-out-circle"></i>
                    <span class="text"> {{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class="bx bx-menu"></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search..." />
                    <button type="submit" class="search-btn">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden />
            <label for="switch-mode" class="switch-mode"></label>

        </nav>
        <!-- NAVBAR -->
        @yield('content')
    </section>
    <!-- CONTENT -->

    <script src="{{ asset('assets/student/js/script.js') }}"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyAoK3eHPQ7GK-rzYg9OHhI-XRbsHBnKsps",
            authDomain: "moaz-6ea79.firebaseapp.com",
            databaseURL: "https://moaz-6ea79.firebaseio.com",
            projectId: "moaz-6ea79",
            storageBucket: "moaz-6ea79.appspot.com",
            messagingSenderId: "523328892706",
            appId: "1:523328892706:web:99b251c945ffdc1c967f7b",
            measurementId: "G-NM90PEN8XL"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script>

</body>

</html>
