@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{$posts->title}}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <div>
        <img src="{{asset('images/'. $posts->image_path)}}" alt="">
    </div>
    <span class="text-gray-500"> 
    By <span class="font-bold italic text-gray-800"> {{$posts->user->name}} </span>
    ,Created on {{date('jS M Y',strtotime($posts->updated_at))}}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-bold italic">
            {{$posts -> summary}}
    </p>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{$posts -> description}}
    </p>
    <h4>Display Comments</h4>
  
  @include('blog.commentsDisplay', ['comments' => $posts->comments, 'post_id' => $posts->id])

  <hr />
  <h4>Add comment</h4>
  <form method="post" action="{{ route('comments.store') }}">
      @csrf
      <div class="form-group">
          <textarea class="form-control" name=body></textarea>
          <input type=hidden name=post_id value="{{ $post->id }}" />
      </div>
      <div class="form-group">
          <input type=submit class="btn btn-success" value="Add Comment" />
      </div>
  </form>
</div>

@endsection