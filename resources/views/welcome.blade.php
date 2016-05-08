@extends('layouts.master')

@section('full_title', 'GOU Course Evaluation')

@section('content')
<!-- Slider -->
<div id="homepage-carousel">
    <div class="container">
        <div class="homepage-carousel-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="image-carousel">
                        <div class="image-carousel-slide"><img src="{{ asset('img/slide-1.jpg') }}" alt=""></div>
                        <div class="image-carousel-slide"><img src="{{ asset('img/slide-2.jpg') }}" alt=""></div>
                        <div class="image-carousel-slide"><img src="{{ asset('img/slide-3.jpg') }}" alt=""></div>
                    </div><!-- /.slider-image -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-5">
                    <div class="slider-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Raise the bar of teaching performance! Register now:</h1>
                                <form id="slider-form" role="form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Full Name" type="text" required>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-email" id="slider-email" placeholder="Email" type="email" required>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select name="slider-study-level" id="slider-study-level" class="has-dark-background">
                                                    <option value="- Not selected -">I am a...</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Lecturer">Lecturer</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <button type="submit" id="slider-submit" class="btn btn-framed pull-right">Register</button>
                                    <div id="form-status"></div>
                                </form>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.slider-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="background"></div>
        </div><!-- /.slider-wrapper -->
        <div class="slider-inner"></div>
    </div><!-- /.container -->
</div>
<!-- end Slider -->

<!-- Our Lecturers, Latest Courses -->
<div class="block" style="padding-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="our-professors">
                    <header>
                        <h2>Our Lecturers</h2>
                    </header>
                    <div class="section-content">
                        <div class="professors">
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="member-detail.html"><img src="{{ asset('img/professor.jpg') }}" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="member-detail.html">Prof. Mathew Davis</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Applied Science and Engineering</figure>
                                    </header>
                                    <a href="member-detail.html" class="show-profile">Show Profile</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="member-detail.html"><img src="{{ asset('img/professor-02.jpg') }}" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="member-detail.html">Prof. Jane Stairway</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Applied Science and Engineering</figure>
                                    </header>
                                    <a href="member-detail.html" class="show-profile">Show Profile</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <a href="" class="read-more stick-to-bottom">All Lecturers</a>
                        </div><!-- /.professors -->
                    </div><!-- /.section-content -->
                </section><!-- /.our-professors -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-8">
                <section id="gallery">
                    <header>
                        <h2>Latest Courses Reviewed</h2>
                    </header>
                    <div class="section-content">
                        <ul class="gallery-list">
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-01.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-02.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-03.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-04.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-05.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-06.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-07.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-08.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-09.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-10.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-11.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-12.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-13.jpg') }}" alt=""></a></li>
                            <li><a href="{{ asset('img/gallery-big-image.jpg') }}" class="image-popup"><img src="{{ asset('img/image-14.jpg') }}" alt=""></a></li>
                        </ul>
                        <a href="" class="read-more">All Courses</a>
                    </div><!-- /.section-content -->
                </section><!-- /.gallery -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Our Lecturers, Latest Courses -->

<!-- Testimonials -->
<section id="testimonials">
    <div class="block">
        <div class="container">
            <div class="author-carousel">
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="{{ asset('img/student-testimonial.jpg') }}" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                    Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                <footer>Claire Doe</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="{{ asset('img/student-testimonial.jpg') }}" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                    Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                <footer>Claire Doe</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
            </div><!-- /.author-carousel -->
        </div><!-- /.container -->
    </div><!-- /.block -->
</section>
<!-- end Testimonials -->

<!-- Faculties -->
<div class="block">
    <div class="container">
        <div class="block-dark-background">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Faculty of Arts</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Accounting & Finance</a></li>
                                <li><a href="#">Advertising & Marketing</a></li>
                                <li><a href="#">Architecture & Interior</a></li>
                                <li><a href="#">Arts & Design</a></li>
                                <li><a href="#">Broadcasting & Journalism</a></li>
                                <li><a href="#">Business & Management</a></li>
                                <li><a href="#">Computing & IT</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Faculty of Arts</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Accounting & Finance</a></li>
                                <li><a href="#">Advertising & Marketing</a></li>
                                <li><a href="#">Architecture & Interior</a></li>
                                <li><a href="#">Arts & Design</a></li>
                                <li><a href="#">Broadcasting & Journalism</a></li>
                                <li><a href="#">Business & Management</a></li>
                                <li><a href="#">Computing & IT</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Faculty of Arts</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Accounting & Finance</a></li>
                                <li><a href="#">Advertising & Marketing</a></li>
                                <li><a href="#">Architecture & Interior</a></li>
                                <li><a href="#">Arts & Design</a></li>
                                <li><a href="#">Broadcasting & Journalism</a></li>
                                <li><a href="#">Business & Management</a></li>
                                <li><a href="#">Computing & IT</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Faculty of Arts</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Accounting & Finance</a></li>
                                <li><a href="#">Advertising & Marketing</a></li>
                                <li><a href="#">Architecture & Interior</a></li>
                                <li><a href="#">Arts & Design</a></li>
                                <li><a href="#">Broadcasting & Journalism</a></li>
                                <li><a href="#">Business & Management</a></li>
                                <li><a href="#">Computing & IT</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.block-dark-background -->
    </div><!-- /.container -->
</div>
<!-- end Faculties -->
@endsection