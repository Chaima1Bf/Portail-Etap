<li class="side-menus">
    <a class="nav-link" href=""><i class="fas fa-building"></i><span>Dashboard</span></a>
</li>

<li class="side-menus">
    <a class="nav-link" href=""><i class="fas fa-building"></i><span>Pointage</span></a>
</li>

<li class="side-menus {{ Request::is('leaves*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('leaves.index') }}"><i class="fas fa-building"></i><span>Congés</span></a>
</li>

@if (Auth::user()->is_admin == 1)
    <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}"><i
                class="fas fa-users"></i><span>Personnels</span></a>

    </li>
@endif


<li class="side-menus">
    <a class="nav-link" href="{{}}"><i class="fas fa-building"></i><span>Abscences</span></a>
</li>


<li class="side-menus">
    <a class="nav-link" href=""><i class="fas fa-building"></i><span>Calendar</span></a>
</li>

<li class="side-menus">
    <a class="nav-link" href=""><i class="fas fa-building"></i><span>Badges</span></a>
</li>
