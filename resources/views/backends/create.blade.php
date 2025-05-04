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
                <form method="POST" action="{{ Route("backends.store") }}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name="title" required class="form-control" id="title" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                      <label for="image_path" class="form-label">Image path</label>
                      <input type="text" required name="image_path" class="form-control" id="image_path">
                    </div>
                    <div class="mb-3">
                        <label for="order" class="form-label">Order</label>
                        <input type="text" required name="order" value="1" class="form-control" id="order" aria-describedby="order">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
            </div>
        </div>
    </div>
</main>
@endsection