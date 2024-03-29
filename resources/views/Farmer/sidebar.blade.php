<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="/home">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="/profile">
                <i class="material-icons">donut_large</i>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="/register_farmers">
                <i class="material-icons">layers</i>
                <span>Register Farmers</span>
            </a>
        </li>
        <li>
            <a href="/production_record">
                <i class="material-icons">donut_large</i>
                <span>Production Record</span>
            </a>
        </li>
        <li>
            <a href="{{route('visualization', ['id', auth()->user()->id])}}">
                <i class="material-icons">donut_large</i>
                <span>Visualizations</span>
            </a>
        </li>
        <li>
            <a href="{{route('newsEntries')}}">
                <i class="material-icons">donut_large</i>
                <span>Create News</span>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="logout-btn"> <i class="material-icons">input</i>Logout</button>
            </form>
        </li>


    </ul>
</div>
<!-- #Menu -->
