<div class="dropdown mb-4 show">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="true">
        Action
    </button>
    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
        <a href="{{ route('customer.index')}}" class="dropdown-item"><i class="fas fa-list"></i>
            List
        </a>
        <a href="{{ route('customer.create')}}" class="dropdown-item">
            <i class="fas fa-plus-circle"></i>
            <span class="text">Add Customer</span>
        </a>
    </div>
</div>
