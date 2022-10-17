<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <div class="row col-2"> @include('components.application-logo') </div>
        <div class="d-flex justify-content-end">
            <a href="#" class="dropdown-toggle btn btn-outline-success rounded" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
            </a>
            
        </div>
    </div>
</nav>
