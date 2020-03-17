<div class="dropdown mb-4 show">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="true">
        Action
    </button>
    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
        <a href="{{ route('products.index')}}" class="dropdown-item"><i class="fas fa-list"></i>
            List
        </a>
        <a href="{{ route('products.create')}}" class="dropdown-item">
            <i class="fas fa-plus-circle"></i>
            <span class="text">Add Product</span>
        </a>
    </div>
</div>
