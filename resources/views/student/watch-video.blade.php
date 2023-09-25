@extends('student.layouts.sideBar')
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
                        <a class="active-m" href="adminVideos">Videos</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a style="font-size: small;" class="active" href="">{{ str_replace('.mp4', '', $name) }}</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div id="video-names-table" style="width:100%; postion:relative;" class="content-container">
                <iframe
                    src="https://iframe.mediadelivery.net/embed/{{$libraryId}}/{{ $url }}?autoplay=false&loop=false&muted=false&preload=false"
                    loading="lazy" style="border:none;height:100%;width:100%;"
                    allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true">
                </iframe>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
