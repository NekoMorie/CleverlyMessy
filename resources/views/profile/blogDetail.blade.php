@extends('profile.layout.app')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
        style="background-image: url({{ Storage::url($blogs->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Blog-->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-8 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <div class="thumb">
                                    <a href="#"><img src="{{ Storage::url($blogs->image) }}" alt="Thumb"></a>
                                    <div class="date">
                                        <strong>{{ \Carbon\Carbon::parse($blogs->publish_at)->format('d') }}</strong>
                                        <span>{{ \Carbon\Carbon::parse($blogs->publish_at)->format('M') }}</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="#">{{ $blogs->title }}</a>
                                    </h3>

                                    {!! $blogs->content !!}

                                    {{-- <blockquote>
                                        He share of first to worse. Weddings and any opinions suitable smallest nay. Houses
                                        or months settle remove ladies appear. Engrossed suffering supposing he recommend.
                                    </blockquote> --}}

                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            {{-- Previous Post --}}
                            @if ($previousPost)
                                <a href="{{ route('blog.detail', $previousPost->slug) }}">
                                    <i class="fas fa-angle-double-left"></i> Previous Post
                                    <h5>{{ $previousPost->title }}</h5>
                                </a>
                            @endif

                            {{-- Next Post --}}
                            @if ($nextPost)
                                <a href="{{ route('blog.detail', $nextPost->slug) }}">
                                    Next Post <i class="fas fa-angle-double-right"></i>
                                    <h5>{{ $nextPost->title }}</h5>
                                </a>
                            @else
                                <a href="" hidden></a>
                            @endif
                        </div>
                        <!-- End Post Pagination -->

                        <!-- Start Post Tag s-->
                        {{-- <div class="post-tags share">
                            <div class="tags">
                                <a href="#">Analysis</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- End Post Tags -->
                        {{-- @auth
                            <!-- Start Blog Comment -->
                            <div class="blog-comments">
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            5 comments
                                        </h4>
                                        <div class="comments-list">
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="assets/img/100x100.png" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <div class="title">
                                                        <h5>Jonathom Doe</h5>
                                                        <span>28 Aug, 2022</span>
                                                    </div>
                                                    <p>
                                                        Year kept on over so as this of. She steepest doubtful betrayed formerly
                                                        him. Active one called uneasy our seeing see cousin tastes its. Ye am it
                                                        formed indeed agreed relied piqued. Met packages shy for kindness.
                                                    </p>
                                                    <div class="comments-info">
                                                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="assets/img/100x100.png" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <div class="title">
                                                        <h5>Spart Lee</h5>
                                                        <span>17 Feb, 2022</span>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay
                                                        any article enabled musical shyness yet sixteen yet blushes. Entire its
                                                        the did figure wonder off.
                                                    </p>
                                                    <div class="comments-info">
                                                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="#" class="contact-comments">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Name *"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *"
                                                            type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comments Form -->
                        @endauth --}}

                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            {{-- <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    @foreach ($posts as $post)
                                        <li>
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{ Storage::url($post->image) }}" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span
                                                        class="post-date">{{ \Carbon\Carbon::parse($post->publish_at)->format('d M, Y') }}</span>
                                                </div>
                                                <a href="#">{{ $post->title }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach ($kategori as $kat)
                                            <li>
                                                <a
                                                    onclick="">{{ $kat->nama }}<span>{{ $kat->posts_count }}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach ($tag as $tags)
                                            <li>
                                                <a onclick="">{{ $tags->nama }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
