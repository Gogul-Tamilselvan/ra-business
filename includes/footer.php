<footer class="footer" id="contact">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand fade-up">
                <a href="#" class="footer-logo">
                    <div class="logo-brand">
                        <span class="logo-text" style="font-size: 1.8rem; color: #ffffff;">RA <span class="logo-text-accent" style="color: #4ade80;">Business School</span></span>
                        <span class="logo-tagline" style="color: rgba(255,255,255,0.5);">CULTIVATING CREATORS</span>
                    </div>
                </a>
                <p class="footer-desc">Learn marketing made simple from an International Certified Digital Marketing Expert, Proven Content Creator, and Awarded Brand Strategist — with 1000+ community members in just 2 months.</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <div class="footer-links-col fade-up delay-1">
                <h4 class="footer-title">Explore</h4>
                <ul class="footer-links">
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links-col fade-up delay-2">
                <h4 class="footer-title">Legal</h4>
                <ul class="footer-links">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-contact fade-up delay-3">
                <h4 class="footer-title">Ready to Scale?</h4>
                <p class="footer-desc">Stop guessing. Start building your digital brand with a proven system that delivers real results.</p>
            </div>
        </div>

        <div class="footer-bottom fade-up">
            <p>&copy; <?php echo date("Y"); ?> RA Business School. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JS Scripts -->
<script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.trusted-swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 4 },
                768: { slidesPerView: 5 },
                1024: { slidesPerView: 6 },
            }
        });
    });
</script>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919962277773" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

</body>
</html>
