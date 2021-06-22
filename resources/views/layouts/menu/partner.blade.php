<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Firma</h6>
        <p class="lan-2">Firma İşlemleri</p>
    </div>
</li>

<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('vallets*') ? 'active' : '' }}" href="{{ route('partner.vallets.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/vallets.plural')              </span></a>
</li>



<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('transactions*') ? 'active' : '' }}" href="{{ route('transactions.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/transactions.plural')              </span></a>
</li>

