@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Home Back office
    </h4>
</div>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homes as $home)
            <tr>
                <th scope="row">{{$home->id}}</th>
                <td>{{$home->h1}}</td>
                <td>{{$home->p}}</td>
                <td class="text-center">
                    <a href="/home/{{ $home->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.home.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

