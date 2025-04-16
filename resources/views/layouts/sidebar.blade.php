<!-- Wrapper -->
<div class="wrapper">

    <!-- Sidebar  -->
    <nav id="sidebar" class="mb-5">
        <div class="sidebar-header" class="shadow-sm">
            <h3 class="text-title text-center">
                {{-- {{ config('app.name') }} --}}
                <img src="/logo.png" alt="{{ config('app.name') }}" width="200px">
            </h3>
        </div>
        <hr class="m-0">
        <ul class="list-unstyled components" style="margin-bottom: 180px;">
            <li class="accordion" id="sstradeAccordion">

                <a href="/admin"><i class="material-icons-outlined">home</i>Dashboard</a>
                <a href="/"><i class="material-icons-outlined">web</i>Web Page</a>

                <a href="#userVipsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons-outlined">people_alt</i> Members</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('members.edit') || Request::path() === 'admin/members' || Request::path() === 'admin/members/create' ? 'show ' : '' }}"
                    data-parent="#userVipsSubmenu" id="userVipsSubmenu">
                    <li>
                        <a href="/admin/members">Members List</a>
                    </li>
                    <li>
                        <a href="/admin/members/create">Add Members</a>
                    </li>
                </ul>

                <a href="#vipSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-gem"></i> Vips</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('vips.edit') || Request::path() === 'admin/vips' || Request::path() === 'admin/vips/create' ? 'show ' : '' }}"
                    data-parent="#vipSubmenu" id="vipSubmenu">
                    <li>
                        <a href="/admin/vips">Vip List</a>
                    </li>
                    <li>
                        <a href="/admin/vips/create">Add Vip</a>
                    </li>
                </ul>

                <a href="#ActivitySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-gem"></i> Activities</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('activities.edit') || Request::path() === 'admin/activities' || Request::path() === 'admin/activities/create' ? 'show ' : '' }}"
                    data-parent="#ActivitySubmenu" id="ActivitySubmenu">
                    <li>
                        <a href="/admin/activities">Activity List</a>
                    </li>
                    <li>
                        <a href="/admin/activities/create">Add activity</a>
                    </li>
                </ul>

                <a href="#PageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="material-icons-outlined">auto_stories</i> Pages</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('pages.edit') || Request::path() === 'admin/pages' || Request::path() === 'admin/pages/create' ? 'show ' : '' }}"
                    data-parent="#PageSubmenu" id="PageSubmenu">
                    <li>
                        <a href="/admin/pages">Page List</a>
                    </li>
                    <li>
                        <a href="/admin/pages/create">New Page</a>
                    </li>
                </ul>

                @role('admin|devadmin|editor')

                <a href="#user_typeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="material-icons-outlined">credit_card</i>Members Types</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('user_types.edit') || Request::path() === 'user_types' || Request::path() === 'user_types/create' ? 'show ' : '' }}"
                    data-parent="#user_typeSubmenu" id="user_typeSubmenu">
                    <li>
                        <a href="/user_types">Members Type List</a>
                    </li>
                    <li>
                        <a href="/user_types/create">New Members Type</a>
                    </li>
                </ul>

                <a href="#banksSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="material-icons-outlined">account_balance </i>Payment Methods</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('bank_transfer') || request()->routeIs('banks.show') || request()->routeIs('banks.edit') || Request::path() === 'banks' || Request::path() === 'banks/create' ? 'show ' : '' }}"
                    data-parent="#banksSubmenu" id="banksSubmenu">
                    <li>
                        <a href="#/banks">Payment Method</a>
                    </li>
                </ul>

                @endrole
                {{-- end expenses side bar --}}


                <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons-outlined">notes</i>Report</a>
                <ul class="mb-5 collapse list-unstyled {{ request()->routeIs('assets_report') || request()->routeIs('bank_report') || request()->routeIs('expenses_report') || request()->routeIs('earnings_report') || request()->routeIs('roi_report') ||  request()->routeIs('projects_report') || request()->routeIs('investments_report') || request()->routeIs('funds_report') || request()->routeIs('accounts_report') ||Request::path() === 'accounts_report' ? 'show' : '' }}" data-parent="#sstradeAccordion" id="reportSubmenu">

                    <li>
                        {{-- <a href="{{ route("assets_report") }}">Assets & Liabilities</a> --}}
                        <a href="#">Test</a>
                    </li>

                </ul>


                {{--
                <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons-outlined">settings</i>Settings</a>
                <ul class="collapse list-unstyled {{ Request::path() === 'productTypes' || Request::path() === 'productTypes/create' ? 'show ' : ''}}" data-parent="#sstradeAccordion" id="settingsSubmenu">
                    <li>
                        <a href="/settings">Profile Setting</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul> --}}
            </li>
        </ul>
    </nav>
    <!-- End Sidebar  -->
