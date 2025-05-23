@extends('layouts.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('theme/assets/img/about-bg.jpg') }}')">
          <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>          <div class="container position-relative px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-md-10 col-lg-8 col-xl-7">
                      <div class="page-heading">
                          <h1>About Me</h1>
                          <span class="subheading">This is what I do.</span>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- Main Content-->
      <main class="mb-4">
          <div class="container px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-md-10 col-lg-8 col-xl-7">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                  </div>
              </div>
          </div>
          <div class="text-center my-4">
            <h1>Features</h1>
          </div>
          
          <div class="container">
            <div class="row row-cols-4 gx-4">
                @foreach ($features as $feature )
                    <div class="col border rounded p-3">
                        <img src="{{ asset( $feature->image_path ) }}" alt="">
                        <span>{{$feature->title}}</span>
                    </div>
                @endforeach
            </div>
          </div>
          
          
      </main>
@endsection