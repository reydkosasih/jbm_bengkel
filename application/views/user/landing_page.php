<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark">
        <div class="container position-relative">
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?= base_url('tempset/') ?>index.html">
                                <img src="<?= base_url('tempset/') ?>assets/img/brand/light.svg" alt="Volt logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item me-2">
                        <a href="<?= site_url('user') ?>" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item me-2">
                        <a href="<?= site_url('auth') ?>" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item me-2">
                        <a href="<?= site_url('auth/register') ?>" class="nav-link">Register</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="<?= base_url('tempset/') ?>pages/examples/lock.html" class="nav-link">Lock</a>
                    </li> -->
                </ul>
            </div>
            <!-- <div class="d-flex align-items-center ms-auto">
                <a href="<?= base_url('tempset/') ?>pages/upgrade-to-pro.html" class="btn btn-outline-white d-inline-flex align-items-center me-md-3">
                    <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path>
                    </svg>
                    Download
                </a>
            </div> -->
        </div>
    </nav>
</header>
<main>
    <!-- Hero -->
    <section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bolder">Jaya Battery Motor</h1>
                    <h2 class="lead fw-normal text-muted mb-5">Jasa Service dan Jual Sparepart</h2>
                    <!-- Button Modal -->
                    <div class="d-flex align-items-center justify-content-center mb-5">
                        <a href="<?= site_url('user') ?>" class="btn btn-secondary d-inline-flex align-items-center me-4">
                            Booking Sekarang!
                        </a>
                    </div>
                    <!-- <div class="d-flex justify-content-center flex-column mb-6 mb-lg-5">
                        <a href="https://themesberg.com" target="_blank">
                            <img src="<?= base_url('tempset/') ?>assets/img/themesberg.svg" class="d-block mx-auto mb-3" height="25" width="25" alt="Themesberg Logo">
                            <span class="text-muted font-small">A Themesberg production</span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="home-pattern" viewBox="0 0 3000 185.4">
                <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg></figure>
    </section>

    <!-- <section class="section section-lg bg-soft pt-0">

    </section>
    <section class="section section-sm pt-0">

    </section>
    <section class="section section-lg bg-gray-800 text-white">

    </section>
    <section class="section section-lg line-bottom-soft">

    </section>
    <section class="section section-lg bg-gray-800">

    </section>
    <section class="section section-lg bg-white" id="pricing">

    </section> -->
</main>
<!-- <footer class="footer py-6 bg-gray-800 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="navbar-brand-dark mb-4" height="35" src="<?= base_url('tempset/') ?>assets/img/brand/light.svg" alt="Logo light">
                <p>Volt is a Premium Bootstrap 5 Admin Dashboard bringing together beautiful UI/UX design and functional elements.</p>
                <ul class="social-buttons mb-5 mb-lg-0">
                    <li>
                        <a href="https://twitter.com/themesberg" aria-label="twitter social link" class="icon-white me-2">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Themesberg</span>
                <ul class="links-vertical mt-2">
                    <li><a target="_blank" href="https://themesberg.com/blog">Blog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/products">Products</a></li>
                    <li><a target="_blank" href="https://themesberg.com/about">About Us</a></li>
                    <li><a target="_blank" href="https://themesberg.com/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Other</span>
                <ul class="links-vertical mt-2">
                    <li><a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank">Docs
                            <span class="badge badge-sm bg-secondary text-dark ms-2">v1.4</span></a></li>
                    <li><a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/changelog/" target="_blank">Changelog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/licensing">License</a>
                    </li>
                    <li><a target="_blank" href="https://themesberg.com/contact">Support</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <span class="h5 mb-3 d-block">Subscribe</span>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" required>
                        </div>
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-secondary" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-muted font-small m-0">We’ll never share your details. See our <a class="text-white" href="#">Privacy Policy</a></p>
            </div>
        </div>
        <hr class="bg-gray-700 my-5">
        <div class="row">
            <div class="col mb-md-0">
                <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                    <img src="<?= base_url('tempset/') ?>assets/img/themesberg-logo-alt.svg" height="35" class="mb-4" alt="Themesberg Logo">
                </a>
                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                    <p class="fw-normal font-small mb-0">Copyright © Themesberg 2019-<span class="current-year">2021</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer> -->

</body>

</html>