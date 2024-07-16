<!-- edit.blade.php -->
<form id="editForm" method="post" action="{{ route('epaper.update', $epaper->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
          <label for="paper_title" class="col-form-label pt-0">Title <sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="paper_title" name="paper_title" value={{$epaper->paper_title}} required>
            <small id="emailHelp" class="form-text text-muted">This is your paper title</small>
        </div>
        <div class="form-group">
          <label for="Paper_image" class="col-form-label pt-0">Image <sup class="text-size-20 top-1">*</sup></label>
          <input type="file" class="dropify" data-height="200" name="Paper_image" />
          <small id="emailHelp" class="form-text text-muted">This is your Paper Image</small>
        </div>
        <div class="form-group">
          <label for="Paper_image" class="col-form-label pt-0">PDF <sup class="text-size-20 top-1">*</sup></label>
          <input type="file" accept="pdf" name="Paper_pdf" class="form-control name_list">
          <small id="emailHelp" class="form-text text-muted">Put here only pdf</small>
        </div>
        <div class="form-group">
          <label for="paper_date" class="col-form-label pt-0">Published Date</label>
          <input type="datetime-local" class="form-control" id="paper_date" name="paper_date" value="{{$epaper->paper_date}}">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
        </div>
      </div>
</form> 
<script src="{{asset('/')}}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/fileuploads/js/file-upload.js"></script>