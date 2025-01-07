<!-- Modal form -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card mb-0">
                    <div class="card-header text-left">
                        <h3 class="fw-bolder text-info">Add Team Member</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data" role="form text-left">
                            @csrf
                            <label>English Name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="en_name" placeholder="Enter English Name" />
                            </div>
                            <label>Bangla Name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="bn_name" placeholder="Enter Bangla Name" />
                            </div>
                            <label>English Designation</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="en_designation" placeholder="Enter English Designation" />
                            </div>
                            <label>Bangla Designation</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="bn_designation" placeholder="Enter Bangla Designation" />
                            </div>
                            <label>English Description</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="en_description" placeholder="Enter English Description"></textarea>
                            </div>
                            <label>Bangla Description</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="bn_description" placeholder="Enter Bangla Description"></textarea>
                            </div>
                            <label>Image</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="image" />
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round btn-info btn-lg w-100 mt-4 mb-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>