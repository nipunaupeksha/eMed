<header class="header" id="header">
    <nav class="nav container">
        <a href="{{url('/')}}" class="nav__logo">
            <i class="ri-hospital-line"></i>eMed
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{url('/patient')}}" class="nav__link">Patients</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/doctor')}}" class="nav__link">Doctors</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/department')}}" class="nav__link">Departments</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/room')}}" class="nav__link">Rooms</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/prescription')}}" class="nav__link">Prescriptions</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/receptionist')}}" class="nav__link">Receptionists</a>
                </li>
                <li class="nav__item">
                    <a href="{{url('/record')}}" class="nav__link">Records</a>
                </li>
            </ul>
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
        <div class="nav__btns">
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>