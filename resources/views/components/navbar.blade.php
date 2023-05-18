<div class="d-flex justify-content-between rounded px-5 sticky-top my-nav">
    <div class="d-flex">
        <a id="sidebar-toggler" class=" mr-3 text-white mt-2" style="cursor: pointer" onclick="toggleSidebar()">
            <i class="fas fa-bars fa-2x"></i>
        </a>
        <a href="{{ route('dashboard') }}" class="text-decoration-none mr-3 mt-1 text-white myText" style="font-size: 20px">
            {{ __('app.name') }}
        </a>
        {{-- <a class="navbar-brand" ">{{ __('app.name') }}</a> --}}

    </div>
    {{-- <div style="cursor: pointer">
        <ul class="navbar-nav ml-auto d-flex justify-content-between nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="mb-3" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="width: 130px;height:50px;overflow-y:hidden;">
                    {{ Auth::user()->name }} <i class="fas fa-sort-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{ route('password.change.form', Auth::user()) }}">Change
                        Password</a>
                    @hasanyrole('super-admin|admin')
                        <a class="dropdown-item" href="{{ route('configuration-checklist.index') }}">@lang('navigation.configuration_checklist')</a>
                    @endhasanyrole
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
    </div> --}}

    <div class="dropdown" style="margin-right: 0px;position: relative;outline:none;border:none">
        {{-- <div class="bg-success name-div">{{ substr(Auth::user()->name, 0, 1) }}</div> --}}
        <button class="py-3 dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="font-size: 20px">
            {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            <a class="dropdown-item" href="{{ route('user.profile', Auth::user()) }}">
                <i class="fas fa-user mr-3"></i> Profile</a>
            <a class="dropdown-item" href="{{ route('user.password', Auth::user()) }}"><i
                    class="fas fa-user-cog mr-3"></i>Change
                Password</a>

            <a class="dropdown-item border-bottom border-danger"
                href="{{ route('settings.index') }}"><i class="fas fa-cog mr-3"></i>Setting</a>


            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off mr-3"></i>{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
