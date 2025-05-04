@extends('layouts.app')

@section('content')
  <!-- Page Header-->
  @include('backends.header')
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Create New Features</p>
                <form method="POST" action="{{ Route("backends.update",$feature->id) }}">
                  @csrf
                  @method("PUT")
                  <div class="mb-3">
                    <label for="title" class="form-label">Feature ID</label>
                    <input type="text" readonly class="form-control" value="{{ $feature->id }}" id="title" aria-describedby="title">
                  </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" required name="title" class="form-control" value="{{ $feature->title }}" id="title" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                      <label for="img_path" class="form-label">Image path</label>
                      <input type="text" required name="image_path" value="{{ $feature->image_path }}" class="form-control" id="img_path">
                    </div>
                    <div class="mb-3">
                        <label for="order" class="form-label">Order</label>
                        <input type="text" required name="order" value="{{ $feature->order }}" class="form-control" id="order" aria-describedby="order">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
</main>
@endsection