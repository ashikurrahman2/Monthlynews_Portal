@extends('layouts.admin')
@section('title','Contact')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Contact</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">+ Add New</button>
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
              <h5>All Contacts list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="cbtn-selectors" class="table table-striped table-bordered nowrap table-sm">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Contact Name</th>
                      <th>Contact Email</th>
                      <th>Contact Phone</th>
                      <th>Contact Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$contact->contact_name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->address}}</td>
                            <td class="d-flex">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="{{$contact->id}}" data-bs-toggle="modal" data-bs-target="#editModal">
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm delete" data-id="{{$loop->iteration}}">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <form id="delete-form-{{ $loop->iteration }}" action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                  @csrf
                                  @method("DELETE")
                                </form>
                            </td>
                        </tr>
                    @endforeach    
                  </tbody>
                  {{-- <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Contact Name</th>
                        <th>Contact Email</th>
                        <th>Contact Phone</th>
                        <th>Contact Address</th>
                        <th>Action</th>
                    </tr>
                  </tfoot> --}}
                </table>
              </div>
            </div>
          </div>
        </div><!-- HTML5 Export Buttons end -->

      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
  <!-- Category Insert Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('contacts.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="contact_name" class="col-form-label pt-0">Contact Name <sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="contact_name" name="contact_name" required>
                        <small id="emailHelp" class="form-text text-muted">This is your main Name</small>
                    </div>
                        {{-- Email Section --}}
                    <div class="form-group">
                        <label for="email" class="col-form-label pt-0">Contact Email<sup class="text-size-20 top-1">*</sup></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <small id="emailHelp" class="form-text text-muted">This is your main Email</small>
                    </div>

                          {{-- Phone Section --}}
                          <div class="form-group">
                            <label for="phone" class="col-form-label pt-0">Contact Phone<sup class="text-size-20 top-1">*</sup></label>
                            <input type="phone" class="form-control" id="phone" name="phone" required>
                            <small id="phone" class="form-text text-muted">This is your main phone</small>
                        </div>

                             {{-- Address Section --}}
                             <div class="form-group">
                                <label for="address" class="col-form-label pt-0">Contact Address<sup class="text-size-20 top-1">*</sup></label>
                                <input type="text" class="form-control" id="address" name="address" required>
                                <small id="address" class="form-text text-muted">This is your main address</small>
                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Contact Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Edit Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>
  

{{-- Script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
<script type="text/javascript">
    $('body').on('click', '.edit', function(){
        let id = $(this).data('id');
        $.get("contacts/" + id + "/edit", function(data){
            $('.modal-body').html(data);
        });
    });
</script>

  
@endsection