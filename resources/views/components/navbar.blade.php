<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">Idea</a>
    </div>
    <div class="navbar-center lg:flex">
        <ul class="menu menu-horizontal px-1">
            {{ $slot }}
        </ul>
    </div>
    <div class="navbar-end gap-2">
        <a class="btn btn-disabled">Login</a>
        <a class="btn btn-disabled">Sign Up</a>
    </div>
</div>
