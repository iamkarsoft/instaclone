@extends('layouts.app')

@section('content')
    <div class="container">

      @foreach($posts as $post)
          <section class="row mb-3">
        <section class="col-8">
          <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </section>
        <section class="col-4">
          <section>
            <section>
              <section class="d-flex aligh-items-center">
                <section class="pr-3">
                  <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" alt="" style="max-width:25px">
                </section>
                <h5><a href="{{route('profile.show',$post->user->id)}}" class="mr-2">{{$post->user->username}}</a></h5>
                  <button class="btn btn-sm btn-primary">Follow</button>

              </section>
            </section>
            <hr>
            <p><a href="{{route('profile.show',$post->user->id)}}">{{$post->user->username}}</a>&nbsp;{{$post->caption}}</p>
          </section>
        </section>
      </section>
      @endforeach
    </div>
@endsection
