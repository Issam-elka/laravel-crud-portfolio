@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Services Back office Static
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
            @foreach ($services as $service)
            <tr>
                <th scope="row">{{$service->id}}</th>
                <td>{{$service->titreServices}}</td>
                <td>{{$service->p}}</td>
                <td class="text-center">
                    <a href="/services/{{ $service->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.services.Static.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

