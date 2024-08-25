@if (!empty(session('success')))
    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
        <i class="mdi mdi-check-all me-3 align-middle"></i>
        <strong>Success</strong> - {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(!empty(session('error')))
    <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
        <i class="mdi mdi-block-helper me-3 align-middle"></i>
        <strong>Error</strong> - {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(!empty(session('warning')))
    <div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
        <i class="mdi mdi-alert-outline align-middle me-3"></i>
        <strong>Warning</strong> - {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(!empty(session('info')))
    <div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
        <i class="mdi mdi-alert-circle-outline align-middle me-3"></i>
        <strong>Info</strong> - {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif