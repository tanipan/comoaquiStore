<form action="{{ route('admin.huber.list') }}" method="GET" class="form-inline mx-2">

    <div class="input-group">
        <input class="form-control form-control-navbar" type="search" name="search" placeholder="Buscar cliente"
            aria-label="{{ $item['aria-label'] ?? $item['text'] }}">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
