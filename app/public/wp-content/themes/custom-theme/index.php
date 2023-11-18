
<?php
get_header();
?>

<body>
    <div class="hero-section" id="home">
        <div class="hero-container">
            <div class="hero-text">
                <h1 class="text-1">Търсиш си части за колата?</h1>
                <h2 class="text-2">Тук можеш да намериш всичко за твоята кола!</h2>

            </div>
            <div class="hero-call-to-action">
                <button class="hero-button">Търсене</button>

            </div>



        </div>
        <div>
            <img class="audi"
                src="https://media.licdn.com/dms/image/C561BAQHXDdZ-zptXyg/company-background_10000/0/1584564533103?e=2147483647&v=beta&t=FrHtkEsshHDjb27OheDERMhCdXekOx9ZbVgVflo_NwA">
        </div>
    </div>
    <div class="about-us-section" id="about">

        <h1>За нас</h1>
        <div class="about-us-container">
            <div class="about-us-text">
                <p>MEGAPARTS Marketplace e платформа за търговия с авточасти, на която партньори на MEGAPARTS предлагат
                    своите продукти и услуги. Работейки с множество доставчици, ние MEGAPARTS успяваме да предложим
                    богат асортимент на едно място за всички автолюбители. Нашите партньори предлагат авточасти, гуми,
                    джанти, акумулатори, автоаксесоари и други продукти на автомобилна тематика.

                </p>
            </div>
            <div class="about-us-img">
                <img width="400" height="300"
                    src="https://cdn.oink.bg/gallery/46830/1f0d8b82-29e2-4176-8e51-36e59cb1210c_large.webp">
            </div>
        </div>



    </div>
    <div class="services-section ps2id" id="services">
        <?php
        while (have_posts()):
            the_post();
            ?>
            <div class="service-posts">
                <div class="post-title">
                        <h2>
                            <?php the_title() ?>
                        </h2>
                    </div>
                    <div class="post-content">
                        <h2>
                            <?php the_content() ?>
                        </h2>
                    </div>
                    
                


            </div>

            <?php
        endwhile;
        ?>


    </div>

    <div class="contacts-section" id="contacts">
    <form >
            <label>
                Име:
                <input type="text" />
            </label>
            <br />
            <label>
                E-mail:
                <input type="email"  />
            </label>
            <br />
            <label>
                Съобщение:
                <input type="text">
            </label>
            <br />
            <button class='button-submit' type="submit">Submit</button>
        </form>

    </div>

</body>

<?php
get_footer();
?>
