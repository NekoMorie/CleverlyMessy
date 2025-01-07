@extends('profile.layout.app')

@section('content')
    <!-- Start Blog
                                                                                                                                                                        ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row justify-content-center align-items-start gy-4">
                            <!-- Single Item -->
                            @foreach ($blogs as $blog)
                                <div class="col-lg-4 col-md-6 d-flex justify-content-center ">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="#"><img src="{{ Storage::url($blog->image) }}" alt="Thumb"
                                                    class="fixed-dimension"></a>
                                            <div class="date">
                                                <strong>{{ \Carbon\Carbon::parse($blog->publish_at)->format('d') }}</strong>
                                                <span>{{ \Carbon\Carbon::parse($blog->publish_at)->format('M') }}</span>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-user"></i>
                                                            {{ $blog->admin }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-layer-group"></i>
                                                            {{ $blog->kategori }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="#">{{ $blog->title }}</a>
                                            </h4>
                                            <p>
                                            <p>
                                                {!! Str::words(strip_tags($blog->content), 20, '...') !!}
                                            </p>
                                            </p>
                                            <a class="btn circle btn-theme-border btn-sm"
                                                href="{{ route('blog.detail', $blog->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach

                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
