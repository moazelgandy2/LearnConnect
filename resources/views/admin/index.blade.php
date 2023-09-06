@extends('admin.layouts.sideBar')
@section('content')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Admin Dashboard</h1>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-face'></i>
                <span class="text">
                    <h3>{{ $countActive }}</h3>
                    <p>Total students</p>
                </span>
            </li>
            <li>
                <i class="bx bx-play"></i>
                <span class="text">
                    <h3>{{ $videosCount }}</h3>
                    <p>Videos avilable</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>Latest students</h3>
                </div>
                <ul class="todo-list">
                    <li class="completed">
                        <p>Video</p>
                        <i class="bx bx-dots-vertical-rounded" style="display: none"></i>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
