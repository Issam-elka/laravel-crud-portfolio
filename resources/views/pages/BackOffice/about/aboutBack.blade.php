@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        About Back office
    </h4>
</div>
<table class="table table-bordered table-secondary border-dark table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Para1</th>
            <th scope="col">Image</th>
            <th scope="col">h3</th>
            <th scope="col">para2</th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($abouts as $about)
        <tr>
            <th scope="row">{{$about->id}}</th>
            <td>{{$about->titreAbout}}</td>
            <td>{{$about->p1}}</td>
            <td>{{$about->img}}</td>
            <td>{{$about->h3}}</td>
            <td>{{$about->p2}}</td>
            <td>    
                <a href="/about/{{ $about->id }}/edit" class="btn btn-primary text-white"

                data-toggle="modal" data-target="#exampleModal">EDIT</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table table-bordered table-secondary border-dark table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">li_birth</th>
            <th scope="col">Birthday</th>
            <th scope="col">li_web</th>
            <th scope="col">Website</th>
            <th scope="col">li_phone</th>
            <th scope="col">phone</th>
            <th scope="col">li_city</th>
            <th scope="col">city</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($abouts as $about)
        <tr>
            <th scope="row">{{$about->id}}</th>
            <td>{{$about->li_birthday}}</td>
            <td>{{$about->birthday}}</td>
            <td>{{$about->li_website}}</td>
            <td>{{$about->website}}</td>
            <td>{{$about->li_phone}}</td>
            <td>{{$about->phone}}</td>
            <td>{{$about->li_city}}</td>
            <td>{{$about->city}}</td>
            <td>
                <a href="/about/{{ $about->id }}/edit" class="btn btn-primary text-white"

                    data-toggle="modal" data-target="#exampleModal">EDIT</a>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table table-bordered table-secondary border-dark table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">li_age</th>
            <th scope="col">age</th>
            <th scope="col">li_degree</th>
            <th scope="col">degree</th>
            <th scope="col">li_email</th>
            <th scope="col">email</th>
            <th scope="col">li_freelance</th>
            <th scope="col">freelance</th>
            <th scope="col">p3</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($abouts as $about)
        <tr>
            <th scope="row">{{$about->id}}</th>
            
            <td>{{$about->li_age}}</td>
            <td>{{$about->age}}</td>
            <td>{{$about->li_degree}}</td>
            <td>{{$about->degree}}</td>
            <td>{{$about->li_email}}</td>
            <td>{{$about->email}}</td>
            <td>{{$about->li_freelance}}</td>
            <td>{{$about->freelance}}</td>
            <td>{{$about->p3}}</td>
            <td>
                <a href="/about/{{ $about->id }}/edit" class="btn btn-primary text-white"

                    data-toggle="modal" data-target="#exampleModal">EDIT</a>
            
            </td>
            @include('partials.modal.about.modalEdit')            

        </tr>
        @endforeach
    </tbody>
</table>
@endsection