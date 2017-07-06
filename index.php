<?php
  include 'header.html'
?>

    <!-- Top carousel -->
    <div class="container">
        <ul id="slides">
            <li class="slide showing">Innovation</li>
            <li class="slide">Reliable</li>
            <li class="slide">Community</li>
            <li class="slide">Support</li>
        </ul>
        <ul id="controls">
            <li><button class="controls" id="0"></button></li>
            <li><button class="controls" id="1"></button></li>
            <li><button class="controls" id="2"></button></li>
            <li><button class="controls" id="3"></button></li>
        </ul>
    </div>
    <!-- End Carousel -->

    <!-- About us Begin -->
    <div class="jumbotron">
        <h1 class="text-center">About Us</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well" style="text-indent: 50px;">
                        <p>
                            Wu Tang Web solutions is known for being relentless in our drive forward to good web design. Our team is composed of six developers who each specialize in a variety of topics whose end goal is to make the web better. We do this by putting our knowledge
                            in the hands of people who either currently or plan on becoming web developers. But before we were Wu Tang Web Solutions we were six different students all studying for different majors at RIT. So how did these students with
                            a passion for web find each other? The answer is music. Every single one of us loves Hip Hop, specifically Wu Tang. After meeting at an on-campus event for Hip Hop Heads we got talking and realized that not only were we passionate
                            about Hip Hop, but also good web design. It felt like a natural fit to work together. Once we found out that our specialties in web design were so diverse yet we worked together so well we knew could start something great.
                            We finished our degrees and started Wu Tang Web Solutions as a web consultant company. Through the years we got a variety of clients and saw so many bad websites we almost had to quit the business. This constant barrage of
                            mediocrity did have one positive effective thought, it created an idea. The idea that we didn’t have to be on the back foot constantly dealing with shoddy design if we could do something to prevent bad design from happening in
                            the first place.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-center">Scroll down to learn more</h3>
    </div>
    <!-- About us end -->

    <!-- Something Catchy section -->
    <div class="container">
        <div class="well">
            <h1 class="text-center">Where Our Inspiration Comes From</h1>
            <div id="video" class="embed-responsive">
            </div>
            <script async src="https://www.youtube.com/iframe_api"></script>
            <script>
                function onYouTubePlayerAPIReady(){
                    var player;
                    player = new YT.Player('video', {
                        videoId: 'LjCzPp-MK48',
			height: '1080',
			width: '1920',
                        playerVars: {
                        autoplay: 1,
                        controls: 0,
                        showinfo: 0,
                        modestbranding: 1,
                        loop: 1,
                        fs: 0,
                        cc_load_policty: 0,
                        iv_load_policy: 3,
                        autohide: 0
                        },
                        events: {
                        onReady: function(e) {
                        e.target.mute();
                        }
                    }
                });
                }
            </script>
	</div>
    </div>
    <!-- End Something Catch -->

    <!-- Collect experience and learn things -->
    <div class="container">
        <!-- An Experience you can Believe in -->
        <h1>A Valued Experience</h1>
        <div class="well">
            <p>
                "Wu Tang Web Solutions provides you with a team of experts capable of consulting on a variety of topics ranging from enhanced security to measured design. We work tirelessly to provide the best information possible to sharpen your web development skills
                with our highly knowledgable webinars."
            </p>
        </div>

        <!-- End your experience -->

        <!-- Learn Things -->
        <h1 class="text-right">Enhance Your Skills</h1>
        <div class="well">
            <p>
                "Wu Tang Web Solutions isn't just purely a consulting firm, it is an institution of learning. A place for us to spread our vast knowledge of web design and help combat the bad design we had all too much experience seeing. The feedback we have gotten from
                users has been overwhelmingly positive and we strive to continue to teach the world the principles of good website development."
            </p>
        </div>
        <!-- end learn things -->
    </div>
    <!-- End collection -->

    <!-- FAQ -->
    <div class="container faq">
        <h1 class="text-center">Frequently Asked Questions</h1>
        <div class="row">
            <div class="col-buff">&nbsp;</div>
            <div class="col-sm-5">
                <div class="well">
                    <h1>How long is each webinar?</h1>
                    <p>
                        "Along with price that info is also specific to the webinar you are interested in viewing, but they generally take about an hour."
                    </p>
                </div>
            </div>
            <div class="col-buff">&nbsp;</div>
            <div class="col-sm-5">
                <div class="well">
                    <h1>Is this just for beginners?</h1>
                    <p>
                        "No. We ensure that the knowledge you get from our webinars can improve every aspect of a site, from code to artwork, at even the most advanced levels."
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-buff">&nbsp;</div>
            <div class="col-sm-5">
                <div class="well">
                    <h1>How big is your team?</h1>
                    <p>
                        "We have a small team of 6. But what we lack in numbers we make up for in experience. Every member of our team is an expert in their field and qualified to answer any questions you might have."
                    </p>
                </div>
            </div>
            <div class="col-buff">&nbsp;</div>
            <div class="col-sm-5">
                <div class="well">
                    <h1>What happens if I miss a purchased webinar?</h1>
                    <p>
                        "If the webinar has already happened and you did not make it into the session you will be refunded in site credit the cost of the webinar."
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- END FAQ -->
    <script src="js/carousel.js"></script>
    <?php
      include 'footer.html'
    ?>
