<a href="#reject-modal{{ $modal->id }}-reject-model" class="btn btn-outline-danger btn-hover-danger btn-sm"
    data-toggle="modal" data-bs-toggle="modal">
    <i class="fas fa-ban fa fa-fw"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="reject-modal{{ $modal->id }}-reject-model" tabindex="-1" role="dialog"
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
                {{ BsForm::patch($route) }}

                {{ BsForm::textarea('reason')->rows(10)->attribute('class', 'form-control')->name('reason')->required()->attribute(['data-parsley-maxlength' => '1000', 'data-parsley-minlength' => '3'])->placeholder($placeholder)->label($label) }}

                <div class="text-end">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" data-bs-dismiss="modal">
                        {{ $cancel }}
                    </button>
                    <button type="submit" class="btn btn-secondary">
                        {{ $confirm }}
                    </button>
                </div>
                {{ BsForm::close() }}
            </div>
        </div>
    </div>
</div>
