<div class="navbar-right">
    <div class="header-icons d-inline-block align-middle">
        <div class="position-relative d-inline-block">
            <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="simple-icon-bell"></i>
                <span class="count">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="img/profile-pic-l-2.jpg" alt="Notification Image"
                            class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                    </a>
                    <div class="pl-3 pr-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                            <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="img/notification-thumb.jpg" alt="Notification Image"
                            class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                    </a>
                    <div class="pl-3 pr-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                            <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                        </a>
                    </div>
                </div>


                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="img/notification-thumb-2.jpg" alt="Notification Image"
                            class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                    </a>
                    <div class="pl-3 pr-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                            <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-row mb-3 pb-3 ">
                    <a href="#">
                        <img src="img/notification-thumb-3.jpg" alt="Notification Image"
                            class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                    </a>
                    <div class="pl-3 pr-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">3 items just added to wish list by a user!</p>
                            <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
            <i class="simple-icon-size-fullscreen"></i>
            <i class="simple-icon-size-actual"></i>
        </button>

    </div>

    <div class="user d-inline-block">
        <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="name">{{ Auth::user()->name }}</span>
            <span>
                <img alt="Profile Picture" src="https://api.adorable.io/avatars/70/{{Auth::user()->email}}" />
            </span>
        </button>

        <div class="dropdown-menu dropdown-menu-right mt-3">
            {{-- <a class="dropdown-item" href="#">Account</a> --}}
            {{-- <a class="dropdown-item" href="#">Features</a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>