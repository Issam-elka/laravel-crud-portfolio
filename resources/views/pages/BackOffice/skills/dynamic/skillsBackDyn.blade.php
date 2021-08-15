@extends('pages.BackOffice.admin')
@section('content')
    @if (session()->has('message'))
        <div class="container alert alert-success mt-2 w-50">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('messageDelete'))
        <div class="container alert alert-danger mt-2 w-50">
            {{ session()->get('messageDelete') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning alert-block">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container text-center mb-5">
        <h4>
            Skills Back office Dynamic
        </h4>
    </div>
    <div class="text-center mb-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter un service
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Dynamic data Skills</h5>
                </div>
                <div class="modal-body model-lg">
                    <form action="/formSkills" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Span</label>
                            <input type="text" class="form-control" value="{{old('span')}}" name="span" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white">Pourcentage</label>
                            <input type="text" class="form-control" value="{{old('i')}}" name="i" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Aria</label>
                            <textarea type="text" class="form-control" value="{{old('aria')}}" name="aria" id="exampleInputEmail1"
                                aria-describedby="emailHelp"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Ajouter</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Span</th>
                <th scope="col">Pourcentage</th>
                <th scope="col">Aria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skillsDynamics as $skillsDynamic)
                <tr>
                    <th scope="row">{{ $skillsDynamic->id }}</th>
                    <td>{{ $skillsDynamic->span }}</td>
                    <td>{{ $skillsDynamic->i }}</td>
                    <td>{{ $skillsDynamic->aria }}</td>
                    <td></td>
                    <td>
                        <form action="/contenuSkillsDelete/{{ $skillsDynamic->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-white rounded-1" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <button href="/skills/{{ $skillsDynamic->id }}/show" class="btn btn-primary text-white mb-4"
                            data-toggle="modal" data-target="#exampleModalToggle_{{ $skillsDynamic->id }}"
                            role="button">show</button>
                    </td>
                    @include('partials.modal.skills.Dynamic.showEdit')
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
