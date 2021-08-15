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
            Portfolio Back office Dynamic
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
                    <h5 class="modal-title text-white" id="exampleModalLabel">Dynamic data Portfolio</h5>
                </div>
                <div class="modal-body model-lg">
                    <form action="/formPortfolio" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                            <input type="text" value="{{old('img_portfolio')}}" class="form-control" name="img_portfolio" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white">Icon 1</label>
                            <input type="text" value="{{old('icon1')}}" class="form-control" name="icon1" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Icon 2</label>
                            <textarea type="text" value="{{old('icon2')}}" class="form-control" name="icon2" id="exampleInputEmail1"
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
                <th scope="col">Image</th>
                <th scope="col">Icone 1</th>
                <th scope="col">Icone 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolioDynamics as $portfolioDynamic)
                <tr>
                    <th scope="row">{{ $portfolioDynamic->id }}</th>
                    <td>{{ $portfolioDynamic->img_portfolio }}</td>
                    <td>{{ $portfolioDynamic->icon1 }}</td>
                    <td>{{ $portfolioDynamic->icon2 }}</td>
                    <td></td>
                    <td>
                        <form action="/contenuPortfolioDelete/{{ $portfolioDynamic->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-white rounded-1" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <button href="/portfolio/{{ $portfolioDynamic->id }}/show" class="btn btn-primary text-white mb-4"
                            data-toggle="modal" data-target="#exampleModalToggle_{{ $portfolioDynamic->id }}"
                            role="button">show</button>
                    </td>
                    @include('partials.modal.portfolio.Dynamic.showEdit')
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
