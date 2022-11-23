<div>


    <!-- Start Header -->
    @include('template.startheader')
    <!-- Start Header -->

    <!-- Start Mobile Menu Area  -->
    @include('template.startmobile')
    <!-- End Mobile Menu Area  -->

    <!-- Start Banner Area -->
    <h1 class="d-none">Home Life Style Blog</h1>
    @include('template.startbanner')

    <!-- End Banner Area -->
    <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8" data-bs-spy="scroll" data-bs-target="#post" data-bs-offset="0"
                    class="scrollspy-example" tabindex="0">

                    @foreach ($games as $item)
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view is-active mt--30" id="listpost">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{ $item['header_image'] }}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <?php $counter = 0; ?>
                                        @if (isset($item['genres']))
                                            @foreach ($item['genres'] as $genres)
                                                @if ($counter < 3)
                                                    <a class="hover-flip-item-wrapper"
                                                        href="/genres/{{ $genres['description'] }}">
                                                        <span class="hover-flip-item">
                                                            {{ $genres['description'] }}
                                                        </span>
                                                    </a>
                                                @endif
                                                <?php $counter++; ?>
                                            @endforeach
                                        @else
                                            <a class="hover-flip-item-wrapper" href="#">
                                                <span class="hover-flip-item">&nbsp;</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <h4 class="title"><a
                                        href="<?= ENV('APP_URL') ?>gameinfo/{{ $item['steam_appid'] }}">{{ $item['name'] }}</a>
                                </h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="post-author-avatar border-rounded">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/post-images/author/author-image-2.png"
                                                alt="Author Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Admin">Admin</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    @endforeach
                    {{ $games->links() }}
                </div>
                <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                    <!-- Start Sidebar Area  -->
                    <div class="sidebar-inner">

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <ul>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/post-images/category-image-01.jpg"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Tech</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/post-images/category-image-02.jpg"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Style</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/post-images/category-image-03.jpg"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Travel</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/post-images/category-image-04.jpg"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Food</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_search mb--30">
                            <h5 class="widget-title">Search</h5>

                            <div class="axil-search form-group">
                                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                <input wire:model="search" type="text" class="form-control" placeholder="Search">
                            </div>

                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_postlist mb--30">
                            <h5 class="widget-title">Popular on Blogar</h5>
                            <!-- Start Post List  -->
                            <div class="post-medium-block">

                                <!-- Start Single Post  -->
                                <div class="content-block post-medium mb--20">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/small-images/blog-sm-01.jpg"
                                                alt="Post Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="post-details.html">The underrated design
                                                book that transformed the way I
                                                work </a></h6>
                                        <div class="post-meta">
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post  -->

                                <!-- Start Single Post  -->
                                <div class="content-block post-medium mb--20">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/small-images/blog-sm-02.jpg"
                                                alt="Post Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="post-details.html">Here’s what you should
                                                (and shouldn’t) do when</a>
                                        </h6>
                                        <div class="post-meta">
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post  -->

                                <!-- Start Single Post  -->
                                <div class="content-block post-medium mb--20">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?= ENV('APP_URL') ?>assets/images/small-images/blog-sm-03.jpg"
                                                alt="Post Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="post-details.html">How a developer and
                                                designer duo at Deutsche Bank keep
                                                remote</a></h6>
                                        <div class="post-meta">
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post  -->

                            </div>
                            <!-- End Post List  -->

                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_social mb--30">
                            <h5 class="widget-title">Stay In Touch</h5>
                            <!-- Start Post List  -->
                            <ul class="social-icon md-size justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_instagram mb--30">
                            <h5 class="widget-title">Instagram</h5>
                            <!-- Start Post List  -->
                            <ul class="instagram-post-list-wrapper">
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-01.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-02.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-03.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-04.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-05.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="<?= ENV('APP_URL') ?>assets/images/small-images/instagram-06.jpg"
                                            alt="Instagram Images">
                                    </a>
                                </li>
                            </ul>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->
                    </div>
                    <!-- End Sidebar Area  -->



                </div>
            </div>
        </div>
    </div>
</div>
