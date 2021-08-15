    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>{{$about[0] ->titreAbout}}</h2>
                <p>{{$about[0]->p1}}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset('assets/img/'.$about[0]->img)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{$about[0]->h3}}</h3>
                    <p class="font-italic">
                        {{$about[0]->p2}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_birthday}}</strong> {{$about[0]->birthday}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_website}}</strong> {{$about[0]->website}}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_phone}}</strong> {{$about[0]->phone}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_city}}</strong> {{$about[0]->city}}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_age}}</strong> {{$about[0]->age}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_degree}}</strong> {{$about[0]->degree}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_email}}</strong>
                                    {{$about[0]->email}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>{{$about[0]->li_freelance}}</strong> {{$about[0]->freelance}}</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        {{$about[0]->p3}}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->