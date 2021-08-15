<!-- Modal -->

<div class="modal fade w-100" id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content bg-secondary p-5">
        <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLabel">Static data Facts</h5>
            <button type="button" class="btn-close text-white" data-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form action="/facts/{{ $fact->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $fact->titreFacts }}" name="titreFacts"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $fact->p1 }}" name="p1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 1</label>
                <input type="text" class="form-control"
                    value="{{ $fact->icon1 }}" name="icon1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre 1 </label>
                <input type="text" class="form-control"
                    value="{{ $fact->span }}" name="span"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p1 </label>
                <input type="text" class="form-control"
                    value="{{ $fact->p2 }}" name="p2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon2</label>
                <input type="text" class="form-control"
                    value="{{ $fact->strong1 }}" name="strong1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre2</label>
                <input type="text" class="form-control"
                    value="{{ $fact->icon2 }}" name="icon2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p2</label>
                <input type="text" class="form-control"
                    value="{{ $fact->span2 }}" name="span2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon3</label>
                <input type="text" class="form-control"
                    value="{{ $fact->p3 }}" name="p3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre3</label>
                <input type="text" class="form-control"
                    value="{{ $fact->strong2 }}" name="strong2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p3</label>
                <input type="text" class="form-control"
                    value="{{ $fact->icon3 }}" name="icon3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormName</label>
                <input type="text" class="form-control"
                    value="{{ $fact->span3 }}" name="span3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormEmail</label>
                <input type="text" class="form-control"
                    value="{{ $fact->p4 }}" name="p4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormSubject</label>
                <input type="text" class="form-control"
                    value="{{ $fact->strong3 }}" name="strong3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $fact->icon4 }}" name="icon4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $fact->span4 }}" name="span4"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $fact->p5 }}" name="p5"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $fact->strong4 }}" name="strong4"
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