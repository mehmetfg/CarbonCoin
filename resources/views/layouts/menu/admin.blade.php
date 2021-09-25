{{--
--}}

<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Admin</h6>
        <p class="lan-2">Admin İşlemleri</p>
    </div>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('dealers*') ? 'active' : '' }}" href="{{ route('dealers.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/dealers.plural')              </span></a>
</li>

<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('partners*') ? 'active' : '' }}" href="{{ route('partners.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/partners.plural')              </span></a>

</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('tokens*') ? 'active' : '' }}" href="{{ route('tokens.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/tokens.plural')              </span></a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('powerStations*') ? 'active' : '' }}" href="{{ route('powerStations.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/powerStations.plural')              </span></a>

</li>
{{--
<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i><span class="lan-3">@lang('models/users.plural')              </span></a>
    <ul class="sidebar-submenu">
        <li><a href="{{ route('customers.index') }}">@lang('models/users.plural')</a></li>
        <li><a href="{{ route('knowYourCustomers.index') }}">@lang('models/knowYourCustomers.plural')  </a></li>
        <li><a href="{{ route('vallets.index') }}">@lang('models/vallets.plural')  </a></li>
    </ul>
</li>--}}
<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3">Borsa İşlemleri              </span></a>
    <ul class="sidebar-submenu">
        <li>
            <a class="{{ Request::is('exchanges*') ? 'active' : '' }}" href="{{ route('exchanges.index') }}"><span class="lan-3">@lang('models/exchanges.plural')              </span></a>
        </li>
        <li>
            <a class="{{ Request::is('traders*') ? 'active' : '' }}" href="{{ route('traders.index') }}"><span class="lan-3">@lang('models/traders.plural')              </span></a>
        </li>
        <li>
            <a class=" {{ Request::is('trades*') ? 'active' : '' }}" href="{{ route('trades.index') }}"><span class="lan-3">@lang('models/trades.plural')              </span></a>
        </li>
        <li>
            <a class="sidebar-link sidebar-title {{ Request::is('traderAssets*') ? 'active' : '' }}" href="{{ route('traderAssets.index') }}">@lang('models/traderAssets.plural')              </span></a>
        </li>
    </ul>
</li>









<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('transactions*') ? 'active' : '' }}" href="{{ route('transactions.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/transactions.plural')              </span></a>
</li>
{{--
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('messages*') ? 'active' : '' }}" href="{{ route('messages.index') }}">--}}
<i data-feather="home"></i>{{--
<span class="lan-3">@lang('models/messages.plural')              </span></a>
</li>

<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('annoncements*') ? 'active' : '' }}" href="{{ route('annoncements.index') }}">--}}
{{--<i data-feather="home"></i><span class="lan-3">--}}{{--
@lang('models/annoncements.plural')              </span></a>
</li>
--}}
