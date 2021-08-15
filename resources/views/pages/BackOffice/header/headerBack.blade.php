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
                <th scope="col">Image</th>
                <th scope="col">titre</th>
                <th scope="col">icon1</th>
                <th scope="col">icon2</th>
                <th scope="col">icon3</th>
                <th scope="col">icon4</th>
                <th scope="col">icon5</th>
                <th scope="col">nav1</th>
                <th scope="col">nav2</th>
                <th scope="col">nav3</th>
                <th scope="col">nav4</th>
                <th scope="col">nav5</th>
                <th scope="col">btn_icon</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($headers as $header)
            <tr>
                <th scope="row">{{$header->id}}</th>
                <td>{{$header->img}}</td>
                <td>{{$header->h1}}</td>
                <td>{{$header->icon1}}</td>
                <td>{{$header->icon2}}</td>
                <td>{{$header->icon3}}</td>
                <td>{{$header->icon4}}</td>
                <td>{{$header->icon5}}</td>
                <td>{{$header->nav1}}</td>
                <td>{{$header->nav2}}</td>
                <td>{{$header->nav3}}</td>
                <td>{{$header->nav4}}</td>
                <td>{{$header->nav5}}</td>
                <td>{{$header->btn_icon}}</td>
                <td class="text-center">
                    <a href="/headers/{{ $header->id }}/edit" class="btn btn-primary text-white "
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </td>
                @include('partials.modal.header.modalEdit')            
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

