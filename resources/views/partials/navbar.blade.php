<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .form-registration {
        width: 500px;
        box-sizing: border-box;
        background: rgba(247, 245, 245);
        padding: 40px;
        border-radius: 20px;
        /* color: rgb(255, 238, 0); */
    }

    .form-signin {
        width: 500px;
        box-sizing: border-box;
        background: rgba(247, 245, 245);
        padding: 40px;
        border-radius: 20px;
        /* color: rgb(255, 238, 0); */
    }

    .main {
        /* height: 100vh; */
        box-sizing: border-box;
        background-image: url(background.jpg);
        -webkit-background-size: cover;
        background-size: cover;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

            {{-- auth halaman --}}
            @auth
            <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="navbar-brand" href="/">
                        <img src="https://lh3.googleusercontent.com/proxy/GzPZxY2jNHPcTwlnU9Jwnvc9UUNf2Nme7bh_FWIfyc4yHJwqVwNfM7y9KszfYyCj09Kd3u2RLSA-nHgG9RgSyFwdzrzmErvS9r6IHw" width="45" height="30"
                            class="d-inline-block align-top" alt="">
                        SIM kampus
                    </a>
                    <div class="dropdown ">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Portal
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/mahasiswa">Mahasiswa</a>
                            <a class="dropdown-item" href="/dosen">Dosen</a>
                        </div>
                    </div>

                    <div class="dropdown ">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Perkuliahan
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/matkul">Mata Kuliah</a>
                            <a class="dropdown-item" href="/kelas">Kelas</a>
                        </div>
                    </div>

                    <div class="dropdown ">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Laporan
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/krs">Krs</a>
                            <a class="dropdown-item" href="/semester">Semester</a>
                        </div>
                    </div>

                    <div class="dropdown ">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            referensi
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/agama">agama</a>
                            <a class="dropdown-item" href="/periode">periode</a>
                            <a class="dropdown-item" href="/sistem">sistem</a>
                            <a class="dropdown-item" href="/status">status</a>
                            <a class="dropdown-item" href="/unit">unit</a>
                        </div>
                      </div>
                    </div>
            @else

            @endauth

            {{-- auth login&logout --}}
            @auth
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end container-fluid">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>Dashboard</a>
                            <div class="dropdown-divider"></div>

                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right"></i>Logout</button>
                            </form>

                        </div>
                    </li>
                </ul>
              </div>
            @else
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end container-fluid">
                <li class="nav-item">
                    <a class="nav-link {{ 'Login' ? 'active' : '' }}" href="/login"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                </ul>
            </div>
            @endauth
    </div>
</nav>
