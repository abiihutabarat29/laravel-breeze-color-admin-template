<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ url('/dashboard') }}" class="navbar-brand"><span class="navbar-logo"></span> Administrator</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/user-13.jpg" alt="" />
                    <span class="hidden-xs">{{ Auth::user()->name }}</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    {{ Auth::user()->name }}
                    <small>{{ Auth::user()->email }}</small>
                </div>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Menu</li>
            <x-menu link="{{ route('dashboard') }}" icon="fa fa-laptop" label="Dashboard" active="dashboard"></x-menu>
            <x-menuDropdown icon="fa fa-file" label="Master Data"
                active="{{ request()->segment(1) == 'data-1' || request()->segment(1) == 'data-2' ? 'active' : '' }}">
                <x-linkDropdown link="#" label="Data 1" active="data-1">
                </x-linkDropdown>
                <x-linkDropdown link="#" label="Data-2" active="data-2">
                </x-linkDropdown>
            </x-menuDropdown>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
