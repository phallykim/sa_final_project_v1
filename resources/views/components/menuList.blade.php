<nav class="main-nav">
    <ul class="parent-nav">
        <li class="has-dropdown">
            <a class="nav-link " href="#">
                <span class="rolling-text">HOME</span>
            </a>
        
        <li>
            <a class="nav-link" href="{{ route('about') }}">
                <span class="rolling-text">ABOUT</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">SERVICES</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('service') }}">Service</a></li>              
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">REQUEST</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('blog') }}">Request Form</a></li>
            </ul>
        </li>
    
        <li>
            <a class="nav-link" href="{{ route('contact') }}">
                <span class="rolling-text">CONTACT</span>
            </a>
        </li>
    </ul>
</nav>