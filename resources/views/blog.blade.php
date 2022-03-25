@extends('layout.app')


@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Blog</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Our Blog</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
        </div>
        <div class="row">
          @foreach($blogList as $bloglists)
          <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">{{ $bloglists->title }}</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>{{ $bloglists->description}}</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="{{ url('singleBlog/'.$bloglists->id)}}">Read More <i class="fa fa-angle-right"></i></a>
            </div>




          @endforeach
        
           
           
            <div class="col-lg-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center mb-4">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
