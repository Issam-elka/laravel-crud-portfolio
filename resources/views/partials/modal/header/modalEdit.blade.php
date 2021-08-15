<!-- Modal -->

<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-secondary p-5">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">Static data Header</h5>
            <button type="button" class="btn-close text-white" data-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form action="/header/{{ $header->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                <input type="text" class="form-control"
                    value="{{ $header->img }}" name="img"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $header->h1 }}" name="h1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 1</label>
                <input type="text" class="form-control"
                    value="{{ $header->icon1 }}" name="icon1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white"> Icon 2 </label>
                <input type="text" class="form-control"
                    value="{{ $header->icon2 }}" name="icon2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 3</label>
                <input type="text" class="form-control"
                    value="{{ $header->icon3 }}" name="icon3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 4</label>
                <input type="text" class="form-control"
                    value="{{ $header->icon4 }}" name="icon4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 5</label>
                <input type="text" class="form-control"
                    value="{{ $header->icon5 }}" name="icon5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 1</label>
                <input type="text" class="form-control"
                    value="{{ $header->nav1 }}" name="nav1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 2</label>
                <input type="text" class="form-control"
                    value="{{ $header->nav2 }}" name="nav2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 3</label>
                <input type="text" class="form-control"
                    value="{{ $header->nav3 }}" name="nav3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 4</label>
                <input type="text" class="form-control"
                    value="{{ $header->nav4 }}" name="nav4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nav link 5</label>
                <input type="text" class="form-control"
                    value="{{ $header->nav5 }}" name="nav5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Button</label>
                <input type="text" class="form-control"
                    value="{{ $header->btn_icon }}" name="btn_icon"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>

</div>
</div>