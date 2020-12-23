@extends('frontend.app')
@section('main-content')
    <!-- Start Page Title Area -->
{{--    <div class="page-title-area bg-12">--}}
{{--        <div class="container">--}}
{{--            <div class="page-title-content">--}}
{{--                <h2>Post Style One</h2>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="index.html">--}}
{{--                            Home--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>Pages</li>--}}

{{--                    <li>Post With Sidebar</li>--}}

{{--                    <li>Post Style One</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a href="#">May 19, 2020</a></li>
                                    <li><span>Posted By:</span> <a href="#">John Anderson</a></li>
                                </ul>
                            </div>

                            <h3>DHS Issues Emergency Directive To Prevent Hacking Attack</h3>

                            <div class="article-image">
                                <img src="public/frontend/assets/img/blog-details/2.jpg" alt="image">
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat ullamco laboris nisi ut aliquip ex ea.</p>

                            <h3 class="related-posts">Related Post</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item">
                                        <a href="post-style-one.html">
                                            <img src="public/frontend/assets/img/blog-img/1.jpg" alt="Image">
                                            <span class="s-date">
													08 <br> jun
												</span>
                                            <h3>Why We Need For Guidelines For Brain Scan Data</h3>
                                        </a>

                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi pariatur quos.</p>

                                        <a href="post-style-one.html">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item mb-0">
                                        <a href="post-style-one.html">
                                            <img src="public/frontend/assets/img/blog-img/2.jpg" alt="Image">
                                            <span class="s-date">
													09 <br> jun
												</span>
                                            <h3>How To Build Artificial Intelligence You Can Trust</h3>
                                        </a>

                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi pariatur quos.</p>

                                        <a href="post-style-one.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>

                                <a href="#">Share</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#"><i class='bx bx-left-arrow-alt'></i> Prev Post</a>
                                </div>

                                <div class="nav-next">
                                    <a href="#">Next Post <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3 class="comments-title">3 Comments:</h3>

                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="public/frontend/assets/img/blog-details/comment-img-1.jpg" class="avatar" alt="image">
                                                <b class="fn">Jimy Pearson</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun  24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="public/frontend/assets/img/blog-details/comment-img-2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Karl Mekar</b>
                                                        <span class="says">says:</span>
                                                    </div>

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <span>Jun  24, 2020 at 10:59 am</span>
                                                        </a>
                                                    </div>
                                                </footer>

                                                <div class="comment-content">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim</p>
                                                </div>

                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="comment">
                                    <div class="comment-body border-none">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="public/frontend/assets/img/blog-details/comment-img-3.jpg" class="avatar" alt="image">
                                                <b class="fn">Tesa Jack</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun  24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                    @include('frontend.partials.post-sidebar')

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
