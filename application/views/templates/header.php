<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Welcome to UMDB</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Universe's Movie Database</p>
                <?php if( !$this->session->userdata('admin') && !$this->session->userdata('user') && !$this->session->userdata('owner')) { echo anchor(site_url("login"), '<i class="btn btn-primary btn-xl js-scroll-trigger">Login | Register</i>');}?>
                <?php if( $this->session->userdata('admin') || $this->session->userdata('user') || $this->session->userdata('owner')) { echo anchor(site_url("login/signout"), '<i class="btn btn-primary btn-xl js-scroll-trigger">Sign Out</i>');}?>
            </div>
        </div>
    </div>
</header>