@extends('layouts.app')

@section('content')
<div class="container">
   <section class="row">
       <section class="col-3 p-4">
          <img src="{{$user->profile->profileImage()}}" alt="" class="w-100">
       </section>
       <section class="col-9">
           <section class="d-flex align-items-baseline justify-content-between">
             <section class="d-flex">
                 <section class=" h3 mr-3">{{ $user->username }}</section>
                  <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>

             </section>
               @can('update', $user->profile)
           <a href="{{route('post.create')}}" class="">add new post</a>
            @endcan
           </section>
           <section class="d-flex p-3">
           <section class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</section>
               <section class="pr-5"><strong>255k</strong> followers</section>
               <section class="pr-5"><strong>212</strong> following</section>
           </section>
           <section>
               <strong>{{ $user->profile->title }}</strong>
           </section>
           <section>
              @can('update', $user->profile)
           <a href="{{route('profile.edit',$user->id)}}" class="">Update Profile</a>
               @endcan('update', $user->profile)
           </section>
           <section>
               {{ $user->profile->desciption}}
           </section>
           <section>

               <a href="">{{$user->profile->url ?? 'N/A'}}</a>
           </section>
       </section>
   </section>

   <section class="row pt-4">
           @foreach($user->posts as $post)
       <section class="col-4">
       <a href="{{route('post.show',$post->id)}}">
       <img src="/storage/{{ $post->image}}" alt=""  class="w-100">
       </a>
       </section>
     @endforeach
   </section>
</div>
@endsection
