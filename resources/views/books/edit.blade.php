<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ModalCreate{{ $book->id }}">
  <i class="fas fa-pen"></i>
</button>

<!-- Modal Create -->
<div class="modal fade" id="ModalCreate{{ $book->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Edit Book
        </h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          {{-- Title --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Title
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="title" id="" value="{{ $book->title }}" class="form-control" required>
            </div>
          </div>

          {{-- Author --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Author
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="author" id="" value="{{ $book->author }}" class="form-control" required>
            </div>
          </div>

          {{-- Price --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Price
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="price" id="" value="{{ $book->price }}" class="form-control" required>
            </div>
          </div>

          {{-- Description --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Description
            </label>
            <div class="col-md">
              <textarea name="description" id="" cols="30" rows="10"
                class="form-control">{{ $book->description }}</textarea>
            </div>
          </div>

          {{-- Cover --}}
         <div class="row mb-3">
          <label class="col-md-3 col-form-label" for="">
            Cover
          </label>
          <div class="col-md">
            <input type="file" name="cover" id="" class="form-control mb-2">
            <img src="/storage/{{ $book->cover }}" alt="" style="width: 100px">
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
