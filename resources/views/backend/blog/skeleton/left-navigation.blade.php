		<div class="row">
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">

                        <div class="btn-group dropend">
                            <a href="" class="btn btn-secondary">Templates</a>

                            <a href="" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('template.manage-categories') }}">Category</a></li>
                                <li><a class="dropdown-item" href="{{ route('template.manage-subcategories') }}">Sub Category</a></li>
                                <li><a class="dropdown-item" href="{{ route('template.manage-sub-subcategories') }}">Sub Sub Category</a></li>
                                <li><a class="dropdown-item" href="{{ route('template.add-template') }}">Add Templates</a></li>
                                <li><a class="dropdown-item" href="{{ route('template.manage-templates') }}">Manage Templates</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8"></div>
        </div>