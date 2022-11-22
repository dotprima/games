<div class="slider-area bg-color-grey ptb--80">
    <div class="axil-slide slider-style-2 plr--135 plr_lg--30 plr_md--30 plr_sm--30">
        <div class="row row--10">
            <div class="col-lg-12 col-xl-6 col-md-12 col-12">
                <!-- Start Post Grid  -->
                <div class="content-block post-grid post-grid-transparent post-overlay-bottom">
                    <div class="post-thumbnail">
                        <a href="post-details.html">
                            <img src="{{ $banner[0]['header_image'] }}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-grid-content">
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <?php $counter = 0; ?>
                                    @if (isset($banner[0]['genres']))
                                        @foreach ($banner[0]['genres'] as $item)
                                            @if ($counter < 3)
                                                <a class="hover-flip-item-wrapper"
                                                    href="/genres/{{ $item['description'] }}">
                                                    <span class="hover-flip-item">
                                                        <span
                                                            data-text="{{ $item['description'] }}">{{ $item['description'] }}</span>
                                                    </span>
                                                </a>
                                            @endif
                                            <?php $counter++; ?>
                                        @endforeach
                                    @else
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                &nbsp;
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <h3 class="title"><a href="post-details.html">{{ $banner[0]['name'] }}</a></h3>
                        </div>
                    </div>
                </div>
                <!-- Start Post Grid  -->
            </div>
            <div class="col-lg-12 col-xl-6 col-md-12 col-12 mt_lg--20 mt_md--20 mt_sm--20">
                <div class="row row--10">
                    @for ($i = 1; $i < 5; $i++)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <!-- Start Post Grid  -->
                            <div
                                class="content-block post-grid post-grid-transparent post-grid-small post-overlay-bottom">
                                <div class="post-thumbnail">
                                    <a href="post-details.html">
                                        <img src="{{ $banner[$i]['header_image'] }}" alt="Post Images">
                                    </a>
                                </div>
                                <div class="post-grid-content">
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <?php $counter = 0; ?>
                                                @if (isset($banner[$i]['genres']))
                                                    @foreach ($banner[$i]['genres'] as $item)
                                                        @if ($counter < 3)
                                                            <a class="hover-flip-item-wrapper"
                                                                href="/genres/{{ $item['description'] }}">
                                                                <span class="hover-flip-item">
                                                                    <span
                                                                        data-text="{{ $item['description'] }}">{{ $item['description'] }}</span>
                                                                </span>
                                                            </a>
                                                        @endif
                                                        <?php $counter++; ?>
                                                    @endforeach
                                                @else
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                        <span class="hover-flip-item">
                                                            &nbsp;
                                                        </span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="post-details.html">{{ $banner[$i]['name'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Post Grid  -->
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
