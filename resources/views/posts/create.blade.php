@extends('layouts.app')

@section('content')
<section class="container">
<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf

     <div class="form-group row">
      <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>

      <div class="col-md-6">
          <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" required  autofocus>

          @error('caption')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

    <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
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
              Add New Post
        </button>
        </div>
    </form>

</section>
@endsection
