<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Firma</h6>
        <p class="lan-2">Firma İşlemleri</p>
    </div>
</li>




<li class="sidebar-list">
    <a class="sidebar-link sidebar-title {{ Request::is('powerStations*') ? 'active' : '' }}" href="{{ route('powerStations.index') }}"><i data-feather="home"></i><span class="lan-3">@lang('models/powerStations.plural')              </span></a>

</li>
