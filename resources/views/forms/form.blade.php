<x-layout title="Normal Form">
    <hgroup>
        <h1 id="hgroup-example">Normal Form</h1>
        <p>How to create and handle forms in laravel</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{ route('form.post') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" id="name">
        @error('name')
            <p style="color: red;font-weight:400; font-size:14px;">{{ $message }}</p>
        @enderror
        <label for="email">Email</label>
        <input name="email" type="email" value="{{ old('email') }}" id="email">
        @error('email')
            <p style="color: red;font-weight:400; font-size:14px;">{{ $message }}</p>
        @enderror
        <label for="password">Password</label>
        <input name="password" type="password" value="{{ old('password') }}" id="password">
        @error('password')
            <p style="color: red;font-weight:400; font-size:14px;">{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

</x-layout>
