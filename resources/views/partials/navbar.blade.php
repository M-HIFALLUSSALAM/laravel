<nav class="navbar navbar-expand-lg bg-warning shadow">
    <div class="container">
        <a class="navbar-brand" href="/">HIFAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-door-open-fill"></i>Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>