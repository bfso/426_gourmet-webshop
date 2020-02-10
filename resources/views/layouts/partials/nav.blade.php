<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('products.index')}}">@lang('products.all')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('cart.index')}}">@lang('cart')</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="@lang('general.search')" aria-label="@lang('general.search')">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('general.search')</button>
        </form>
    </div>
</nav>
