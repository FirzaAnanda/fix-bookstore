<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalCreate">
  Add Book
</button>

<!-- Modal Create -->
<div class="modal fade" id="ModalCreate" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Add Book
        </h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{-- Title --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Title
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="title" id="" class="form-control" required>
            </div>
          </div>

          {{-- Author --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Author
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="author" id="" class="form-control" required>
            </div>
          </div>

          {{-- Price --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Price
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="price" id="" class="form-control" required>
            </div>
          </div>

          {{-- Description --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Description
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>

         {{-- Cover --}}
         <div class="row mb-3">
          <label class="col-md-3 col-form-label" for="">
            Cover
          </label>
          <div class="col-md">
            <input type="file" name="cover" id="" class="form-control">
          </div>
        </div>
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
