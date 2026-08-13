<?php 
$pageTitle = "Contact Us | Ashwani Trading Co.";
$currentPage = "contact";

$prefill = isset($_GET['req']) ? htmlspecialchars($_GET['req']) : '';

include 'includes/header.php'; 
?>

<!-- Page Header -->
<section class="section section-bg text-center">
    <div class="container">
        <h1 class="section-title" style="margin-bottom: 20px;">Contact Us</h1>
        <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">We are here to help. Get in touch with us for quotes, queries, and support.</p>
    </div>
</section>

<!-- Contact Content -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            
            <!-- Contact Details -->
            <div>
                <h2 style="margin-bottom: 30px;">Get In Touch</h2>
                
                <div style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--accent-color); margin-top: 5px;"></i>
                    <div>
                        <h4 style="margin-bottom: 5px;">Main Office</h4>
                        <p style="color: var(--text-light);">Plot No. 112, Yard 6, Transport Nagar,<br>Narwal, Jammu 180006</p>
                    </div>
                </div>

                <div style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--accent-color); margin-top: 5px;"></i>
                    <div>
                        <h4 style="margin-bottom: 5px;">Branch Office</h4>
                        <p style="color: var(--text-light);">Sunjwan Morh, Bye Pass Road,<br>Narwal, Jammu 180006</p>
                    </div>
                </div>
                
                <div style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 15px;">
                    <i class="fas fa-phone-alt" style="font-size: 1.5rem; color: var(--accent-color); margin-top: 5px;"></i>
                    <div>
                        <h4 style="margin-bottom: 5px;">Phone Numbers</h4>
                        <p style="color: var(--text-light);">
                            <a href="tel:+919419186209" style="color: inherit;">+91 9419186209</a><br>
                            <a href="tel:+919186191331" style="color: inherit;">+91 9186191331</a><br>
                            <a href="tel:+911914047110" style="color: inherit;">+91 1914047110</a>
                        </p>
                    </div>
                </div>
                
                <div style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 15px;">
                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--accent-color); margin-top: 5px;"></i>
                    <div>
                        <h4 style="margin-bottom: 5px;">Email Addresses</h4>
                        <p style="color: var(--text-light);">
                            <a href="mailto:ashwanitradingcojammu@gmail.com" style="color: inherit;">ashwanitradingcojammu@gmail.com</a><br>
                            <a href="mailto:gupta.ashwanikumar@yahoo.com" style="color: inherit;">gupta.ashwanikumar@yahoo.com</a><br>
                            <a href="mailto:ashwaniyradingco@gmail.com" style="color: inherit;">ashwaniyradingco@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lead-capture-form" style="max-width: 100%; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-align: left;">
                <h3 style="margin-bottom: 20px;">Send Us a Message</h3>
                <form class="lead-form" method="POST">
                    <div class="form-group">
                        <label>Your Name *</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Requirement *</label>
                        <textarea name="requirement" class="form-control" rows="4" required><?php 
                            if($prefill == 'machinery') echo "I am interested in Earthmoving Machinery.";
                            elseif($prefill == 'jcb') echo "I am looking for JCB Spare Parts.";
                            elseif($prefill == 'roadroller') echo "I am looking for Road Roller Parts.";
                            elseif($prefill == 'drillrods') echo "I am looking for Drill Rods.";
                        ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<!-- Maps -->
<section style="line-height: 0;">
    <!-- Embed a map pointing roughly to Narwal, Jammu as a placeholder -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13430.793699899141!2d74.88177435!3d32.709322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e84a29a0ebf35%3A0xf67319fa3ec9dcc3!2sNarwal%2C%20Jammu%2C%20Jammu%20and%20Kashmir%20180006!5e0!3m2!1sen!2sin!4v1691234567890!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include 'includes/footer.php'; ?>
