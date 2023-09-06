@extends('admin.layouts.sideBar')
@section('content')
    <main>
        <div class="head-title not_active">
            <div class="left">
                <h1>Codes</h1>
                <ul class="breadcrumb">
                    <li>
                        <a class="active-m" href="admin">Home</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Codes</a>
                    </li>
                </ul>
            </div>

        </div>

        <ul class="box-info">
            <li>
                <i class='bx bx-check-circle'></i>
                <span class="text">
                    <h3>{{ $countGenerated }}</h3>
                    <p>Total active codes</p>
                </span>
            </li>
            <li>
                <i class='bx bx-x-circle'></i>
                <span class="text">
                    <h3>{{ $countGenerated_in }}</h3>
                    <p>Total invailed codes</p>
                </span>
            </li>
        </ul>
        <div class="table-data">
            <div class="order">
                <div id="video-names-table">
                    <div class="input-group" style="display: flex; align-items: center;">
                        <form action="{{ url('/generate-codes') }}" method="POST">
                            @csrf
                            <label for="number_of_codes">Number of Codes:</label>
                            <input class="form-control codes-input" type="number" name="number_of_codes" required>
                            <button class=" codes-btn">Create
                                Codes</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="show-codes">
                <table>
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Activated By</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($codes as $code)
                            <tr>
                                <td>{{ $code->code }}</td>
                                <td class="{{ $code->status === 'Valid' ? 'valid-status' : 'invalid-status' }}">
                                    {{ $code->status }}
                                </td>
                                <td>{{ $code->activated_by }}</td>
                                <td>{{ $code->created_by }}</td>
                                <td>{{ $code->created_at }}</td>
                                <td>
                                    <div class="actions">
                                        <form action="{{ route('activate-code', ['id' => $code->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-success">Activate</button>
                                        </form>
                                        <form action="{{ route('deactivate-code', ['id' => $code->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-danger">Deactivate</button>
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
