<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content">
            <a href="#" class="footer__logo">
                <i class="ri-hospital-line"></i>eMed
            </a>
            <h3 class="footer__title">
                The medication in<br> digital time.
            </h3>
        </div>
        <div class="footer__content">
            <h3 class="footer__title">Our Address</h3>
            <ul class="footer__data">
                <li class="footer__information">1234 - Sri Lanka</li>
                <li class="footer__information">Colombo - 90000</li>
                <li class="footer__information">123-456-789</li>
            </ul>
        </div>
        <div class="footer__content">
            <h3 class="footer__title">Contact Us</h3>
            <ul class="footer__data">
                <li class="footer__information">+94 779 999 999</li>
                <div class="footer__social">
                    <a href="https://www.facebook.com" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="https://www.instagram.com" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://www.twitter.com" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>
            </ul>
        </div>
    </div>
    <p class="footer__copy">&#169; FLT. All rights reserved</p>
</footer>

<!--============ SCROLL REVEAL ==========-->
<script src="{{asset('js/scrollreveal.min.js')}}"></script>

<!--============ MAIN JS ==========-->
<script src="{{asset('js/main.js')}}"></script>

<!--============ JQUERY ==========-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $(function(){
        $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).val();
    });
</script>