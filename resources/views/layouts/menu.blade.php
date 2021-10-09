<li class="sidebar-list">
   <a class="sidebar-link sidebar-title" href="/"><i data-feather="home"></i><span class="lan-3">Back Office              </span></a>
</li>
<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3">Borsa İşlemleri              </span></a>
    <ul class="sidebar-submenu">

        <li>
            <a class="sidebar-link sidebar-title" href="{{ route('exchange.report') }}"> <span class="lan-3"> Raporlar            </span></a>
        </li>
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

@if(auth()->user()->isAdmin())
    @include("layouts.menu.admin")
@endif
@if(auth()->user()->isDealer())
    @include("layouts.menu.dealer")
@endif
@if(auth()->user()->isPartner())
    @include("layouts.menu.partner")
@endif
@if(auth()->user()->isCustomer())
    @include("layouts.menu.customer")
@endif
@if(! auth()->user()->isAdmin())
{{--    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title {{ Request::is('messages*') ? 'active' : '' }}" href="{{ route('messages.create') }}">--}}<i data-feather="home"></i>{{--<span class="lan-3">@lang('models/messages.singular')              </span></a>
    </li>--}}
@endif


{{--<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="{{ route('profile.show') }}">--}}<i data-feather="home"></i>{{--<span class="lan-3">       {{ __('Profile') }}</span></a>
</li>--}}




