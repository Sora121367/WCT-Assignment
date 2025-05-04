@extends('layouts.app')

@section('content')
  <!-- Page Header-->
  @include('backends.header')
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-4">Create New Features</p>
                    <a href="{{ Route("backends.create") }}">
                        <button type="button" class="btn btn-primary">+ New</button>
                    </a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image_path</th>
                        <th scope="col">Title</th>
                        <th scope="col">Order</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($features as $feature )
                      <tr>
                        <th scope="row">{{$feature->id}}</th>
                        <td>{{$feature->image_path}}</td>
                        <td>{{$feature->title}}</td>
                        <td>{{$feature->order}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ Route("backends.edit",$feature->id) }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{ route('backends.delete', $feature->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                              
                              </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</main>
@endsection