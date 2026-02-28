<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">16+</p>
                        <h3>Years of experience</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">800+</p>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">9+</p>
                        <h3>projects completed</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">90+</p>
                        <h3> acres completed</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const section = document.querySelector(".counterup");
        const counters = section.querySelectorAll(".counter");

        function animateCounter(counter) {

            const text = counter.innerText;
            const target = parseInt(text.replace(/\D/g, ""));
            const duration = 2000; // 2 seconds

            let startTime = null;

            function updateCounter(currentTime) {

                if (!startTime) startTime = currentTime;

                const progress = currentTime - startTime;
                const progressPercent = Math.min(progress / duration, 1);

                const currentValue = Math.floor(progressPercent * target);

                counter.innerText = currentValue + "+";

                if (progress < duration) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target + "+"; // ensure exact final value
                }
            }

            requestAnimationFrame(updateCounter);
        }

        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                counters.forEach(counter => animateCounter(counter));
                observer.unobserve(section);
            }
        }, { threshold: 0.4 });

        observer.observe(section);

    });
</script>
<!-- END SECTION COUNTER UP -->