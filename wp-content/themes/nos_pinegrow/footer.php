
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <main class="main-content-wrapper">
                <section class="section">
                    <div class="flexi-container text-center">
                        <header class="section-header">
                            <h1 class="section-heading"><?php _e( 'our NEW cars', 'nos_pinegrow' ); ?></h1>
                            <p class="teaser"><em><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'nos_pinegrow' ); ?></em>&nbsp;</p>
                            <div class="tabs w-tabs" data-duration-in="300" data-duration-out="100">
                                <div class="tabs-menu w-tab-menu">
                                    <a class="first tab-link w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                                        <div>
                                            <?php _e( 'Demo Models', 'nos_pinegrow' ); ?>
                                        </div>
                                    </a>
                                    <a class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 2">
                                        <div>
                                            <?php _e( 'Just Arrived', 'nos_pinegrow' ); ?>
                                        </div>
                                    </a>
                                    <a class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 3">
                                        <div>
                                            <?php _e( 'On Special', 'nos_pinegrow' ); ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="tabs-content w-tab-content">
                                    <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                                        <?php
                                            $cars_args = array(
                                                'post_type' => 'cars'
                                            )
                                         ?>
                                        <?php $cars = new WP_Query( $cars_args ); ?>
                                        <?php if ( $cars->have_posts() ) : ?>
                                            <div class="vehicles-list">
                                                <div class="w-row" widget="new-cars">
                                                    <div class="flush w-col w-col-3">
                                                        <?php while ( $cars->have_posts() ) : $cars->the_post(); ?>
                                                            <article class="vehicle-summary-item">
                                                                <div class="vehicle-summary-item-inner">
                                                                    <img sizes="(max-width: 767px) 100vw, 175px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/datsun-go-isolated.jpg" srcset="images/datsun-go-isolated-p-500x313.jpeg 500w, images/datsun-go-isolated.jpg 800w">
                                                                    <h1 class="vehicle-summary-name"><?php the_title(); ?></h1>
                                                                    <p class="vehicle-summary-price"><?php _e( 'R1340', 'nos_pinegrow' ); ?></p>
                                                                </div>
                                                            </article>
                                                        <?php endwhile; ?>
                                                        <?php wp_reset_postdata(); ?>
                                                    </div>
                                                    <div class="flush w-col w-col-3">
                                                        <article class="vehicle-summary-item">
                                                            <div class="vehicle-summary-item-inner">
                                                                <img sizes="(max-width: 767px) 100vw, 175px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/datsun-go-isolated.jpg" srcset="images/datsun-go-isolated-p-500x313.jpeg 500w, images/datsun-go-isolated.jpg 800w">
                                                                <h1 class="vehicle-summary-name"><?php _e( 'duke', 'nos_pinegrow' ); ?></h1>
                                                                <p class="vehicle-summary-price"><?php _e( 'R1340', 'nos_pinegrow' ); ?></p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="flush w-col w-col-3">
                                                        <article class="vehicle-summary-item">
                                                            <div class="vehicle-summary-item-inner">
                                                                <img sizes="(max-width: 767px) 100vw, 175px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/datsun-go-isolated.jpg" srcset="images/datsun-go-isolated-p-500x313.jpeg 500w, images/datsun-go-isolated.jpg 800w">
                                                                <h1 class="vehicle-summary-name"><?php _e( 'NP 200', 'nos_pinegrow' ); ?></h1>
                                                                <p class="vehicle-summary-price"><?php _e( 'R1340', 'nos_pinegrow' ); ?></p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="flush w-col w-col-3">
                                                        <article class="last vehicle-summary-item">
                                                            <div class="vehicle-summary-item-inner">
                                                                <img sizes="(max-width: 767px) 100vw, 176px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/datsun-go-isolated.jpg" srcset="images/datsun-go-isolated-p-500x313.jpeg 500w, images/datsun-go-isolated.jpg 800w">
                                                                <h1 class="vehicle-summary-name"><?php _e( 'NP 300', 'nos_pinegrow' ); ?></h1>
                                                                <p class="vehicle-summary-price"><?php _e( 'R1340', 'nos_pinegrow' ); ?></p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'nos_pinegrow' ); ?></p>
                                        <?php endif; ?>
                                        <a class="button w-button" href="#"><?php _e( 'See all our new cars', 'nos_pinegrow' ); ?></a>
                                    </div>
                                    <div class="w-tab-pane" data-w-tab="Tab 2"></div>
                                    <div class="w-tab-pane" data-w-tab="Tab 3"></div>
                                </div>
                            </div>
                        </header>
                    </div>
                </section>
                <section class="newsletter-capture-section section">
                    <div class="flexi-container text-center">
                        <header class="section-header">
                            <h1 class="section-heading"><?php _e( 'get notified', 'nos_pinegrow' ); ?></h1>
                            <p class="teaser"><em><?php _e( 'Join our mailing list to stay up to date with weekly &amp; monthly specials &amp; promotions.', 'nos_pinegrow' ); ?></em></p>
                        </header>
                        <div class="w-form">
                            <form class="flexi-row" data-name="Email Form" id="email-form" name="email-form">
                                <input class="newsletter-input w-input" data-name="Email 2" id="email-2" maxlength="256" name="email-2" placeholder="Enter your email address" required="required" type="email">
                                <input class="button home-newsletter w-button" data-wait="Please wait..." type="submit" value="Subscribe to News">
                            </form>
                            <div class="w-form-done">
                                <div>
                                    <?php _e( 'Thank you! Your submission has been received!', 'nos_pinegrow' ); ?>
                                </div>
                            </div>
                            <div class="w-form-fail">
                                <div>
                                    <?php _e( 'Oops! Something went wrong while submitting the form', 'nos_pinegrow' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="infiniti promotion-section section">
                    <div class="flexi-container text-center">
                        <div class="alternate flexi-row vehicle-spotlight">
                            <div class="flexi-item vehicle-spotlight-content">
                                <h1 class="vehicle-spotlight-heading"><?php _e( 'Infiniti Q60', 'nos_pinegrow' ); ?></h1>
                                <p class="vehicle-spotlight-intro"><?php _e( 'Exuding unbridled dynamism from its taut lines and road presence, the Infiniti Q60 Concept is the very epitome of high-performance stance and sporting proportions. The two-door fastback is Infiniti\'s vision of the future for the sports coupe.', 'nos_pinegrow' ); ?></p>
                                <a class="button vehicle-spotlight-action w-button" href="#"><?php _e( 'Explore the Infiniti Q60', 'nos_pinegrow' ); ?></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="flexi-container text-center">
                        <header class="section-header">
                            <h1 class="section-heading"><?php _e( 'PRE OWNED SPECIALS', 'nos_pinegrow' ); ?></h1>
                        </header>
                        <div class="tabs w-tabs" data-duration-in="300" data-duration-out="100">
                            <div class="tabs-menu w-tab-menu">
                                <a class="first tab-link w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                                    <div>
                                        <?php _e( 'Demo Models', 'nos_pinegrow' ); ?>
                                    </div>
                                </a>
                                <a class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 2">
                                    <div>
                                        <?php _e( 'Just Arrived', 'nos_pinegrow' ); ?>
                                    </div>
                                </a>
                                <a class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 3">
                                    <div>
                                        <?php _e( 'On Special', 'nos_pinegrow' ); ?>
                                    </div>
                                </a>
                            </div>
                            <div class="tabs-content w-tab-content">
                                <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                                    <div class="vehicles-list">
                                        <div class="w-row" widget="new-cars">
                                            <div class="flush w-col w-col-3">
                                                <article class="pre-owned vehicle-summary-item">
                                                    <img sizes="(max-width: 767px) 100vw, 239px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/700.jpeg" srcset="images/700-p-500x375.jpeg 500w, images/700.jpeg 700w" width="100%">
                                                    <div class="pre-owned vehicle-summary-item-inner">
                                                        <p class="vehicle-summary-price"><?php _e( 'R320,000', 'nos_pinegrow' ); ?></p>
                                                        <h1 class="vehicle-summary-name"><?php _e( '2014 Mercedes-Benz C180', 'nos_pinegrow' ); ?></h1>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Body Shape:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'SUV', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Transmission:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Automatic', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Fuel Type:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Diesel', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="last vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Mileage:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( '123,000km', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="flexi-row">
                                                            <a class="button first small w-button" href="#"><?php _e( 'Details', 'nos_pinegrow' ); ?></a>
                                                            <a class="button outline small w-button" href="#"><?php _e( 'Wishlist', 'nos_pinegrow' ); ?></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="flush w-col w-col-3">
                                                <article class="pre-owned vehicle-summary-item">
                                                    <img sizes="(max-width: 767px) 100vw, 239px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1467926.jpg" srcset="images/1467926-p-500x375.jpeg 500w, images/1467926.jpg 800w" width="100%">
                                                    <div class="pre-owned vehicle-summary-item-inner">
                                                        <p class="vehicle-summary-price"><?php _e( 'R320,000', 'nos_pinegrow' ); ?></p>
                                                        <h1 class="vehicle-summary-name"><?php _e( '2014 Mercedes-Benz C180', 'nos_pinegrow' ); ?></h1>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Body Shape:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'SUV', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Transmission:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Automatic', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Fuel Type:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Diesel', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="last vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Mileage:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( '123,000km', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="flexi-row">
                                                            <a class="button first small w-button" href="#"><?php _e( 'Details', 'nos_pinegrow' ); ?></a>
                                                            <a class="button outline small w-button" href="#"><?php _e( 'Wishlist', 'nos_pinegrow' ); ?></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="flush w-col w-col-3">
                                                <article class="pre-owned vehicle-summary-item">
                                                    <img sizes="(max-width: 767px) 100vw, 239px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/700.jpeg" srcset="images/700-p-500x375.jpeg 500w, images/700.jpeg 700w" width="100%">
                                                    <div class="pre-owned vehicle-summary-item-inner">
                                                        <p class="vehicle-summary-price"><?php _e( 'R320,000', 'nos_pinegrow' ); ?></p>
                                                        <h1 class="vehicle-summary-name"><?php _e( '2014 Mercedes-Benz C180', 'nos_pinegrow' ); ?></h1>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Body Shape:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'SUV', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Transmission:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Automatic', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Fuel Type:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Diesel', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="last vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Mileage:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( '123,000km', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="flexi-row">
                                                            <a class="button first small w-button" href="#"><?php _e( 'Details', 'nos_pinegrow' ); ?></a>
                                                            <a class="button outline small w-button" href="#"><?php _e( 'Wishlist', 'nos_pinegrow' ); ?></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="flush w-col w-col-3">
                                                <img sizes="(max-width: 767px) 100vw, 240px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1467926.jpg" srcset="images/1467926-p-500x375.jpeg 500w, images/1467926.jpg 800w" width="100%">
                                                <article class="pre-owned vehicle-summary-item">
                                                    <div class="pre-owned vehicle-summary-item-inner">
                                                        <p class="vehicle-summary-price"><?php _e( 'R320,000', 'nos_pinegrow' ); ?></p>
                                                        <h1 class="vehicle-summary-name"><?php _e( '2014 Mercedes-Benz C180', 'nos_pinegrow' ); ?></h1>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Body Shape:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'SUV', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Transmission:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Automatic', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Fuel Type:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( 'Diesel', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="last vehicle-summary-list-item">
                                                            <p><strong><?php _e( 'Mileage:', 'nos_pinegrow' ); ?></strong></p>
                                                            <p><?php _e( '123,000km', 'nos_pinegrow' ); ?></p>
                                                        </div>
                                                        <div class="flexi-row">
                                                            <a class="button first small w-button" href="#"><?php _e( 'Details', 'nos_pinegrow' ); ?></a>
                                                            <a class="button outline small w-button" href="#"><?php _e( 'Wishlist', 'nos_pinegrow' ); ?></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-tab-pane" data-w-tab="Tab 2"></div>
                                <div class="w-tab-pane" data-w-tab="Tab 3"></div>
                            </div>
                        </div>
                        <a class="button primary w-button" href="#"><?php _e( 'View All Pre Owned Cars', 'nos_pinegrow' ); ?></a>
                    </div>
                </section>
                <section class="promotion-section qx50 section">
                    <div class="flexi-container text-center">
                        <div class="flexi-row vehicle-spotlight">
                            <div class="flexi-item vehicle-spotlight-content">
                                <h1 class="vehicle-spotlight-heading"><?php _e( 'NP300', 'nos_pinegrow' ); ?></h1>
                                <p class="vehicle-spotlight-intro"><?php _e( 'Exuding unbridled dynamism from its taut lines and road presence, the Infiniti Q60 Concept is the very epitome of high-performance stance and sporting proportions. The two-door fastback is Infiniti\'s vision of the future for the sports coupe.', 'nos_pinegrow' ); ?></p>
                                <a class="button vehicle-spotlight-action w-button" href="#"><?php _e( 'Explore the NP 300', 'nos_pinegrow' ); ?></a>
                            </div>
                        </div>
                    </div>
                </section>                ____WP_START_FOOTER____
            </main>
        </div>
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
        <?php wp_footer(); ?>
    </body>
</html>
