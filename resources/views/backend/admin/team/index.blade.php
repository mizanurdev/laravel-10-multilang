@extends('backend.admin.master')
@section('title')
    Team | Admin Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div id="success-message" class="alert alert-success" style="display: none;">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Teams</h4>
                    <a href="" class="btn btn-primary btn-round">Add Team</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Bn Name</th>
                                    <th>Designation</th>
                                    <th>Bn Designation</th>
                                    <th>Description</th>
                                    <th>Bn Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                  <td>Sl</td>
                                        <td>Image</td>
                                        <td>Name</td>
                                        <td>Bn Name</td>
                                        <td>Designation</td>
                                        <td>Bn Designation</td>
                                        <td>Description</td>
                                        <td>Bn Description</td>
                                        <td>
                                            <div class="form-button-action d-flex align-items-center">
                                                <a href=""
                                                    class="btn btn-link btn-primary btn-lg"> <i class="fa fa-edit"></i></a>
                                                <form action="#" method="POST"
                                                    style="display: inline-block;">
                                                    
                                                    <button type="submit" class="btn btn-link btn-danger"
                                                        onclick="return confirm('Are you sure to delete this?')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#basic-datatables").DataTable({});
        });
    </script>
@endsection
