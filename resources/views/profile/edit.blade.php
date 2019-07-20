@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
     <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Profile title') }}</label>

      <div class="col-md-6">
          <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required value="{{old('title') ?? $user->profile->title}}"  autofocus>

          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Profile Description') }}</label>

      <div class="col-md-6">
          <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description') ?? $user->profile->description}}" name="description" required  >

          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('Profile url') }}</label>

      <div class="col-md-6">
          <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" required   value="{{old('url') ?? $user->profile->url}}">

          @error('url')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

    <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __(' Profile Image') }}</label>
          <div class="col-md-6">
          <input type="file"  class="form-control-file  @error('image') is-invalid @enderror" id="image" name="image" alt="">
          </div>

           @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

      <div class="form-group row">
        <button class="btn btn-primary" type="submit">
           Save Profile
        </button>
        </div>
    </form>
</div>
@endsection
