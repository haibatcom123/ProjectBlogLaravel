@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Post
        </h1>
    </div>
</div>

<div class= "sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gay-200">
    <div>
        <img src="https://i.pinimg.com/564x/98/f5/a2/98f5a2aa6c644a77d007f9f1ceae64a5.jpg" alt="">
    </div>
    <div>
        <h2 class=" text-gray-700 font bold text-5xl pb-4">
            Learn how to make the dream come true
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Code With Truong</span>,1 day ago

        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        In summary, if your application will be accessed using a browser and you are building a monolithic Laravel application, your application will use Laravel's built-in authentication services
        </p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Reading More</a>
    </div>

</div>
@endsection('content')