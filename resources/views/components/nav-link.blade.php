<div>
    <a class="nav-link {{ request()->routeIs($routeto) ? 'active active-line' : '' }}" href="<?= route($routeto);?>">{{ $slot }}</a>
</div>