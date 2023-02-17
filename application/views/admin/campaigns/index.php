<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        Campaigns
                    </h1>
                    <div class="page-header-subtitle">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <button class="btn btn-orange p-3" type="button" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus fa-fw"></i>&nbsp;Create New Campaign
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Data Campaigns</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable_test" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 45px;">No</th>
                            <th>Campaign</th>
                            <th>Goal Amount</th>
                            <th>Current Amount</th>
                            <th style="width: 85px;">Total Image</th>
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
                <h5 class="modal-title">Create New Campaign</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_id">Select User</label>
                                <select class="form-control" id="user_id"></select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="category_id"></select>
                            </div>
                            <div class="form-group">
                                <label for="title">Campaign Title</label>
                                <input class="form-control" id="title" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Goal Amount</label>
                                <input class="form-control" id="goal_amount" type="number" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <input class="form-control" id="short_description" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Long Description</label>
                                <textarea class="form-control" id="description" rows="14" style="padding-bottom: 16px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-create-submit" class="btn btn-orange" type="submit">Create Campaign</button>
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
                <h5 class="modal-title">View More Data Campaign</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

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
                <h5 class="modal-title">Manage Campaign Images</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrapper-button-images mb-2">
                    <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample1">
                        Images 1 (Primary)
                    </button>
                    <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample2">
                        Images 2
                    </button>
                </div>
                <div id="images-collapse">
                    <div class="collapse" id="collapseExample1">
                        <div class="wrapper-campaign-image">
                            <img src="https://www.linkpicture.com/q/15329611_1905.i126.005_programmer-work.jpg" alt="campaign image" class="mw-100">
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-danger btn-sm btn-block" type="button">Delete This Image</button>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <div class="wrapper-campaign-image">
                            <img src="https://www.linkpicture.com/q/15329611_1905.i126.005_programmer-work.jpg" alt="campaign image" class="mw-100">
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-danger btn-sm btn-block" type="button">Delete This Image</button>
                        </div>
                    </div>
                </div>
                <hr>
                <button class="btn btn-orange btn-sm btn-block" type="button">Add New Image</button>
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
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Campaign</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-edit">
                <input id="edit-id" type="hidden">
                <input id="edit-user_id" type="hidden">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="edit-category_id"></select>
                            </div>
                            <div class="form-group">
                                <label for="title">Campaign Title</label>
                                <input class="form-control" id="edit-title" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Goal Amount</label>
                                <input class="form-control" id="edit-goal_amount" type="number" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
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