<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                       Account Setting
                    </h1>
                    <div class="page-header-subtitle">
                        Page for setting and update your account.
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Update Your Account</div>
        <div class="card-body">
            <div class="col-10">
                <form id="update-account">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input disabled class="form-control" id="email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" type="password" placeholder="**********">
                        <small class="form-text text-muted">Leave blank if you don't want to change.</small>
                    </div>
                    <button type="submit" id="btn-update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
