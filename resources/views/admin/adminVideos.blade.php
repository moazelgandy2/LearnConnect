@extends('admin.layouts.sideBar')
@section('content')
    <main>
        <div class="head-title not_active">
            <div class="left">
                <h1>Videos</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active-m" href="home">Home</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Videos</a>
                    </li>
                </ul>
            </div>

        </div>

        <ul class="box-info">
            <li>
                <i class='bx bx-play'></i>
                <span class="text">
                    <h3>{{ $videosCount }}</h3>
                    <p>Total videos</p>
                </span>
            </li>
        </ul>
        <div class="table-data" style="display: flex; flex-direction:row; width:100%;">
            @foreach ($videos as $video)
                <div style=" display:flex; flex-direction:column; text-align:center;">
                    <div class="text" style="width: 100%;">
                        <h5 style="word-wrap: break-word;">{{ str_replace('.mp4', '', $video['title']) }}</h5>
                    </div>
                    <img width="auto" height="300" class="img"
                        src="https://vz-c16c6517-0a0.b-cdn.net/{{ $video['guid'] }}/thumbnail.jpg?v=1692890155"
                        alt="">
                    <div class="forms"
                        style="display: flex; flex-direction:row; justify-content:center; align-items:center;">


                        <form action="{{ route('watch-video') }}" method="GET" style="margin:10px 10px  0 0">
                            @csrf

                            <input style="cursor: pointer;" type="hidden" name="guid" value="{{ $video['guid'] }}">
                            <input style="cursor: pointer;" type="hidden" name="title" value="{{ $video['title'] }}">
                            <button class="btn " style="cursor: pointer;" type="submit">Watch Video</button>
                        </form>
                        <form action="{{ route('delete-video', ['id' => $video['guid']]) }}" method="POST"
                            style="margin-top:10px; ">
                            @csrf
                            @method('DELETE') <!-- Use the DELETE method through a POST request -->
                            <button class="btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <!-- MAIN -->
@endsection
