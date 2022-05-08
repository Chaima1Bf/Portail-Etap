<li class="side-menus {{ Request::is('dash*') ? 'active' : '' }} ">
    <a class="nav-link" href="{{ route('dash') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
</li>

<li class="side-menus {{ Request::is('pointage*') ? 'active' : '' }} ">
    <a class="nav-link" href="{{ route('pointage') }}"><i class="fas fa-check-double"></i><span>Pointage</span></a>
</li>


<li class="side-menus {{ Request::is('leaves*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('leaves.index') }}"><i class="fas fa-file-alt"></i><span>Congés</span></a>
</li>

@if (Auth::user()->is_admin == 1)
    <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}"><i
                class="fas fa-users"></i><span>Personnels</span></a>

    </li>
@endif


<li class="side-menus {{ Request::is('absence*') ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('absence')}}"><i class="fas fa-user-minus"></i><span>Abscences</span></a>
</li>


<li class="side-menus {{ Request::is('event*') ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('event')}}"><i class="fas fa-calendar-alt"></i><span>Calendar</span></a>
</li>

<li class="side-menus {{ Request::is('badge*') ? 'active' : '' }} ">
    <a class="nav-link" href=""><i class="fas fa-id-badge"></i><span>Badges</span></a>
</li>
