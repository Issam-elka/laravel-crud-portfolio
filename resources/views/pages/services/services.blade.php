<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>{{$services[0]->titreServices}}</h2>
            <p>{{$services[0]->p}}</p>
        </div>

        <div class="row">
            @foreach ($servicesDynamic as $item)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{$item->icon}}"></i></div>
                <h4 class="title"><a href="">{{$item->titre}}</a></h4>
                <p class="description">{{$item->para}}</p>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->