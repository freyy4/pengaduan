<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light">
  <b class="navbar-brand">NGADUIN.AJA</b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/user')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/user/pengaduan')}}">Data Pengaduan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:black;" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu">
              <form method="POST" action="{{ route('logout') }}"
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}" >Logout</a>
              </form>        
        </div>
    </li>
    </form>
    </ul>
  </div>
</nav>
</div>