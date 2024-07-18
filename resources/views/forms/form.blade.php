<x-layout title="Normal Form">
    <hgroup>
        <h1 id="hgroup-example">Normal Form</h1>
        <p>How to create and handle forms in laravel</p>
      </hgroup>

      <form enctype="multipart/form-data" action="{{route('form.post')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input  name="email" id="email">
        <label for="file">Profie Picture</label>
        <input type="file" name="profile_picture" id="file">
        <button type="submit">Submit</button>
        {{-- {{ session('profile_picture') }} --}}

          @if(session('name'))
            <p> {{session('name')}} </p>
            @endif
          @if(session('email'))
            <p> {{session('email')}} </p>
            @endif

            @if(session('profile_picture'))
            <img src="{{session('profile_picture')}}" alt="Profile Picture">
            @endif

      </form>
    
</x-layout>