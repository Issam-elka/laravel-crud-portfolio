@extends('pages.BackOffice.admin')
@section('content')
<div class="container text-center mb-5">
    <h4>
        Facts Back office 
    </h4>
</div>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Icon 1</th>
                <th scope="col">Span</th>
                <th scope="col">p2</th>
                <th scope="col">strong1</th>
                <th scope="col">Icon 2</th>
                <th scope="col">Span2</th>
                <th scope="col">p3</th>
                <th scope="col">strong2</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facts as $fact)
            <tr>
                <th scope="row">{{$fact->id}}</th>
                <td>{{$fact->titreFacts}}</td>
                <td>{{$fact->p1}}</td>
                <td>{{$fact->icon1}}</td>
                <td>{{$fact->span}}</td>
                <td>{{$fact->p2}}</td>
                <td>{{$fact->strong1}}</td>
                <td>{{$fact->icon2}}</td>
                <td>{{$fact->span2}}</td>
                <td>{{$fact->p3}}</td>
                <td>{{$fact->strong2}}</td>
                <td class="text-center">
                    <a href="/facts/{{ $fact->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.facts.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <table class="table table-bordered table-secondary border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon 3</th>
                <th scope="col">Span3</th>
                <th scope="col">p4</th>
                <th scope="col">strong3</th>
                <th scope="col">Icon 4</th>
                <th scope="col">Span4</th>
                <th scope="col">p5</th>
                <th scope="col">strong4</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facts as $fact)
            <tr>
                <th scope="row">{{$fact->id}}</th>
                <td>{{$fact->icon3}}</td>
                <td>{{$fact->span3}}</td>
                <td>{{$fact->p4}}</td>
                <td>{{$fact->strong3}}</td>
                <td>{{$fact->icon4}}</td>
                <td>{{$fact->span4}}</td>
                <td>{{$fact->p5}}</td>
                <td>{{$fact->strong5}}</td>
                <td class="text-center">
                    <a href="/facts/{{ $fact->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.facts.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

