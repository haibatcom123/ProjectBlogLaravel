@extends('layouts.app')
@section('content')
<head>
<style>
.background-image{
    background-image: url('https://static.wixstatic.com/media/5b44bf_317f722d308c4426a6ba01e3c61bf072~mv2_d_4206_2366_s_2.jpg/v1/fill/w_1000,h_563,al_c,q_90,usm_0.66_1.00_0.01/5b44bf_317f722d308c4426a6ba01e3c61bf072~mv2_d_4206_2366_s_2.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 500px;
}
</style>
</head>
<body>
<div class="background-image grid grid-cols-1 m-auto" >
        <div class="flex text-gray-100 pt-10">
            <div class = "m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class ="sm text-yellow-100 text-5xl uppercase font-bold
                text-shadow-md pb-14">

                Do you want to discovery the world?
                {{__('language.title')}}
                </h1>
                <!-- <a href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 py-4
                font-bold text-xl uppercase">
                </a> -->
                <a href="/blog" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100
                text-xs font-extrabold py-3 px-5 rounded-3xl">
                Read more</a>
            </div>
        </div>
    </div>

 
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://i.pinimg.com/564x/98/f5/a2/98f5a2aa6c644a77d007f9f1ceae64a5.jpg" wide="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block ">
        <h2 class ="text-3xl font-extrabold text-gray-600">
            Can you belive that you can creat your own life in your dream?
        </h2>
        <p class = "py-8 text-gray-500 text-s">
            Dear all, I have a change to creat a beautiful world that no more 
            war, no more disaster and disease, where people can live happily together forever 
        </p>
        <p class = "font-extrabold text-gray-600 text-s pb-9">
            I can tell you about my story. That the way I can enjoy my dream. And the adventure of 
            myself to make a perfect world. It seem to be no real but it is a dream, you can imagine
            all the thing you can, it belong to your creation ...
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 
        text-s font-extrabold py-3 px-8 rounded-3xl"> Find out more</a>
        </div>
    </div>

    <div class= "text-center p-15 bg-black text-white">
        <h2 class="text-2xl pd-5 text-l">
            I'm an expert in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Fontend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="upercase text-s text-gray-400">
        Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
        Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Dear all, I have a change to creat a beautiful world that no more 
             war, no more disaster and disease, where people can live happily together forever 
            
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class ="flex bg-yellow-700 text-gray-100 pt-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class ="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                I can tell you about my story. That the way I can enjoy my dream. And the adventure of 
                myself to make a perfect world. It seem to be no real but it is a dream, you can imagine
                all the thing you can, it belong to your creation ... 
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100
                text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More</a>
            </div>          
        </div>
        <div>
            <img src="https://i.pinimg.com/564x/98/f5/a2/98f5a2aa6c644a77d007f9f1ceae64a5.jpg" wide="700" alt="">
        </div>
    </div>
</body>

    

@endsection

