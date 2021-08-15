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
        <form action="/about/{{ $about->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre</label>
                <input type="text" class="form-control"
                    value="{{ $about->titreAbout }}" name="titreAbout"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                <input type="text" class="form-control"
                    value="{{ $about->p1 }}" name="p1"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                <input type="text" class="form-control"
                    value="{{ $about->img }}" name="img"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Titre 2 </label>
                <input type="text" class="form-control"
                    value="{{ $about->h3 }}" name="h3"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li birthday </label>
                <input type="text" class="form-control"
                    value="{{ $about->li_birthday }}" name="li_birthday"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">birthday </label>
                <input type="text" class="form-control"
                    value="{{ $about->birthday }}" name="birthday"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li website</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_website }}" name="li_website"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">website</label>
                <input type="text" class="form-control"
                    value="{{ $about->website }}" name="website"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li phone</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_phone }}" name="li_phone"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">phone</label>
                <input type="text" class="form-control"
                    value="{{ $about->phone }}" name="phone"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li city</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_city }}" name="li_city"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">city</label>
                <input type="text" class="form-control"
                    value="{{ $about->city }}" name="city"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li age</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_age }}" name="li_age"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">age</label>
                <input type="text" class="form-control"
                    value="{{ $about->age }}" name="age"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li degree</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_degree }}" name="li_degree"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">degree</label>
                <input type="text" class="form-control"
                    value="{{ $about->degree }}" name="degree"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li email</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_email }}" name="li_email"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">email</label>
                <input type="text" class="form-control"
                    value="{{ $about->email }}" name="email"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">li freelance</label>
                <input type="text" class="form-control"
                    value="{{ $about->li_freelance }}" name="li_freelance"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">freelance</label>
                <input type="text" class="form-control"
                    value="{{ $about->freelance }}" name="freelance"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">paragrapghe</label>
                <input type="text" class="form-control"
                    value="{{ $about->p3 }}" name="p3"
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