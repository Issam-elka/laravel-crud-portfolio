@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Portfolio Back office Dynamic
    </h4>
</div>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">li1</th>
                <th scope="col">li2</th>
                <th scope="col">li3</th>
                <th scope="col">li4</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
                <th scope="row">{{$portfolio->id}}</th>
                <td>{{$portfolio->titrePortfolio}}</td>
                <td>{{$portfolio->p}}</td>
                <td>{{$portfolio->li1}}</td>
                <td>{{$portfolio->li2}}</td>
                <td>{{$portfolio->li3}}</td>
                <td>{{$portfolio->li4}}</td>
                <td class="text-center">
                    <a href="/portfolio/{{ $portfolio->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.portfolio.Static.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

