<footer>
    <div class="background">
        <div class="top-footer d-flex w-75 m-auto position-relative">

            <div class="link-section">
                <h3>DC COMICS</h3>
                <ul v-for="section in dcComics">
                    <li>
                        <a :href="section.ref">{{ section.name }}</a>
                    </li>
                </ul>
                <h3>SHOP</h3>
                <ul>
                    <li>
                        <a href="#">Shop DC</a>
                    </li>
                    <li>
                        <a href="#">Shop DC Collectibles</a>
                    </li>
                </ul>
            </div>

            <div class="link-section">
                <h3>DC</h3>
                <ul v-for="section in dc">
                    <li>
                        <a :href="section.ref">{{ section.name }}</a>
                    </li>
                </ul>
            </div>

            <div class="link-section">
                <h3>SITES</h3>
                <ul v-for="section in sites">
                    <li>
                        <a :href="section.ref">{{ section.name }}</a>
                    </li>
                </ul>
            </div>

            <div class="dc position-absolute"></div>
        </div>
    </div>
    
    <div class="lower-footer  d-flex w-75 m-auto position-relative align-items-center justify-content-between">
        <div class="button">
            <a href="#" class="fw-bold">SIGN-UP NOW!</a>
        </div>
        <div class="socials d-flex">
            <p class="fw-bold">FOLLOW US</p>
            <img src="../assets/img/footer-facebook.png" alt="">
            <img src="../assets/img/footer-twitter.png" alt="">
            <img src="../assets/img/footer-youtube.png" alt="">
            <img src="../assets/img/footer-pinterest.png" alt="">
            <img src="../assets/img/footer-periscope.png" alt="">
        </div>
    </div>
</footer>