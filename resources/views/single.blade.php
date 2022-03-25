@extends('layout.app')

@section('content')


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Detail Page</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Detail Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <img class="img-fluid mb-4" src="img/carousel-1.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 100px; height: 100px;">
                    <span>{{ $data->blogDate}}</span>
                    <!-- <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <span>2045</span> -->
                </div>
                <div class="pl-3">
                    <h1 class="font-weight-bold mb-3">{{ $data->title}}</h1>
                    <div class="d-flex">
                        <span class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</span>
                        <span class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</span>
                        <span class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</span>
                    </div>
                </div>
            </div>
            <p>{{ $data->description}}</p>
           
            <h2 class="mb-4 font-weight-bold">Est dolor lorem et ea</h2>
            <img class="w-50 float-left mr-4 mb-3" src="img/blog-1.jpg" alt="Image">
           
            <h3 class="mb-4 font-weight-bold">Est dolor lorem et ea</h3>
            <img class="w-50 float-right ml-4 mb-3" src="img/blog-2.jpg" alt="Image">
   
        </div>
        <div class="col-12 pt-4">
            <div class="media bg-secondary text-white mb-4 p-5">
                <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle p-3 bg-dark" style="width:150px;">
                <div class="media-body">
                    <h4 class="text-primary mb-3">John Doe</h4>
                    <p class="m-0">Consetetur elitr erat vero sanctus labore dolor ipsum et diam, tempor dolores eos
                        dolor consetetur lorem ipsum, ipsum accusam ipsum sit no ut est. Gubergren ea ipsum erat
                        consetetur magna kasd amet est, voluptua magna elitr ea sit justo sed sanctus. Accusam duo duo
                        sit sit. Ut eos ipsum sed takimata sed dolor justo, elitr no labore amet et et sanctus. Duo
                        invidunt magna diam no clita, ea eos vero sanctus est aliquyam et, dolores gubergren eirmod sea
                        invidunt no kasd. Amet ut sadipscing eirmod et dolore. Sed lorem stet aliquyam ipsum eos.</p>
                </div>
            </div>
        </div>
        <div class="col-12 py-4">
            <h3 class="mb-4 font-weight-bold">3 Comments</h3>
            <div class="media mb-4">
                <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et
                        no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                        consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                    <button class="btn btn-sm btn-dark">Reply</button>
                </div>
            </div>
            <div class="media mb-4">
                <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et
                        no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                        consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                    <button class="btn btn-sm btn-dark">Reply</button>
                    <div class="media mt-4">
                        <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam
                                ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren
                                clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at
                                sit.</p>
                            <button class="btn btn-sm btn-dark">Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
            <form>
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Leave Comment" class="btn btn-outline-primary px-3">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Blog Detail End -->

@endsection
