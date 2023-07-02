<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalCreate">
  Add Transaction
</button>

<!-- Modal Create -->
<div class="modal fade" id="ModalCreate" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Add Transaction
        </h5>
        <button type="button" class="btn-close btn-secondary" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{-- Select Book --}}

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
          Save
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Create --}}
