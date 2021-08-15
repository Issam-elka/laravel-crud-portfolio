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
        <form action="/contact/{{ $contact->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $contact->titreContact }}" name="titreContact"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $contact->p }}" name="p"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon 1</label>
                <input type="text" class="form-control"
                    value="{{ $contact->icon1 }}" name="icon1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre 1 </label>
                <input type="text" class="form-control"
                    value="{{ $contact->titre1 }}" name="titre1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p1 </label>
                <input type="text" class="form-control"
                    value="{{ $contact->p1 }}" name="p1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon2</label>
                <input type="text" class="form-control"
                    value="{{ $contact->icon2 }}" name="icon2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre2</label>
                <input type="text" class="form-control"
                    value="{{ $contact->titre2 }}" name="titre2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p2</label>
                <input type="text" class="form-control"
                    value="{{ $contact->p2 }}" name="p2"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Icon3</label>
                <input type="text" class="form-control"
                    value="{{ $contact->icon3 }}" name="icon3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre3</label>
                <input type="text" class="form-control"
                    value="{{ $contact->titre3 }}" name="titre3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">p3</label>
                <input type="text" class="form-control"
                    value="{{ $contact->p3 }}" name="p3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormName</label>
                <input type="text" class="form-control"
                    value="{{ $contact->formName }}" name="formName"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormEmail</label>
                <input type="text" class="form-control"
                    value="{{ $contact->formEmail }}" name="formEmail"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormSubject</label>
                <input type="text" class="form-control"
                    value="{{ $contact->formSubject }}" name="formSubject"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">FormMessage</label>
                <input type="text" class="form-control"
                    value="{{ $contact->formMessage }}" name="formMessage"
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