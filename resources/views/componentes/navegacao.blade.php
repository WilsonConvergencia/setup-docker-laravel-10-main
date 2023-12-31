<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                href="#">
                <svg class="bi">
                    <use xlink:href="#house-fill" />
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{route('venda.index')}}">
                <svg class="bi">
                    <use xlink:href="#file-earmark" />
                </svg>
                Sales
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('produto.index')}}">
                <svg class="bi">
                    <use xlink:href="#cart" />
                </svg>
                Products
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('clientes.index')}}">
                <svg class="bi">
                    <use xlink:href="#people" />
                </svg>
                Customers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi">
                    <use xlink:href="#graph-up" />
                </svg>
                Reports
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi">
                    <use xlink:href="#puzzle" />
                </svg>
                Integrations
            </a>
        </li>
    </ul>

    <hr class="my-3">

    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi">
                    <use xlink:href="#gear-wide-connected" />
                </svg>
                Settings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi">
                    <use xlink:href="#door-closed" />
                </svg>
                Sign out 
            </a>
        </li>
    </ul>
</div>