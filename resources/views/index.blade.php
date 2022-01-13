@extends('layout.master')
@section('content')
<div class="slider1-area overlay-default">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @foreach($data['banner'] as $key=>$banner)
            <img src="http://localhost/school_college_admin/uploads/banner/{{$banner->featured_image}}" alt="slider" title="#slider-direction-{{++$key}}" />
            @endforeach
        </div>
        @foreach($data['banner'] as $key=>$banner)
        <div id="slider-direction-{{++$key}}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-{{++$key}}">
                <div class="title-container s-tb-c">
                    <div class="title1">{{$banner->banner_title}}</div>
                    <p> {{$banner->banner_description}} </p>
                    <div class="slider-btn-area">
                        <a href="#" class="default-big-btn">Start a Course</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="about-page1-area">
    <div class="container">
        <div class="row about-page1-inner align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-page-img-holder">
                    <img src="http://localhost/school_college_admin/uploads/about/{{$data['about']->featured_image}}" class="img-responsive" alt="about">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ps-md-4">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h2>{{$data['about']->title}}</h2>
                        <p>
                            {{$data['about']->description}}
                        </p>

                        <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="students-say-area school-info">
    <h2 class="title-default-center">School of Xavier</h2>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            <div class="single-item">
                <div class="single-item-wrapper row">
                    <div class="courses-img-wrapper hvr-bounce-to-bottom col-md-6" style="background-image: url('img/course/2.jpg')"> </div>
                    <div class="courses-content-wrapper col-md-6">
                        <div class="entry-container">
                            <div class="section-header">
                                <h2 class="section-title">School of Xavier and Technology</h2>
                            </div>
                            <div class="entry-content">
                            <p>Xavier is more than just a place where you come to study for your degree. It is a community of students and faculty from diverse background coming together with a common belief that learning is a lifelong process. On one hand, you will always <br></p>
                                <ul>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                </ul>
                            </div>

                            <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper row">
                    <div class="courses-img-wrapper hvr-bounce-to-bottom col-md-6" style="background-image: url('img/course/2.jpg')"> </div>
                    <div class="courses-content-wrapper col-md-6">
                        <div class="entry-container">
                            <div class="section-header">
                                <h2 class="section-title">School of Xavier and Technology</h2>
                            </div>
                            <div class="entry-content">
                            <p>Xavier is more than just a place where you come to study for your degree. It is a community of students and faculty from diverse background coming together with a common belief that learning is a lifelong process. On one hand, you will always <br></p>
                                <ul>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                </ul>
                            </div>

                            <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper row">
                    <div class="courses-img-wrapper hvr-bounce-to-bottom col-md-6" style="background-image: url('img/course/2.jpg')"> </div>
                    <div class="courses-content-wrapper col-md-6">
                        <div class="entry-container">
                            <div class="section-header">
                                <h2 class="section-title">School of Xavier and Technology</h2>
                            </div>
                            <div class="entry-content">
                            <p>Xavier is more than just a place where you come to study for your degree. It is a community of students and faculty from diverse background coming together with a common belief that learning is a lifelong process. On one hand, you will always <br></p>
                                <ul>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                    <li><a href="#">Bachelor of Busineess Study</a></li>
                                </ul>
                            </div>

                            <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="video-area overlay-video bg-common-style" style="background-image: url('img/banner/1.jpg');">
    <div class="container">
        <div class="video-content">
            <h2 class="video-title">Watch Campus Life Video Tour</h2>
            <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem
                <br>Ipsum industry's standard dum an unknowramble.</p>
            <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<div class="students-say-area">
    <h2 class="title-default-center">What Our Students Say</h2>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
            data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true"
            data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            @foreach($data['testinomial'] as $testinomial)
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" 
                        src="http://localhost/school_college_admin/uploads/testinomials/{{$testinomial->featured_image}}" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">{{$testinomial->name}}</a></h3>
                        <span class="item-designation">UI Designer</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">
                            {!!$testinomial->description!!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                <h2 class="about-counter title-bar-counter" data-num="{{count($data['lecturer'])}}">{{count($data['lecturer'])}}</h2>
                <p>PROFESSIONAL TEACHER</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                <h2 class="about-counter title-bar-counter" data-num="{{$data['total_courses']}}">{{$data['total_courses']}}</h2>
                <p>NEWS COURSES EVERY YEARS</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                <p>NEWS COURSES EVERY YEARS</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                <p>REGISTERED STUDENTS</p>
            </div>
        </div>
    </div>
</div>

<div class="students-join2-area">
    <div class="container">
        <div class="students-join2-wrapper">
            <div class="students-join2-left">
                <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                    <ul class="ri-grid-list">
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="students-join2-right">
                <div>
                    <h2>Join<span> 29,12,093</span> Students.</h2>
                    <a href="#" class="join-now-primary-btn">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area">
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
            data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false"
            data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
            </div>
        </div>
    </div>
</div>
@endsection