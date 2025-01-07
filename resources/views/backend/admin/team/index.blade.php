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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn btn-primary btn-round">Add Team</a>
                    @include('backend.admin.team.create')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>En Name</th>
                                    <th>Bn Name</th>
                                    <th>En Designation</th>
                                    <th>Bn Designation</th>
                                    <th>En Description</th>
                                    <th>Bn Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/'.$team->image) }}" alt="image" width="50px" height="50px">
                                    </td>
                                    <td>{{ $team->en_name }}</td>
                                    <td>{{ $team->bn_name }}</td>
                                    <td>{{ $team->en_designation }}</td>
                                    <td>{{ $team->bn_designation }}</td>
                                    <td>{{ $team->en_description }}</td>
                                    <td>{{ $team->bn_description }}</td>
                                    <td>
                                        <div class="form-button-action d-flex align-items-center">
                                            <form action="{{ route('team.destroy', $team->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link btn-danger" onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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
