<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        Contents
                    </h1>
                    <div class="page-header-subtitle">
                        You can find and manage your contents on this page.
                    </div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <button class="btn btn-orange p-3" type="button" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus fa-fw"></i>&nbsp;Create New Content
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Data Contents</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable_theCloud" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 45px;">No</th>
                            <th>Content</th>
                            <th style="width: 85px;">Images</th>
                            <th style="width: 110px;">Status</th>
                            <th style="width: 95px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="modal-create-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Content</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="category_id"></select>
                            </div>
                            <div class="form-group">
                                <label for="">End of Content Date</label>
                                <input class="form-control" id="finished_at" min="<?= date('Y-m-d', strtotime("+1 month")); ?>" type="date" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Content Name</label>
                                <input class="form-control" id="title" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <input class="form-control" id="short_description" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Long Description</label>
                                <textarea class="form-control" id="description" rows="7" style="padding-bottom: 22px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-create-submit" class="btn btn-orange" type="submit">Create Content</button>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-view-more" tabindex="-1" role="dialog" aria-labelledby="modal-view-more-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View More Data Content</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <b>Category:</b><br>
                    <span id="view-more-category"></span>
                </p>
                <p>
                    <b>Content Name:</b><br>
                    <span id="view-more-title"></span>
                </p>
                <p>
                    <b>Short Description:</b><br>
                    <span id="view-more-short_description"></span>
                </p>
                <p>
                    <b>Description:</b><br>
                    <span id="view-more-description"></span>
                </p>
                <p>
                    <b>Content End Date:</b><br>
                    <span id="view-more-finished_at"></span>
                </p>
                <p class="mb-0">
                    <b>Status:</b><br>
                    <span id="view-more-status" class="text-capitalize"></span><span id="view-more-live-link"></span>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-manage-images" tabindex="-1" role="dialog" aria-labelledby="modal-manage-images-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Manage Content Images</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="manage-images-campaign-id">
                <div id="wrapper-button-images" class="wrapper-button-images mb-2"></div>
                <div id="images-collapse"></div>
                <hr>
                <button class="btn btn-orange btn-sm btn-block" type="button" onclick="openModalAddNewImage()">Add New Image</button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-image" tabindex="-1" role="dialog" aria-labelledby="modal-add-image-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-add-image">
                <input type="hidden" name="content_id" id="add-image-campaign_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file">Image</label>
                        <input class="form-control" name="file" id="file" type="file">
                    </div>
                    <div class="form-group">
                        <label for="is_primary">Is Primary?</label>
                        <select class="form-control" name="is_primary" id="is_primary">
                            <option value="false">No</option>
                            <option value="true">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-add-image-submit" class="btn btn-orange" type="submit">Submit</button>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Content</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-edit">
                <input id="edit-id" type="hidden">
                <input id="edit-user_id" type="hidden">
                <input id="edit-status" type="hidden">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="edit-category_id"></select>
                            </div>
                          
                            <div class="form-group">
                                <label for="">End of Content Date</label>
                                <input class="form-control" id="edit-finished_at" type="date" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Content Name</label>
                                <input class="form-control" id="edit-title" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <input class="form-control" id="edit-short_description" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Long Description</label>
                                <textarea class="form-control" id="edit-description" rows="7" style="padding-bottom: 22px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit-submit" class="btn btn-orange" type="submit">Update</button>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>