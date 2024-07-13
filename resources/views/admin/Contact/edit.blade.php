<form action="{{ route('contacts.update', $contact->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="contact_name" class="col-form-label pt-0">Contact Name <sup class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ $contact->contact_name }}" required>
        <small id="emailHelp" class="form-text text-muted">This is your main contact name</small>
    </div>
    <div class="form-group">
        <label for="email" class="col-form-label pt-0">Contact Email <sup class="text-size-20 top-1">*</sup></label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
        <small id="emailHelp" class="form-text text-muted">This is your main email</small>
    </div>
    <div class="form-group">
        <label for="phone" class="col-form-label pt-0">Phone Number <sup class="text-size-20 top-1">*</sup></label>
        <input type="phone" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required>
        <small id="emailHelp" class="form-text text-muted">This is your main phone</small>
    </div>
    <div class="form-group">
        <label for="address" class="col-form-label pt-0">Address <sup class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}" required>
        <small id="emailHelp" class="form-text text-muted">This is your main address</small>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
                