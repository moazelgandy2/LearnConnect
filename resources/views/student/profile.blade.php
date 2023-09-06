<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ auth()->user()->name }}">

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ auth()->user()->email }}">

    <!-- Add other fields for editing -->

    <button type="submit">Update Profile</button>
</form>
<h1>{{ auth()->user()->status }}</h1>
