@extends('student.layouts.sideBar')
@section('content')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Home</h1>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class="bx bx-play"></i>
                <span class="text">
                    <h3>+1 houre</h3>
                    <p>Content avilable</p>
                </span>
            </li>
            <li>
                <i class="bx bx-book"></i>

                <span class="text">
                    <h3>3</h3>
                    <p>Exams avilable</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>Latest videos</h3>
                </div>
                <ul class="todo-list">
                    @foreach ($videos as $video)
                        <li class="completed">
                            <p>{{ $video['title'] }}</p>
                            <form action="{{ route('watch-video') }}" method="GET">
                                @csrf
                                <input style="cursor: pointer;" type="hidden" name="guid" value="{{ $video['guid'] }}">
                                <input style="cursor: pointer;" type="hidden" name="title" value="{{ $video['title'] }}">
                                <button style=" background-color:none;" type="submit"><i class="bx bx-play"></i></button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
