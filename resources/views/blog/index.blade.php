@extends('layouts.app')
@section('content')
    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
        <section>
            <div class="feature-posts">
                <a href="single-post.html" class="feature-post-item">
                    <span>Featured Posts</span>
                </a>
                <a href="single-post.html" class="feature-post-item">
                    <img src="assets/imgs/img-1.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Incidunt Quaerat</div>
                </a>
                <a href="single-post.html" class="feature-post-item">
                    <img src="assets/imgs/img-2.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Culpa Ducimus</div>
                </a>
                <a href="single-post.html" class="feature-post-item">
                    <img src="assets/imgs/img-3.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Temporibus Simile</div>
                </a>
                <a href="single-post.html" class="feature-post-item">
                    <img src="assets/imgs/img-4.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Adipisicing</div>
                </a>
            </div>
        </section>
        <hr>
        <div class="page-container">
            <div class="page-content">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">{{ $latestBlog->title }}</h5>
                        <small class="small text-muted">{{ $latestBlog->created_at }}
                            <span class="px-2">-</span>
                            <a href="#" class="text-muted">32 Comments</a>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="blog-media">
                            <img src="{{ url('uploads/blog/' . $latestBlog->image) }}" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">#Salupt</a>
                        </div>
                        <p class="my-3">{{ Str::words($latestBlog->content, 80, '...') }}</p>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                        <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                        <a href="{{ route('blogdetail', $latestBlog->id) }}" class="btn btn-outline-dark btn-sm">READ
                            MORE</a>
                        <a href="#" class="text-dark small text-muted">By : Joe Mitchell</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-lg-6">
                            <div class="card text-center mb-5">
                                <div class="card-header p-0">
                                    <div class="blog-media">


                                        <img src="{{ url('uploads/blog/' . $item->image) }}" alt="" class="w-100">
                                        <a href="#" class="badge badge-primary">#Placeat</a>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="card-title mb-2">{{ $item->title }}</h5>
                                    <small class="small text-muted">January 20 2019
                                        <span class="px-2">-</span>
                                        <a href="#" class="text-muted">34 Comments</a>
                                    </small>
                                    <p class="my-2">{{ Str::words($item->content, 20, '...') }}
                                    </p>
                                </div>

                                <div class="card-footer p-0 text-center">
                                    <a href="{{ route('blogdetail', $item->id) }}"
                                        cladivss="btn btn-outline-dark btn-sm">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="btn btn-primary btn-block my-4">Load More Posts</button>
            </div>

            <!-- Sidebar -->
            <div class="page-sidebar text-center">
                <h6 class="sidebar-title section-title mb-4 mt-3">About</h6>
                <img src="assets/imgs/avatar.jpg" alt="" class="circle-100 mb-3">
                <div class="socials mb-3 mt-2">
                    <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                    <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                    <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
                </div>
                <p>Consectetur adipisicing elit Possimus tempore facilis dolorum veniam impedit nobis. Quia, soluta incidunt
                    nesciunt dolorem reiciendis iusto.</p>


                <h6 class="sidebar-title mt-5 mb-4">Newsletter</h6>
                <form action="">
                    <div class="subscribe-wrapper">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary"><i class="ti-location-arrow"></i></button>
                    </div>
                </form>

                <h6 class="sidebar-title mt-5 mb-4">Tags</h6>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#iusto</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quibusdam</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#officia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#animi</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#mollitia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quod</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#ipsa at</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#dolor</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#incidunt</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#possimus</a>

                <h6 class="sidebar-title mt-5 mb-4">Instagram</h6>
                <div class="row px-3">
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                </div>

                <figure class="figure mt-5">
                    <a href="single-post.html" class="figure-img">
                        <img src="assets/imgs/img-4.jpg" alt="" class="w-100">
                        <figcaption class="figcaption">Laboriosam</figcaption>
                    </a>
                </figure>

                <h6 class="sidebar-title mt-5 mb-4">Popular Posts</h6>
                <div class="card mb-4">
                    <a href="{{ route('blogdetail', $latestBlog->id) }}" class="overlay-link"></a>
                    <div class="card-header p-0">
                        <div class="blog-media">
                            <img src="{{ url('uploads/blog/' . $latestBlog->image) }}" alt="" class="w-100">
                            <a href="{{ route('blogdetail', $latestBlog->id) }}" class="badge badge-primary">#Lorem</a>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <h5 class="card-title mb-2">{{ $latestBlog->title }}</h5>
                        <small class="small text-muted"><i class="ti-calendar pr-1"></i> {{ $latestBlog->created_at }}
                        </small>
                        <p class="my-2">{{ Str::words($latestBlog->content, 10, '...') }}</p>
                    </div>
                </div>
                @foreach ($blog as $data)
                    <div class="media text-left mb-4">
                        <a href="{{ route('blogdetail', $data->id) }}" class="overlay-link"></a>
                        <img class="mr-3" src="{{ url('uploads/blog/' . $data->image) }}" width="100px" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-0">{{$data->title}}</h6>
                            <p class="mb-2">{{ Str::words($data->content, 6, '...') }}</p>
                            <p class="text-muted small"><i class="ti-calendar pr-1"></i>{{$data->created_at}}</p>
                        </div>
                    </div>
                @endforeach

                          </div>
        </div>
    </div>

    <div class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="javascript:void(0)">Follow @joe_mitchell On Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
    </div>
@endsection
