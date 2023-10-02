<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2><?php echo $lang['contact'] ?></h2>
        <p>Need Help? <span><?php echo $lang['contact'] ?></span></p>
    </div>

    <div class="mb-3">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.1288064405057!2d-123.12518622298613!3d49.27395647139149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d727d5a461%3A0xa8b3ddc256b64ebb!2sTHE%20ANIMAL%20WELFARE%20FOUNDATION%20OF%20CANADA!5e0!3m2!1sen!2sus!4v1694377768585!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">

        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
            <h3><?php echo $lang['ouraddress'] ?></h3>
            <p>643, 1231 Pacific Blvd Suite, Vancouver, British Comlumbia</p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
            <h3><?php echo $lang['emailus'] ?></h3>
            <p>yukikaze924@gmail.com</p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
            <h3><?php echo $lang['callus'] ?></h3>
            <p>+1 604 924 1114</p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
            <h3><?php echo $lang['workinghours'] ?></h3>
            <div><strong>Sat, Sun:</strong> 11AM - 23PM;
                <strong>Mon-Fri:</strong> Closed
            </div>
            </div>
        </div>
        </div><!-- End Info Item -->

    </div>

    <form action="<?php echo BASE_URL ?>/app/apis/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
        <div class="row">
        <div class="col-xl-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-xl-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form><!--End Contact Form -->

    </div>
</section><!-- End Contact Section -->