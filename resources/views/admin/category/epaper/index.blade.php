@extends('layouts.admin')
@section('title','Epaper')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Epaper</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
      <div class="row">
        <!-- HTML5 Export Buttons table start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header table-card-header">
              <h5>All EPaper list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Image</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SL</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Image</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div><!-- HTML5 Export Buttons end -->

      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
  <!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Paper</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('epaper.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="paper_title" class="col-form-label pt-0">Title <sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="paper_title" name="paper_title" required>
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
                  <input type="datetime-local" class="form-control" id="paper_date" name="paper_date">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>
                 

</div>

 <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Epaper</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Edit form content will be loaded here -->
          </div>
      </div>
  </div>
</div>
  <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function epaper(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('epaper.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'paper_title', name: 'paper_title' },
                { data: 'paper_slug', name: 'paper_slug' },
                { data: 'Paper_image', name: 'Paper_image' },
                { data: 'paper_date', name: 'paper_date' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit Child Category
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("epaper/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

  //dropify image
 
  </script>
  
@endsection