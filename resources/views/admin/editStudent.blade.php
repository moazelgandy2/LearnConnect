@extends('admin.layouts.sideBar')
@section('content')
    <!-- MAIN -->
    <main>


        <div class="table-data">
            <div class="">
                <div class="head">
                    <a href="/students">
                        <li>Back</li>
                    </a>
                    <h3>Edit Student</h3>
                </div>
                <div class="forms-student">
                    <form action="{{ route('save-student', ['id' => $user->id]) }}" method="POST" style="width: 100%;">
                        @csrf
                        <div class="input-group form-input">
                            <label for="name">Name :</label>
                            <input name="name" type="text" value="{{ $user->name }}">
                        </div>
                        <div class="input-group">
                            <label for="email">Email : </label>
                            <input name="email" type="text" value="{{ $user->email }}">
                        </div>
                        <div class="input-group">
                            <label for="status">Status : </label>
                            <select name="status" id="status">
                                <option value="Active">Activate</option>
                                <option value="notactive">Deactivate</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="created_at">Created at :</label>
                            <input disabled name="created_at" type="text" value="{{ $user->created_at }}">
                        </div>
                        <button style="margin-top: 20px" type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <div class="delete">
                        <form action="{{ route('delete-student', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger" type="submit"> Delete </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
