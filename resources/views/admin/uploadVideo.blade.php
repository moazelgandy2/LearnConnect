@extends('admin.layouts.sideBar')
@section('content')
    <main>
        <style>
            input[type="file"] {
                display: none;
            }
        </style>
        <div class="head-title not_active">
            <div class="left">
                <h1>Videos</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active-m" href="home">Home</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Upload Video</a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="table-data">
            <div class="order" style="width: 100%;">
                <div class="forms-upload">
                    <form class="upload-form" action="{{ route('upload-video') }}" method="POST"
                        enctype="multipart/form-data" style="width: 100%;">
                        @csrf
                        <div class="card">
                            <label
                                class="custom-file-upload btn btn-primary"style="cursor: pointer;>
                            <input type="file"
                                name="video" id="video/*" required />
                            Chose Video
                            </label>
                        </div>
                        <br>
                        <label for="title">Video Title:</label>
                        <input disabled="input" type="text" name="title" required>
                        <br>
                        <button disabled type="submit" class="btn-primary btn" style="cursor: pointer;">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
