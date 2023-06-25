<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalCreate">
  Add User
</button>

<!-- Modal Create -->
<div class="modal fade" id="ModalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Add User
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('users.store') }}" method="POST">
          @csrf
          {{-- Name --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Name
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="text" name="name" id="" class="form-control" required>
            </div>
          </div>

          {{-- Email --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Email
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="email" name="email" id="" class="form-control" required>
            </div>
          </div>

          {{-- Password --}}
          <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="">
              Password
              <span class="text-danger">*</span>
            </label>
            <div class="col-md">
              <input type="password" name="password" id="" class="form-control" required>
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
