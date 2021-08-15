<div class="modal fade" id="exampleModalToggle_{{ $servicesDynamic->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel">Show Dynamic data Services</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="card " style="width: 100%;">
                    <div class="card-body">
                        <h4 class="">{{ $servicesDynamic->icon }}</h4>
                        <h4 class="" style="">{{ $servicesDynamic->titre }}</h4>
                        <h4 class="">{{ $servicesDynamic->para }}</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/contenuServicesDynamic/{{ $servicesDynamic->id }}/edit" class="btn btn-primary text-white"
                    data-target="#exampleModalToggle2_{{ $servicesDynamic->id }}" data-toggle="modal"
                    data-dismiss="modal">edit</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $servicesDynamic->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Modifier Dynamic data Services</h5>
                <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form action="/contenuServicesDynamic/{{ $servicesDynamic->id }}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Icon</label>
                        <input type="text" class="form-control" value="{{ $servicesDynamic->icon }}"
                            name="icon" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Titre</label>
                        <input type="text" class="form-control" value="{{ $servicesDynamic->titre }}" name="i"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Paragraphe</label>
                        <input type="text" class="form-control" value="{{ $servicesDynamic->para }}" name="aria"
                            id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary text-white">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary text-white" data-target="#exampleModalToggle" data-toggle="modal"
                    data-dismiss="modal">Retour Show</button>
            </div>
        </div>
    </div>
</div>
