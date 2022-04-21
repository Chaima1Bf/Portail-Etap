<aside id="sidebar-wrapper">
    <div class="sidebar-brand mt-4">
        <img style="width: 20%; height: auto;" src="{{URL::to('assets/images/etap2.png')}}" alt="">
         <a href="{{ url('/') }}">
            <h6>Portail Etap</h6>
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/etap2.png') }}" width="45px" alt="" />
        </a>
    </div>
    <br> <br>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>

</aside>
