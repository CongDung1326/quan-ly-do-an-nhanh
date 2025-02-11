<div class="feedback-background" style="background-image: url('<?php echo wp_get_attachment_image_url(227); ?>')">
    <div class="feedback">
        <h3 class=" title">CONTACT WITH US, IF HAVE ANY QUESTION</h3>
        <form method="post" class="feedback-input">
            <div class="input">
                <input type="text" name='name' required>
                <label for="">Name</label>
            </div>
            <div class="input">
                <input type="text" name='number_phone' required>
                <label for="">Number phone</label>
            </div>
            <div class="input">
                <textarea name='your_problem' id="" required></textarea>
                <label for="">Your problem</label>
            </div>
            <button type="submit">Send for us</button>
        </form>
    </div>
</div>

<?php get_template_part('php/send-data') ?>