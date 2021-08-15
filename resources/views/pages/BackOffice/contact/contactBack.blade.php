@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Contact Back office
    </h4>
</div>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Icon 1</th>
                <th scope="col">Titre</th>
                <th scope="col">p1</th>
                <th scope="col">Icon 2</th>
                <th scope="col">Titre</th>
                <th scope="col">p2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->titreContact}}</td>
                <td>{{$contact->p}}</td>
                <td>{{$contact->icon1}}</td>
                <td>{{$contact->titre1}}</td>
                <td>{{$contact->p1}}</td>
                <td>{{$contact->icon2}}</td>
                <td>{{$contact->titre2}}</td>
                <td>{{$contact->p2}}</td>
                <td class="text-center">
                    <a href="/contact/{{ $contact->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.contact.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon 3</th>
                <th scope="col">Titre</th>
                <th scope="col">p3</th>
                <th scope="col">formName</th>
                <th scope="col">formEmail</th>
                <th scope="col">formSubject</th>
                <th scope="col">formMessage</th>
                <th scope="col">btn</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->icon3}}</td>
                <td>{{$contact->titre3}}</td>
                <td>{{$contact->p3}}</td>
                <td>{{$contact->formName}}</td>
                <td>{{$contact->formEmail}}</td>
                <td>{{$contact->formSubject}}</td>
                <td>{{$contact->formMessage}}</td>
                <td>{{$contact->btn}}</td>
                <td class="text-center">
                    <a href="/contact/{{ $contact->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.contact.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

