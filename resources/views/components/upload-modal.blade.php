<a href="#upload-modal{{ $modal->id }}-upload-model" class="btn btn-outline-warning btn-hover-warning btn-sm"
    data-toggle="modal" data-bs-toggle="modal">
    <i class="fi fi-br-refresh fa-fw"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="upload-modal{{ $modal->id }}-upload-model" tabindex="-1" role="dialog"
    aria-labelledby="modal-title-{{ $modal->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-{{ $modal->id }}">{{ $title }}</h5>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ $route }}" id="form" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="file" name="sheet" class="form-control" id="">
                    <label for="input" class="form-text">{{ $info }}</label>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">
                    {{ $cancel }}
                </button>

                <button type="submit" class="btn btn-danger" form="form">
                    {{ $confirm }}
                </button>
            </div>
        </div>
    </div>
</div>
