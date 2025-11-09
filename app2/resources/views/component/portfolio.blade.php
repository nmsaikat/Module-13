    <!-- START PORTFOLIO SECTION -->

    <section class="portfolio-section" id="portfolio">
        <div class="row">
            <h2>OUR PORTFOLIO</h2>
            <p class="little-description">
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit ametconsectetur, adipisci velit, sed quia non numquam
            </p>
        </div>
        <div class="row">
            <div class="portfolio-filter">
                <button type="button" data-filter="all">all</button>
                <button type="button" data-filter=".web">web</button>
                <button type="button" data-filter=".apps">apps</button>
                <button type="button" data-filter=".icons">icons</button>
            </div>
        </div>
        <div class="row container">
            <div class="col span_1_of_2 mix apps box">
                <img src="{{ asset('resources/img/portfolio1.png') }}" alt="Isometric Perspective Mock-Up" class="portfolio-image">
                <h4>Isometric Perspective Mock-Up</h4>
            </div>
            <div class="col span_1_of_2 mix apps web box">
                <img src="{{ asset('resources/img/portfolio2.png') }}" alt="Time Zone App UI" class="portfolio-image">
                <h4>Time Zone App UI</h4>
            </div>
            <div class="col span_1_of_2 mix icons box">
                <img src="{{ asset('resources/img/portfolio3.png') }}" alt="Viro Media Players UI" class="portfolio-image">
                <h4>Viro Media Players UI</h4>
            </div>
            <div class="col span_1_of_2 mix icons web apps box">
                <img src="{{ asset('resources/img/portfolio4.png') }}" alt="Blog / Magazine Flat UI Kit" class="portfolio-image">
                <h4>Blog / Magazine Flat UI Kit</h4>
            </div>
        </div>
        <!-- HIDDEN LOAD MORE BUTTON
    <div class="row">
        <a href="#" class="btn btn-load-more">LOAD MORE PROJECTS</a>
    </div> 
    -->
    </section>

    <!-- END PORTFOLIO SECTION -->