<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

        <div class="section-title">
            <h2>{{$facts[0] ->titreFacts}}</h2>
            <p>{{$facts[0] ->p1}}</p>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="{{$facts[0]->icon1}}"></i>
                    <span data-toggle="counter-up">{{$facts[0]->span}}</span>
                    <p><strong>{{$facts[0]->p2}}</strong> {{$facts[0]->strong1}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="100">
                <div class="count-box">
                    <i class="{{$facts[0]->icon2}}"></i>
                    <span data-toggle="counter-up">{{$facts[0]->span2}}</span>
                    <p><strong>{{$facts[0]->p3}}</strong> {{$facts[0]->strong2}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="200">
                <div class="count-box">
                    <i class="{{$facts[0]->icon3}}"></i>
                    <span data-toggle="counter-up">{{$facts[0]->span3}}</span>
                    <p><strong>{{$facts[0]->p4}}</strong> {{$facts[0]->srtong3}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="300">
                <div class="count-box">
                    <i class="{{$facts[0]->icon4}}"></i>
                    <span data-toggle="counter-up">{{$facts[0]->span4}}</span>
                    <p><strong>{{$facts[0]->p5}}</strong> {{$facts[0]->strong4}}</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Facts Section -->