@extends('layouts.app')

@section('content')
<div class="container">
   <section class="row">
       <section class="col-3 p-4">
           Image Logo
       </section>
       <section class="col-9">
           <section>
               <h1>{{ $user->username }}</h1>
           </section>
           <section class="d-flex p-3">
               <section class="pr-5"><strong>153</strong> posts</section>
               <section class="pr-5"><strong>255k</strong> followers</section>
               <section class="pr-5"><strong>212</strong> following</section>
           </section>
           <section>
               <strong>{{ $user->profile->title }}</strong>
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
       <section class="col-4">
           <img src="" alt=""  class="w-100">
       </section>
       <section class="col-4">
           <img src="" alt="" class="w-100">
       </section>
       <section class="col-4">
           <img src="" alt="" class="w-100">
       </section>
   </section>
</div>
@endsection
