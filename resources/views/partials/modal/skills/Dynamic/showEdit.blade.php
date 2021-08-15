<div class="modal fade" id="exampleModalToggle_{{ $skillsDynamic->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel">Show Dynamic data Skills</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="card " style="width: 100%;">
                    <div class="card-body">
                        <h4 class="">{{ $skillsDynamic->span }}</h4>
                        <h4 class="" style="">{{ $skillsDynamic->i }}</h4>
                        <h4 class="">{{ $skillsDynamic->aria }}</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/contenuSkillsDynamic/{{ $skillsDynamic->id }}/edit" class="btn btn-primary text-white"
                    data-target="#exampleModalToggle2_{{ $skillsDynamic->id }}" data-toggle="modal"
                    data-dismiss="modal">edit</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $skillsDynamic->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Modifier Dynamic data Skills</h5>
                <button type="button" class="btn-close " data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form action="/contenuSkillsDynamic/{{ $skillsDynamic->id }}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Span</label>
                        <input type="text" class="form-control" value="{{ $skillsDynamic->span }}"
                            name="span" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Pourcentage</label>
                        <input type="text" class="form-control" value="{{ $skillsDynamic->i }}" name="i"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Aria</label>
                        <input type="text" class="form-control" value="{{ $skillsDynamic->aria }}" name="aria"
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
