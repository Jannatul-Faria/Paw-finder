<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-users">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.roles.index') }}">
                        <i data-feather="shield"></i>
                        <span data-key="t-roles">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i data-feather="list"></i>
                        <span data-key="t-categories">Categories</span>
                    </a>
                </li>
                <li><a href="{{ route('admin.blogs.index') }}" data-key="t-blog-list"><i class="bx bx-pen"></i>
                        <span data-key="t-blog">Blogs</span></a>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Apps</span>
                    </a>
                    <a href="javascript: void(0);" class="has-arrow">

                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-blog-category-list">Category
                                List</a></li>

                    </ul>

                </li> --}}
                <li>
                    <a href="{{ route('admin.brands.index') }}">
                        <i data-feather="type"></i>
                        <span data-key="t-categories">Brand</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.cities.index') }}">
                        <i data-feather="globe"></i>
                        <span data-key="t-cities">Cities</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pets.index') }}">
                        <i class="fas fa-paw"></i>
                        <span data-key="t-pets">Pets</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.pages.index') }}">
                        <i data-feather="layout"></i>
                        <span data-key="t-website">Page</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.tags.index') }}">
                        <i data-feather="tag"></i>
                        <span data-key="t-website">Tags</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.adoption.index') }}">
                        <i class="bx bx-git-pull-request"></i>
                        <span data-key="t-adoption-request">Adoption Request</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.generalSetting') }}">
                        <i data-feather="settings"></i>
                        <span data-key="t-setting">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.subscribers.index') }}">
                        <i data-feather="send"></i>
                        <span data-key="t-subscribes">Subscribers</span>
                    </a>
                </li>
                <li>
                    <a href="/" target="_blank">
                        <i data-feather="globe"></i>
                        <span data-key="t-website" class="text-danger">Website</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
