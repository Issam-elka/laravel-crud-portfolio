@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Skills Back office Static
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
            @foreach ($skills as $skill)
            <tr>
                <th scope="row">{{$skill->id}}</th>
                <td>{{$skill->titreSkills}}</td>
                <td>{{$skill->p1}}</td>
                <td class="text-center">
                    <a href="/skills/{{ $skill->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.skills.Static.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

