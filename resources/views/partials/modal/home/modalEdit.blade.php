<!-- Modal -->

<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-secondary p-5">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">Static data Home</h5>
            <button type="button" class="btn-close text-white" data-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form action="/home/{{ $home->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $home->h1 }}" name="h1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $home->p }}" name="p"
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