<header class="d-flex">
    <div class="d-flex align-items-center m-auto justify-content-around my-3 w-75">
        <img src="../assets/img/dc-logo.png" alt="">
        <ul class="m-auto d-flex">
            
                <!-- DA FARE CON FOREACH -->
                <NavLink v-for="link in links" :link="link"/>
                <li class="position-relative">
                    <a class="fw-bold" :href="link.ref">{{(link.name).toUpperCase()}}</a>
                    <div class="blubox"></div>
                </li>

        </ul>
    </div>
</header>