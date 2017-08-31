<div class="uk-navbar-flip">
    <ul class="uk-navbar-nav user_actions">

        <!--  @include('layouts.theme.includes.nav_alert') -->
        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
            <a href="#" class="user_action_image"><i class="material-icons">&#xE851;</i></a></a>
            <div class="uk-dropdown uk-dropdown-small">
                <ul class="uk-nav js-uk-prevent">
                    <li><a href="page_user_profile.html">My profile</a></li>
                    <li><a href="page_settings.html">Settings</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                                                                   
                                        
                </ul>
            </div>
        </li>
    </ul>
</div>