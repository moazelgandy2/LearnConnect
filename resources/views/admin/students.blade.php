@extends('admin.layouts.sideBar')
@section('content')
    <main>
        <div class="head-title not_active">
            <div class="left">
                <h1>Students</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active-m" href="admin">Home</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Students</a>
                    </li>
                </ul>
            </div>

        </div>

        <ul class="box-info">
            <li>
                <i class='bx bx-check-circle'></i>
                <span class="text">
                    <h3>{{ $countActive }}</h3>
                    <p>Total active accounts</p>
                </span>
            </li>
            <li>
                <i class='bx bx-x-circle'></i>
                <span class="text">
                    <h3>{{ $countInActive }}</h3>
                    <p>Total invailed accounts</p>
                </span>
            </li>
        </ul>
        <div class="table-data">
            <div class="order" style="text-align: center;">
                <h1>Students list</h1>
            </div>
            <div class="show-codes">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td class="{{ $user->status === 'Active' ? 'valid-status' : 'invalid-status' }}">
                                    {{ $user->status }}</td>
                                <td>
                                    <div class="actions" style="display: flex;">
                                        <form style="margin-right:20px;"
                                            action="{{ route('activate-student', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            <button class="btn-success" type="submit">Activate</button>
                                        </form>
                                        <form style="margin-right:20px;"
                                            action="{{ route('deactivate-student', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            <button class="btn-danger" type="submit">DeActivate</button>
                                        </form>
                                        <form action="{{ route('edit-student', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            <button class="btn-primary btn" type="submit">Edit student info</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
