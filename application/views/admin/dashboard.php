<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <?php if ($this->session->flashdata("error")) : ?>
                <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error") ?></p>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata("update")) : ?>
                <div class="alert alert-success">
                    <p><?php echo $this->session->flashdata("update") ?></p>
                </div>
            <?php endif; ?>
            <nav class="breadcrumb bg-white push">
                <a class="breadcrumb-item" href="javascript:void(0)">Generic</a>
                <span class="breadcrumb-item active">Blank Page</span>
            </nav>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Blank <small>Get Started</small></h3>
                </div>
                <div class="block-content">
                    <p>Create your own awesome project!</p>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</body>

</html>