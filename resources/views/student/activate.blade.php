@extends('student.layouts.sideBar')
@section('content')
    <main>
        <div class="head-title code_not_exist active_sucessed code-done">
            <div class="left">
                <h1>Activate</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active-m" href="home">Home</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Activate</a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="box-info">

            <li class="code-input">
                <i class='bx bx-credit-card-front'></i>
                <span class="text">
                    <h3>Your Code Here</h3>
                </span>
                <form class="formm-input" action="{{ route('activation.process') }}" method="POST">
                    @csrf
                    <input name="activation_code" class="code" type="text" placeholder="Code.."></input>
                    <button type="submit" id="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: blue;transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                    </button>
                </form>
            </li>
        </ul>
    </main>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    @if (session('alert'))
        <script>
            Swal.fire({
                icon: "{{ session('alert.type') }}",
                title: "{{ session('alert.title') }}",
                text: "{{ session('alert.message') }}",
                showConfirmButton: false,
                timer: 5000
            });
        </script>
    @endif

    <!-- MAIN -->
@endsection
