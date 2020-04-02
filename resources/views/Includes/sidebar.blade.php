<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
    
    </div>
    <div class="w3-bar-block">
        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('karyawan')}}">
                    <i class="fa fa-user w3-xxlarge "> Karyawan</i>
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link " href="{{url('status')}}">
                    <i class="fas fa-info w3-xxlarge "> Status</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('posisi')}}">
                    <i class="fas fa-search-plus w3-xxlarge "> Posisi</i>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pendidikan')}}">
                    <i class="fas fa-university w3-xxlarge "> Pendidikan</i>
                </a>
            </li>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                @csrf
                  <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 bg-secondary"
                  type="submit">
                    <p style="color: black;">Keluar</p>
                  </button>
                </form>

            
        </ul>
        
    </div>
</nav>
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>

    </span>
</header>