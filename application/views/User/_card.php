<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/card.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


</head>
<body>
    <div class="front-side">
        <div class="color-grid">
            <div class="black"></div>
            <div class="red1"></div>
            <div class="red2"></div>
            <div class="green"></div>
        </div>
        <div class="info-grid">
            <div class="name">
                <h2><?= $company_info['company_name']; ?></h2>
                <h5><?= $company_info['owner']; ?></h5>
            </div>
            <div class="links-line">
                <div class="links">
                    <center><a target="_blank" href="tel:<?= $company_info['phone'] ?>"><i class="fas fa-phone-alt"></i></a></center>
                </div>

                <div class="links">                    
                    <center><a target="_blank" href="tel:<?= $company_info['phone'] ?>"><i class="fas fa-link"></i></a></center>
                </div>

                <div class="links">                    
                    <center><a target="_blank" href="<?= $company_info['website'] ?>"><i class="fas fa-envelope-open-text"></i></a></center>
                </div>

                <div class="links">                    
                    <center><a target="_blank" href="https://api.whatsapp.com/send?phone=<?= (int)$company_info['phone'] ?>&text=Got%20reference%20from%20your%20Digital%20vCard.%20Want%20to%20know%20more%20about%20your%20products%20and%20services.&source=&data=&app_absent="><i class="fab fa-whatsapp"></i></a></center>
                </div>
            </div>
        </div>
    </div>
    <div class="back-side" style="height:70%">
        <div class="color-grid">
            <div class="black"></div>
            <div class="red1"></div>
            <div class="red2"></div>
            <div class="green"></div>
        </div>
        <div class="about-grid">

            <div class="name">
                <h2 class="head">ABOUT US</h2>
            </div>
            <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Company Name</td>
                    <td>:<?= $company_info['company_name'] ?></td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                </tr>
                </tbody>
            </table>

        </div>
        
    </div>

</body>