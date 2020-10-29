<html style="--theme-color:#4faded; --theme-color-light:#4faded26;">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="<?= base_url() ?>/assets/user/css/cd.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper" id="home-section">
        <div class="upper">
            <div class="views-label"><i class="fas fa-eye"></i> Views: <b>254</b></div>
            <!-- User Profile Pic -->
            <img src="<?= base_url() ?>/uploads/<?= $company_info['image'] ?>"
                class="profile-pic-img">

            <!-- User Company Name -->
            <div class="firmname"><?= $company_info['company_name'] ?></div>
            <div style="width: 40%;background-color: #e45e4f; height:2px;"></div>

            <!-- User First Name and Last Name -->
            <div class="name"><?= $company_info['owner'] ?><span style="margin-top: 5px;display: block"><i
                        style="font-size: 12px;"></i></span></div>

            <div class="round-contact-buttons">
                <a target="_blank" href="tel:<?= $company_info['phone'] ?>">
                    <i class="fas fa-phone fa-flip-horizontal contact-buttons-icon"></i>
                    <span class="contact-buttons-text">Call Me</span>
                </a>
                <a target="_blank"
                    href="https://wa.me/<?= $company_info['phone'] ?>?text=Got reference from your Digital vCard. Want to know more about your products and services.">
                    <i class="fab fa-whatsapp contact-buttons-icon"></i>
                    <span class="contact-buttons-text">Whatsapp</span>
                </a>
                <a target="_blank">
                    <i class="fas fa-map-marker-alt fa-flip-horizontal contact-buttons-icon"></i>
                    <span class="contact-buttons-text">Direction</span>
                </a>
                <a target="_blank" href="mailto:<?= $company_info['email'] ?>">
                    <i class="fas fa-envelope fa-flip-horizontal contact-buttons-icon"></i>
                    <span class="contact-buttons-text">Mail</span>
                </a>
            </div>
        </div>
        <div class="lower">
            <table class="contact-action-table">
                <tbody>
                    <tr>
                        <td>
                            <a target="_blank">
                                <i class="fas fa-map-marker-alt contact-action-container-icon"></i>
                            </a>
                        </td>
                        <td>
                            <a target="_blank" class="contact-action-container-text">
                            <?= $company_info['address'] ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="mailto:sales@omsolutions.co.in">
                                <i class="fas fa-envelope contact-action-container-icon"></i>
                            </a>
                        </td>
                        <td>
                            <a href="mailto:sales@omsolutions.co.in" class="contact-action-container-text">
                            <?= $company_info['email'] ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a target="_blank" href="http://www.shop4website.in/om-solutions/">
                                <i class="fas fa-globe contact-action-container-icon"></i>
                            </a>
                        </td>
                        <td>
                            <a target="_blank" href="http://www.shop4website.in/om-solutions/"
                                class="contact-action-container-text">
                                <?= $company_info['website'] ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a target="_blank" href="tel:9619644475">
                                <i class="fas fa-phone fa-flip-horizontal contact-action-container-icon"></i>
                            </a>
                        </td>
                        <td>
                            <a target="_blank" href="tel:9619644475" class="contact-action-container-text">
                            <?= $company_info['phone'] ?>
                            </a>

                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="p-30"></div>

            <ul class="inprofile share-buttons">

                <li class="share-button">
                    <a target="_blank" href="<?= $company_info['twitter_link'] ?>"><i
                            class="share-button-twitter fab fa-twitter"></i></a>
                </li>
                <li class="share-button">
                    <a target="_blank" href="<?= $company_info['insta_link'] ?>"><i
                            class="share-button-instagram fab fa-instagram"></i></a>
                </li>



            </ul>

            <div class="p-20"></div>
        </div>
    </div>

    <div class="section-container" id="about-us-section">
        <h2 class="section-header">About Us</h2>
        <div class="section-header-seperator"></div>
        <table class="about-us-table">
            <tbody>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                    </td>
                    <td>
                    </td>
                    <td class="table-row-value">
                    <?= $company_info['company_name'] ?>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Nature of Business</h3><b
                            class="table-row-label-separator">:</b>
                    </td>
                    <td>
                    </td>
                    <td class="table-row-value">
                    <?= $company_info['company_name'] ?>
                    </td>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3 class="speciality-label">Our Specialities</h3>
        <?= $about_form['specialities']; ?></div>
        <div class="about-us-text">
            <?= $about_form['own_words']; ?></div>
            <strong>Our Mission</strong>
            <?= $about_form['mission']; ?><br>
            <strong>Our Approach</strong>
            <?= $about_form['approach']; ?>
        </div>

            
        </div>


        <div class="section-close"></div>
    </div>

    <div class="section-container" id="products-services-section">
        <h2 class="section-header">Products/Services</h2>
        <div class="section-header-seperator" style="width: 130px;"></div>
        <div class="p-10"></div>
        <div>
            <div class="card">
                <h3 class="card-title"><?= $company_info['nature_business'] ?> &amp; Services</h3>
                <div class="product-description">
                    <?= $services['services']; ?>
                </div>
                <img onclick="openImageModal(this)" alt="IT Services – Sales &amp; Services"
                    src="<?= base_url() ?>/uploads/<?= $company_info['image'] ?>"
                    style="width:100%;margin-bottom: 15px;">
                <div class="product-enquiry-section">
                    <div class="product-price">

                    </div>
                    <a href="https://wa.me/<?= $company_info['phone'] ?>?text=Hi, I am interested in your product/service: IT Services – Sales &amp; Services. Please provide more details."
                        target="blank" class="product-enquiry-btn">Enquiry</a>
                </div>
            </div>
        </div>
        <div class="section-close"></div>

    </div>

    <div class="section-container" id="gallery-section">
        <h2 class="section-header">Gallery</h2>
        <div class="section-header-seperator"></div>
        <div class="p-10"></div>
        <div class="images-container">
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 1"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_1'] ?>" style="width:100%">
            </div>
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 2"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_2'] ?>" style="width:100%">
            </div>
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 3"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_3'] ?>" style="width:100%">
            </div>
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 4"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_4'] ?>" style="width:100%">
            </div>
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 5"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_5'] ?>" style="width:100%">
            </div>
            <div class="image-wrapper">
                <img onclick="openImageModal(this)" alt="Image 6"
                    src="<?= base_url() ?>/uploads/images/<?= $gallery['image_6'] ?>" style="width:100%">
            </div>

        </div>
        <div class="section-close"></div>
    </div>

    <div class="section-container" id="feedback-section">
        <h2 class="section-header">Feedbacks</h2>
        <div class="section-header-seperator"></div>
        <div class="feedback-list">
            <div class="feedback-wrapper">
                <span class="feedback-name-wrapper"><span class="feedback-name">Swapnil Bambulkar</span> on July 9, 2020
                </span>
                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span
                            data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span
                            data-value="4" data-text="Very Good"></span><span data-value="5"
                            data-text="Excellent"></span></span></div>
                <div>Fast and quick service &amp; also jenuion IT related products.... Best service received till have
                    come accross till date 👍</div>
                <hr>
            </div>
        </div>
        <form class="feedback-form card" novalidate="">
            <div class="feedback-form-heading">Give Feedback</div>
            <span class="gl-star-rating gl-star-rating-ltr" data-star-rating=""><select class="star-rating" id="rating"
                    name="rating">
                    <option value="">Select a rating</option>
                    <option value="5">Excellent</option>
                    <option value="4">Very Good</option>
                    <option value="3">Average</option>
                    <option value="2">Poor</option>
                    <option value="1">Terrible</option>
                </select><span class="gl-star-rating-stars s0"><span data-value="1" data-text="Terrible"></span><span
                        data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span
                        data-value="4" data-text="Very Good"></span><span data-value="5"
                        data-text="Excellent"></span></span><span class="gl-star-rating-text">Select a
                    Rating</span></span>
            <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name">
            <textarea name="feedback" id="feedback" placeholder="Enter your feedback"></textarea>
            <!-- Message:<br/> -->
            <input type="button" value="Give Feedback" onclick="sendFeedback(this, 'om-solutions')">
        </form>
    </div>

    <div class="section-container" id="enquiry-section">
        <h2 class="section-header">Enquiry Form</h2>
        <div class="section-header-seperator" style="width: 120px;"></div>
        <form class="enquiry-form" novalidate="">
            <!-- Full Name:<br/> -->
            <input type="text" name="enquiryName" id="enquiryName" placeholder="Enter Full Name"><br>
            <div class="flex">
                <div class="enquiry-phoneNumber">
                    <!-- Phone Number:<br/> -->
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number"><br>
                </div>
                <div class="enquiry-email">
                    <!-- Email:<br/> -->
                    <input type="text" name="email" id="email" placeholder="Enter Email"><br>
                </div>
            </div>
            <!-- Message:<br/> -->
            <textarea name="message" id="message" placeholder="Enter Message"></textarea><br>
            <input type="button" value="Send" onclick="sendEnquiry(this, 'sales@omsolutions.co.in')">
        </form>
        <div class="section-close"></div>
    </div>

    <div class="copyright-wrapper">
        <div class="copyright-wrapper-inner">
            © 2020 <a href="http://mycrd.in" target="_blank"><b>mycrd.in</b></a>
        </div>
    </div>
    <!-- Footer Menu -->
    <div class="footer">
        <ul class="footer-menu">
            <li>
                <a class="footer-menu-link" href="#home-section">
                    <i class="footer-menu-icon fas fa-home"></i>
                    <div class="footer-menu-text">HOME</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="#about-us-section">
                    <i class="footer-menu-icon fas fa-briefcase"></i>
                    <div class="footer-menu-text">ABOUT US</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="#products-services-section">
                    <i class="footer-menu-icon fas fa-box-open"></i>
                    <div class="footer-menu-text">PRODUCTS</div>
                </a>
            </li>

            <li>
                <a class="footer-menu-link" href="#gallery-section">
                    <i class="footer-menu-icon fas fa-file-image"></i>
                    <div class="footer-menu-text">GALLERY</div>
                </a>
            </li>

            <li>
                <a class="footer-menu-link" href="#feedback-section">
                    <i class="footer-menu-icon fas fa-star"></i>
                    <div class="footer-menu-text">FEEDBACK</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="#enquiry-section">
                    <i class="footer-menu-icon fas fa-comment-alt"></i>
                    <div class="footer-menu-text">ENQUIRY</div>
                </a>
            </li>
        </ul>
    </div>
    <!-- The image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" id="imageModalClose">×</span>
        <img class="modal-content fadeIn" id="img01">
        <div id="caption"></div>
    </div>
    <!-- The share Modal -->
    <div id="shareModal" class="modal share-modal">
        <div class="share-form fadeInUpBig">
            <div class="share-form-header">
                <h3 class="share-form-header-text">Share Profile</h3>
                <span class="close" id="shareModalClose">×</span>
            </div>
            <div class="share-form-buttons-container">
                <p>Share my Digital vCard in your network.</p>
                <div class="share-buttons-heading">
                    <img src="../templates/template4/tild-arrow.svg" class="share-buttons-arrow">
                    <div class="share-buttons-heading-text">Share my Digital vCard</div>
                </div>
                <ul class="share-buttons">
                    <li class="share-button">
                        <a href="javascript:;" target="_blank" onclick="handleDirectWhatsappShare(this, 9619644475)">
                            <i class="share-button-whatsapp fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="sms:?body=http://mycrd.in/om-solutions">
                            <i class="share-button-sms fas fa-comment-dots"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=http://mycrd.in/om-solutions&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">
                            <i class="share-button-facebook fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="https://twitter.com/intent/tweet?text=http://mycrd.in/om-solutions"
                            data-size="large">
                            <i class="share-button-twitter fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <i class="share-button-skype fab fa-skype"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-pinterest fab fa-pinterest-p"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-linkedin fab fa-linkedin-in"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-mail fas fa-envelope"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>

    <script>

    const modalImg = document.getElementById('img01');
    const captionText = document.getElementById('caption');

    imageModalClose.onclick = function () {
        imageModal.style.display = 'none';
    };

    function openImageModal(e) {
        imageModal.style.display = 'block';
        modalImg.src = e.src;
        captionText.innerHTML = e.alt;
    }


    </script>
</body>

</html>