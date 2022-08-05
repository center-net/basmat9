@extends('site.include.layout')
@section('content')
    <!-- home banner section html start -->
    <section class="home-banner" style="background-image: url({{ asset('site/assets/images/unbound-img1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="banner-content">
                        <h2 class="banner-title">ساهم معنا
                        </h2>
                        <div class="banner-text">
                            <p>مساهمتك تساعد المحتاجين حول العالم


                            </p>
                        </div>
                        <div class="banner-button">
                            <a href="{{ route('donte') }}" class="button-round">تبرع الان </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- home banner section html end -->
    <!-- home client section html start -->

    <!-- home client section html end -->
    <!-- home donate section html start -->



        <!-- home blog section html start -->
        <section class="home-blog">
            <h2 class="section-title text-center" style="color: #f15b43;">المبادرات</h2>

            <div class="container">
                <div class="section-head d-sm-flex align-items-center justify-content-between">
                    <div class="head-wrap">
                        <div class="sub-title"></div>
                        <h3 class="section-title">الانجازات التي قدمها الفريق (المبادرات)</h3>
                    </div>
                    <div class="head-btn">
                        <a href="{{ route('blog') }}" class="button-round">مشاهدة جميع الانجازات</a>
                    </div>
                </div>
                <div class="blog-inner">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('site/assets/images/P02299.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="blog-single.html"> توفير مساكن الأسر المحتاجة</a>
                                    </h3>
                                    <p>
                                        توفير مساكن الأسر المهمشة الذين لهم عزة نفس ندعمهم و نساعدهم في تكوين بيئة او فتح تأمين
                                        لهم
                                    </p>
                                    <div class="entry-meta">

                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('site/assets/images/p45.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="blog-single.html">وجبات الإفطار في شهر رمضان
                                        </a>
                                    </h3>
                                    <p>
                                        تمت مبادرة في نهاية رمضان تم تقديم وجبات افطار و كسوة العيد للأطفال . </p>
                                    <div class="entry-meta">

                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('site/assets/images/P02267.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="blog-single.html">كسوة الأسر المحتاجة</a>
                                    </h3>
                                    <p>. تم تنفيذ حملة مبادرة كسوة كاملة للأسر المهمشة من اهل الخير, تواصل مع المناشدات باستمرار
                                        لحتى اللحظة متواجدين معهم </p>
                                    <div class="entry-meta">

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home blog section html end -->
    <!-- home donate section html end -->
    <!-- home about section html start -->
    <section class="home-about" id="age">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home-about-left">
                        <div class="home-about-image">
                            <img src="{{asset('site/assets/images/don.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home-about-right">
                        <div class="home-about-content">
                            <h2 class="sub-title">الفئة العمرية </h2>
                            <h3 class="section-title">الفئات العمرية المستفيدة من هذا التبرعات</h3>

                            <div class="about-list">
                                <ul>
                                   <li>  فئة الاطفال(المتشردين في الشوارع)   </li>
                                   <li>   فئة الطفال المرضى الذين لا يوجد لديهم احد   </li>
                                   <li>  فئة الاسر المهمشة الذين لهم عزة نفس ندعمهم و نساعدهم في تكوين بيئة او فتح تأمين لهم .  </li>
                                   <li>  المرضى  (الأعصاب  و الكلى والكانسر )  .  </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home about section html end -->

    <!-- home charity section html end -->

    <!-- home event section html start -->
    <section id="goal" class="home-event bg-light-grey">
        <div class="container">
           <div class="section-head text-center">
              {{-- <div class="sub-title">INVOLVE NOW</div> --}}
              <h2 class="section-title"> الأهداف</h2>
           </div>
           <div class="event-inner">
              <div class="row align-items-center">
                 <div class="col-lg-5">
                    <article class="event-item event-item-bg" style="background-image: url({{asset('site/assets/images/unbound-img55.jpg')}});">

                       <div class="overlay"></div>
                    </article>
                 </div>
                 <div class="col-lg-7">

                    <article class="event-item">
                       <div class="event-content">
                          <h3>الهدف الاول</h3>
                          <div class="event-meta">

                          </div>
                          <p>•	اكتر من جهة بعثت لنا حتى نكون تحت شعار لهم ورفضنا الفكرة لأننا نريد جمعية خاصة لنا حتى تدعم الكل بدون استثناء من الاسر المحتاجة .</p>
                       </div>
                       <div class="event-date">
                          <h4>1</h4>
                          <h5></h5>
                       </div>
                    </article>
                    <article class="event-item">
                       <div class="event-content">
                          <h3>الهدف الثاني</h3>
                          <div class="event-meta">

                          </div>
                          <p>	هدفنا الوحيد تكوين فريق خاص لنا بدون مشاركة لاحد تحت شعار مؤسسة حتى تكون طاقم كامل تفتح جمعية خاصة لنا .</p>
                       </div>
                       <div class="event-date">
                          <h4>2</h4>
                          <h5></h5>
                       </div>
                    </article>
                    <article class="event-item">
                       <div class="event-content">
                          <h3>الهدف الثالث</h3>
                          <div class="event-meta">

                          </div>
                          <p>•	كل واحد عنده طموح ,  طموحنا وهدفنا مساعدات الاسر المهمشة و بالأخص المرضى بشكل عام .</p>
                       </div>
                       <div class="event-date">
                          <h4>3</h4>
                          <h5></h5>
                       </div>
                    </article>

                 </div>
              </div>

           </div>
        </div>
     </section>
    <!-- home event section html end -->
    <!-- home team section html start -->

    <!-- home team section html end -->

    <!-- home gallery section html start -->
    {{-- <section class="home-gallery bg-light-grey">
        <div class="container">
            <div class="section-head text-center">
                <div class="sub-title">PORTFOLIO / GALLERY</div>
                <h2 class="section-title">Our photo gallery</h2>
            </div>
            <div class="gallery-inner">
                <div class="gallery-container grid">

                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img14.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img14.jpg" alt="">
                                <h4>Poor children</h4>
                            </a>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img15.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img15.jpg" alt="">
                                <h4> campaign</h4>
                            </a>
                        </figure>
                    </div>

                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img15.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img15.jpg" alt="">
                                <h4>Volunteer team</h4>
                            </a>
                        </figure>
                    </div>



                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img17.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img17.jpg" alt="">
                                <h4>Helpless People</h4>
                            </a>
                        </figure>
                    </div>




                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img21.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img21.jpg" alt="">
                                <h4>Donation campaign</h4>
                            </a>
                        </figure>
                    </div>


                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img20.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img20.jpg" alt="">
                                <h4>Donation campaign</h4>
                            </a>
                        </figure>
                    </div>







                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img19.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img19.jpg" alt="">
                                <h4>Helpless People</h4>
                            </a>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item">
                        <figure class="gallery-img">
                            <a href="site/assets/images/unbound-img18.jpg" data-fancybox="gallery">
                                <img src="site/assets/images/unbound-img18.jpg" alt="">
                                <h4>Poor children</h4>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>



        </div>
    </section> --}}
    <!-- home gallery section html end -->
   <!-- home contact section html start -->
   <section class="home-contact" id="connect" style="background-image: url({{ asset('site/assets/images/form.jpg') }});">
    <div class="container">
        <h2 class="section-title text-center">لتواصل معنا</p>
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="sub-title"> </div>
                <h2 class="section-title"></p>

            </div>
            <div class="col-lg-8">
                <div class="home-contact-form">
                    <form class="contact-form row" action="{{route('order')}}" method="POST">
                        @csrf
                        <div class="col-12 mb-4">
                            <input type="text" class="form-control" required name="name" placeholder="ادخل الاسم">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="email" class="form-control" required name="email" placeholder="ادخل الايميل">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="text" name="phone" class="form-control" placeholder="ادخل رقم الجوال">
                        </div>
                        <div class="col-12 mb-4">
                            <textarea name="description" id="" cols="5" rows="5"> </textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="button-round">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- home contact section html end -->
    <!-- home callback section html start -->
    <section class="home-callback" id="team" style="background-image: url({{asset('site/assets/images/unbound-img2.jpg')}});">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="callback-content">
                        <h2 class="section-title">فريق بسمة مريض التطوعي
                        </h2>
                        <br>
                        <h4>
                             هو فريق مختص بتقديم المساعدة لمرضى السرطان والفقراء وكبار السن وذوي الاحتياجات الخاصة وتقديم فعاليات لرسم البسمة على وجوه الاطفال .
                        </h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img class="white-logo" src="{{asset('site/assets/images/logo.jpg')}}" alt="logo">

                </div>

            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- home callback section html end -->
@endsection
