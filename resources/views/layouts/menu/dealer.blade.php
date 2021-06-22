<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Bayi</h6>
        <p class="lan-2">Bayi İşlemleri</p>
    </div>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('partners*') ? 'active' : '' }}" href="{{ route('partners.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/partners.plural')              </span></a>

</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('powerStations*') ? 'active' : '' }}" href="{{ route('powerStations.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/powerStations.plural')              </span></a>

</li>

<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3">@lang('models/customers.plural')              </span></a>
    <ul class="sidebar-submenu">
        <li><a href="{{ route('customers.index') }}">@lang('models/users.plural')</a></li>
        <li><a href="{{ route('knowYourCustomers.index') }}">@lang('models/knowYourCustomers.plural')  </a></li>
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title {{ Request::is('vallets*') ? 'active' : '' }}" href="{{ route('partner.vallets.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/vallets.plural')              </span></a>
        </li>
    </ul>
</li>

