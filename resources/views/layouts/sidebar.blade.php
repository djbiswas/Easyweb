<!-- Wrapper -->
<div class="wrapper">

    <!-- Sidebar  -->
    <nav id="sidebar" class="mb-5">
        <div class="sidebar-header shadow-sm">
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

                <a href="#userVipsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons-outlined">people_alt</i> Members</a>
                <ul class="collapse list-unstyled {{ request()->routeIs('members.edit') || Request::path() === 'admin/members' || Request::path() === 'admin/members/create' ? 'show ' : '' }}"
                    data-parent="#userVipsSubmenu" id="userVipsSubmenu">
                    <li>
                        <a href="/admin/members">Customer List</a>
                    </li>
                    <li>
                        <a href="/admin/members/create">Add Members</a>
                    </li>
                </ul>

                @endrole


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
