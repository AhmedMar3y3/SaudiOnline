<a href="#delete-modal{{ $modal->id }}-delete-model" class="btn btn-outline-danger btn-hover-danger btn-sm"
    data-toggle="modal" data-bs-toggle="modal">
    <i class="fas fa-trash-alt fa fa-fw"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="delete-modal{{ $modal->id }}-delete-model" tabindex="-1" role="dialog"
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
                {{ $info }}
            </div>
            <div class="modal-footer">
                {{ BsForm::delete($route) }}
                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">
                    {{ $cancel }}
                </button>
                <button type="submit" class="btn btn-danger">
                    {{ $confirm }}
                </button>
                {{ BsForm::close() }}
            </div>
        </div>
    </div>
</div>
