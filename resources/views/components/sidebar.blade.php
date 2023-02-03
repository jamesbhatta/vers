<div class="mb-3">
    <div class=" rounded d-flex justify-content-center align-items-center">
        <div class="d-block mt-3">
            <img src="{{ asset('assets/image/nep-gov-logo-sm.png') }}" style="height: 100px">
            <h4 class="font-weight-bold myText text-center" style="color:#fff;margin-top:10px;font-size:30px">
                {{ __('app.name') }}</h4 class="text-uppercase font-weight-bold">
        </div>
    </div>
</div>
<div id="sidenav-wrapper" class="font-noto mt-3">
    <ul id="sidenav" class="nav flex-column font-noto">
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('dashboard') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fa fa-tachometer-alt pr-3"></i>@lang('navigation.dashboard')
            </a>
        </li>
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('birth.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-baby pr-3"></i>@lang('navigation.birth-notice-form')
            </a>
        </li>
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('death.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-bolt pr-3"></i>@lang('navigation.death-notice-form')
            </a>
        </li>
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('marriage.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-restroom pr-3"></i>@lang('navigation.marriage-notice-form')
            </a>
        </li>
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('migration.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-exchange-alt pr-3"></i>@lang('navigation.migration-notice-form')
            </a>
        </li>
        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('vdc.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-city pr-3"></i>साबिकको ठेगाना
            </a>
        </li>

        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('book.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-city pr-3"></i>पुस्तक
            </a>
        </li>

        <li class="nav-item bg-transparent">
            <a class="nav-link fontSize" href="{{ route('settings.index') }}" onmouseover="this.style.color='black'"
                onmouseout="this.style.color='white'">
                <i class="fas fa-cog pr-3"></i>@lang('navigation.settings')
            </a>
        </li>
        @role('super-admin')
            <li class="nav-item bg-transparent">
                <a class="nav-link fontSize" href="{{ route('user.index') }}" onmouseover="this.style.color='black'"
                    onmouseout="this.style.color='white'">
                    <i class="fa fa-users pr-3"></i>@lang('navigation.users')
                </a>
            </li>
        @endrole
    </ul>
</div>
<style>
    .fontSize {
        font-size: 19px;
    }
</style>
