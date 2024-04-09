<?php include 'includes/header.php'; ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
    (function () {
        emailjs.init({
            publicKey: "7Ptm1YZz0bFzUGfec",
        });
    })();
</script>

<div class="contact">
    <form id="contact-form">
        <input type="hidden" name="contact_number" value="697483">
        <input type="hidden" name="to_name" value="SalonHub">
        <input type="text" name="user_name" placeholder="Full Name" required>
        <input type="email" name="user_email" placeholder="Email">
        <input type="tel" name="user_contact" placeholder="Phone Number" required>
        <input type="text" name="user_address" placeholder="Address" required>
        <select name="service" id="" required>
            <option value="">Select a Services</option>
            <option value="Hair Cut">Hair Cut</option>
            <option value="Tressing">Tressing</option>
        </select>
        <input type="date" name="date" required>
        <textarea name="message" rows="5" placeholder="Message"></textarea>
        <input class="send" type="submit" value="Send">
    </form>
</div>

<div class="model">
    <div class="content">
        <h2 class="title">Thank you for Contacting SalonHub</h2>
        <p>We will get back to you as soon as possible</p>
        <button class="close">Close</button>
    </div>
</div>
<?php include 'includes/footer.php'; ?>