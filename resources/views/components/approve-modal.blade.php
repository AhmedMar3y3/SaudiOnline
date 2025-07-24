<a href="#approve-modal{{ $modal->id }}-approve-model"
    class="btn btn-outline-success btn-hover-success btn-sm"
    data-toggle="modal"
    data-bs-toggle="modal">
     <i class="fas fa-check fa fa-fw"></i>
 </a>

 <!-- Modal -->
 <div class="modal fade" id="approve-modal{{ $modal->id }}-approve-model" tabindex="-1" role="dialog"
      aria-labelledby="modal-title-{{ $modal->id }}" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"
                     id="modal-title-{{ $modal->id }}">{{ $title }}</h5>
                 <button type="button" class="btn-close close" data-bs-dismiss="modal" data-dismiss="modal"
                         aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 {{ $info }}
             </div>
             <div class="modal-footer">
                 {{ BsForm::patch($route) }}
                 <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">
                     {{ $cancel }}
                 </button>
                 <button type="submit" class="btn btn-success">
                     {{ $confirm }}
                 </button>
                 {{ BsForm::close() }}
             </div>
         </div>
     </div>
 </div>
