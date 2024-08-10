<div>

    <button wire:click="openModal" class="btn btn-primary">Open Bio Data Modal</button>

    @if ($isOpen)
        <div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                      <h5 class="modal-title">Biodata</h5>
                      <button type="button" class="close" wire:click="closeModal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                      </button>
                   </div>
                   <div class="modal-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Libero, minus vitae adipisci quod, porro quia delectus,
                     quaerat voluptates dolor laboriosam aliquam eaque assumenda!
                     Quasi mollitia, dolores veniam consectetur assumenda rem.
                   </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                   </div>
               </div>
           </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
