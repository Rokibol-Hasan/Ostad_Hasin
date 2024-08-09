<x-layout title="Normal Form">
    <hgroup>
        <h1 id="hgroup-example">New Form</h1>
        <p>How to create and handle forms in laravel</p>
      </hgroup>

      <form enctype="multipart/form-data" action="{{route('form.newpost')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input  name="email" id="email">
        <br>
        <button type="submit">Submit</button>

        @if(session('success'))
        <p>{{session('success')}}</p>
        @endif
        @if ($errors->any())
           @foreach ($errors->all() as $error)
               <p>{{ $error }}</p>
           @endforeach
        @endif



      </form>
    
</x-layout>