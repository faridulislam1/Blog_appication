<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button"><i class="bi bi-file-earmark-richtext"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="User">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-user" type="button"><i class="bi bi-file-earmark-richtext"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Role">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-role" type="button"><i class="bi bi-file-earmark-richtext"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{ asset('admin-asset') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('dashboard') }}" class="list-group-item"><i class="bi bi-envelope"></i>Dashboard</a>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-settings">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add.category') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Category</a>
                    <a href="{{ route('manage.category') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Manage Category</a>

                    <a href="{{ route('add.author') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Author</a>
                    <a href="{{ route('manage.author') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Manage Author</a>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add.blog') }}" class="list-group-item"><i class="bi bi-file-earmark-plus"></i>Add Blog</a>
                    <a href="{{ route('manage.blog') }}" class="list-group-item"><i class="bi bi-file-earmark-ruled"></i>Manage manage</a>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-user">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">User Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add.user') }}" class="list-group-item"><i class="bi bi-file-earmark-plus"></i>Add User</a>
                    <a href="{{ route('manage.user') }}" class="list-group-item"><i class="bi bi-file-earmark-ruled"></i>Manage user</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-role">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Role Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('role') }}" class="list-group-item"><i class="bi bi-file-earmark-plus"></i>Role Manager</a>
                </div>
            </div>
        </div>
    </div>
</aside>
