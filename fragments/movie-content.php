 
<script>
    $(document).ready(function () {
    $("#button-ac").click(function () {
        $("#action-movie-info1").toggle("slow");
        $("#fig1").toggle(); {
            $("#action-movie-info2").toggle("slow");
            $("#action-movie-info3").toggle("slow");
            $("#book-button-ac").show("slow");
            $("#button-ac").text("Less Information"); {
                $("#button-ac").click(function () {
                    $("#button-ac").text("More Information");
                });
            }
        }


    });
    $("#button-ch").click(function () {
        $("#children-movie-info1").toggle("slow");
        $("#fig2").toggle(); {
            $("#children-movie-info2").toggle("slow");
            $("#children-movie-info3").toggle("slow");
            $("#book-button-ch").show("slow");
            $("#button-ch").text("Less Information"); {
                $("#button-ch").click(function () {
                    $("#button-ch").text("More Information");
                });
            }
        }

    });

    $("#button-rc").click(function () {
        $("#rom-com-info1").toggle("slow");
        $("#fig3").toggle(); {
            $("#rom-com-info2").toggle("slow");
            $("#rom-com-info3").toggle("slow");
            $("#book-button-rc").show("slow");
            $("#button-rc").text("Less Information"); {
                $("#button-rc").click(function () {
                    $("#button-rc").text("More Information");
                });
            }
        }
    });


    $("#button-af").click(function () {
        $("#art-foregin-info1").toggle("slow");
        $("#fig4").toggle(); {
            $("#art-foregin-info2").toggle("slow");
            $("#art-foregin-info3").toggle("slow");
            $("#book-button-af").show("slow");
            $("#button-af").text("Less Information"); {
                $("#button-af").click(function () {
                    $("#button-af").text("More Information");
                });
            }
        }

    });



});

</script>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="movies.php">Movies</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
</nav>
<div class="content">
    <div class="container-main">

        <h2> Now Showing</h2>
    </div>

    <div class="container-flex">
        <figure>
            <h2 id="action-movie-info2">Star Wars: The Force Awakens</h2>
            <img src="assets/img/tfa-poster.jpg" alt="Action Movie Poster" class="img-responsive">
            <iframe id="action-movie-info3" width="560" height="355" src="https://www.youtube.com/embed/sGbxmsDFVnE" frameborder="0"
            allowfullscreen></iframe>
            <figcaption id="fig1">
                <h3>Star Wars: TFA</h3>
                <p> J.J. Abrams join forces to take you
                    <br/> back again to a galaxy far, far away</p>
                <br/>
            </figcaption>
            <br/>
            <article id="action-movie-info1">
                <p> Synopsis |
                    <br/>
                    <br/> 30 years after the defeat of Darth Vader and the Empire, Rey, a scavenger from the planet Jakku, finds
                    a BB-8 droid that knows the whereabouts of the long lost Luke Skywalker. Rey, as well as a rogue stormtrooper
                    and two smugglers, are thrown into the middle of a battle between the resistance and the daunting legions
                    of the First Order.</p>
                <img src="assets/img/m.jpeg" alt="M rating" class="img-responsive">
                <form method="POST" action="booking.php">
                    <input type="hidden" name="Movie" value="Action Movie" />
                    <select name="Day">
                        <option> MON</option>
                        <option> TUES</option>
                        <option> WED</option>
                        <option> THURS</option>
                        <option> FRI</option>
                        <option> SAT</option>
                        <option> SUN</option>
                    </select>

                    <select name="Time">
                        <option>9PM</option>
                    </select>
                    <br/>
                    <br/>
                    <button type="submit"> Book this movie </button>
                </form>
                <br/>
            </article>
            <button id="button-ac">
                <h4>More Information</h4></button>
            <!-- Script goes back here -->
        </figure>
        <figure>
            <h2 id="children-movie-info2">The Good Dinosaur</h2>
            <img src="assets/img/tgd-poster.jpg" alt="Childrens Movie poster" class="img-responsive">
            <iframe id="children-movie-info3" width="560" height="355" src="https://www.youtube.com/embed/daFnEiLEx70" frameborder="0"
            allowfullscreen></iframe>
            <figcaption id="fig2">
                <h3>The Good Dinosaur</h3>
                <p> What if the asteroid Never hit Earth?
                    <br/>if the dinosaurs never became extinct?
                    <br/>
                </p>
                <br/>
            </figcaption>
            <br/>
            <article id="children-movie-info1">
                <p> Synopsis |
                    <br/>
                    <br/> "The Good Dinosaur" asks the question: What if the asteroid that forever changed life on Earth missed
                    the planet completely and giant dinosaurs never became extinct? In this epic journey into the world of
                    dinosaurs, an Apatosaurus named Arlo makes an unlikely human friend. While traveling through a harsh
                    and mysterious landscape, Arlo learns the power of confronting his fears and discovers what he is truly
                    capable of.</p>
                <br/>
                <img src="assets/img/pg.jpeg" alt="M rating" class="img-responsive">
                <form method="POST" action="booking.php">
                    <input type="hidden" name="Movie" value="Children Movie" />
                    <br/>
                    <select name="Day">

                        <option> MON</option>
                        <option> TUES</option>
                        <option> WED</option>
                        <option> THURS</option>
                        <option> FRI</option>
                        <option> SAT</option>
                        <option> SUN</option>
                    </select>
                    <select name="Time">
                        <option>1PM</option>
                        <option>6PM</option>
                        <option>12PM</option>
                    </select>
                    <br/>
                    <br/>
                    <button type="submit"> Book this movie </button>
                    <br/>
                </form>
                <br/>
            </article>
            <button id="button-ch">
                <h4>More Information</h4></button>
        </figure>
        <figure>
            <h2 id="rom-com-info2">How To Be Single</h2>
            <img src="assets/img/htob-poster.jpg" alt="Rom Com Poster" class="img-responsive">
            <iframe id="rom-com-info3" width="560" height="355" src="https://www.youtube.com/embed/tXL1HgPerN8" frameborder="0" allowfullscreen></iframe>
            <figcaption id="fig3">
                <h3>How To Be Single</h3>
                <p> There's a right way to be single,a wrong
                    <br/>way to be single, and then...there's Alice.</p>
                <br/>
            </figcaption>
            <br/>
            <article id="rom-com-info1">

                <p> Synopsis |
                    <br/>
                    <br/> There's a right way to be single, a wrong way to be single, and then...there's Alice. And Robin. Lucy.
                    Meg. Tom. David. New York City is full of lonely hearts seeking the right match, be it a love connection,
                    a hook-up, or something in the middle. And somewhere between the teasing texts and one-night stands,
                    what these unmarrieds all have in common is the need to learn how to be single in a world filled with
                    ever-evolving definitions of love. Sleeping around in the city that never sleeps was never so much fun.
                    </p>
                <img src="assets/img/m.jpeg" alt="M rating" class="img-responsive">
                <form method="POST" action="booking.php">
                    <input type="hidden" name="book" value="RC" />
                    <br/>
                    <select name="Days">
                        <br/>
                        <option> MON</option>
                        <option> TUES</option>
                        <option> WED</option>
                        <option> THURS</option>
                        <option> FRI</option>
                        <option> SAT</option>
                        <option> SUN</option>
                    </select>

                    <select name="Time">
                        <option>9PM</option>
                        <option>1PM</option>
                        <option>6PM</option>
                    </select>
                    <br/>
                    <br/>
                    <button type="submit"> Book this movie </button>
                    <br/>
                </form>
                <br/>
            </article>

            <button id="button-rc">
                <h4>More Information</h4></button>
        </figure>
        <figure>
            <h2 id="art-foregin-info2">Mr.Six</h2>
            <img src="assets/img/mr6-poster.jpg" alt="Art / Foreign Poster" class="img-responsive">
            <iframe id="art-foregin-info3" width="560" height="355" src="https://www.youtube.com/embed/OjOhHz34Jro" frameborder="0" allowfullscreen></iframe>
            <figcaption id="fig4">
                <h3>Mr. Six</h3>
                <p> With his son captured, Mr. Six
                    <br/> and his old pals stand up to other gangs</p>
            </figcaption>
            <br/>
            <article id="art-foregin-info1">

                <p> Synopsis |
                    <br/>
                    <br/> With his son captured, Mr. Six and his old pals stand up to the new, younger generation of hooligans,
                    defending their dignity as once respected gangsters in the neighbourhood. Starring Feng Xiaogang, Li
                    Yifeng, Kris Wu and Zhang Hanyu.</p>
                <img src="assets/img/ma.jpeg" alt="M rating" class="img-responsive">
                <form method="POST" action="booking.php">
                    <input type="hidden" name="book" value="AF" />
                    <br/>
                    <select name="Days">
                        <option> MON</option>
                        <option> TUES</option>
                        <option> SAT</option>
                        <option> SUN</option>
                    </select>
                    <select name="Time">
                        <option>6PM</option>
                        <option>3PM</option>
                    </select>
                    <br/>
                    <br/>
                    <button type="submit"> Book this movie </button>
                    <br/>
                </form>
                <br/>
            </article>
            <button id="button-af">
                <h4>More Information</h4></button>
        </figure>
    </div>
</div>