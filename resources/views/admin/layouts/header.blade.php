<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 969px">
    <a href="/admin/adminPage" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4 h1">Admin Page</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('home.index') }}" class="nav-link text-white {{ (request()->is("admin/home")) ? 'active' : '' }}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('about.index') }}" class="nav-link text-white {{ (request()->is("admin/about")) ? 'active' : '' }}">
                About Us
            </a>
        </li>
        <li>
            <a href="{{ route('news.index') }}" class="nav-link text-white {{ (request()->is("admin/news")) ? 'active' : '' }}">
               News
            </a>
        </li>
        <li>
            <a href="{{ route('donate.index') }}" class="nav-link text-white {{ (request()->is("admin/donate")) ? 'active' : '' }}">
               All Donations
            </a>
        </li>
        <li>
            <a href="{{ route('report.index') }}" class="nav-link text-white {{ (request()->is("admin/report")) ? 'active' : '' }}">
               Report
            </a>
        </li>

    </ul>
    <hr>

</div>
