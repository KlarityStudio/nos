<?php
get_header(); ?>

<div class="header-search-form-inner">
    <div class="w-form">
        <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
            <div class="flexi-row">
                <div class="flexi-item header-booking-item">
                    <label for="Select-a-make">
                        <?php _e( 'Make:', 'nos_pinegrow' ); ?>
                    </label>
                    <select class="w-select" data-name="Select a make" id="Select-a-make" name="Select-a-make" required="required">
                        <option value="">
                            <?php _e( 'Select one...', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="First">
                            <?php _e( 'First Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Second">
                            <?php _e( 'Second Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Third">
                            <?php _e( 'Third Choice', 'nos_pinegrow' ); ?>
                        </option>
                    </select>
                </div>
                <div class="flexi-item header-booking-item last">
                    <label for="Select-a-make-2">
                        <?php _e( 'Model:', 'nos_pinegrow' ); ?>
                    </label>
                    <select class="w-select" data-name="Select A Make 2" id="Select-a-make-2" name="Select-a-make-2" required="required">
                        <option value="">
                            <?php _e( 'Select one...', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="First">
                            <?php _e( 'First Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Second">
                            <?php _e( 'Second Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Third">
                            <?php _e( 'Third Choice', 'nos_pinegrow' ); ?>
                        </option>
                    </select>
                </div>
            </div>
            <div class="flexi-row">
                <div class="flexi-item header-booking-item">
                    <label for="Select-a-make-3">
                        <?php _e( 'Price:', 'nos_pinegrow' ); ?>
                    </label>
                    <select class="w-select" data-name="Select A Make 3" id="Select-a-make-3" name="Select-a-make-3" required="required">
                        <option value="">
                            <?php _e( 'Select one...', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="First">
                            <?php _e( 'First Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Second">
                            <?php _e( 'Second Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Third">
                            <?php _e( 'Third Choice', 'nos_pinegrow' ); ?>
                        </option>
                    </select>
                </div>
                <div class="flexi-item header-booking-item last">
                    <label for="Select-a-make-4">
                        <?php _e( 'Year:', 'nos_pinegrow' ); ?>
                    </label>
                    <select class="w-select" data-name="Select A Make 4" id="Select-a-make-4" name="Select-a-make-4" required="required">
                        <option value="">
                            <?php _e( 'Select one...', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="First">
                            <?php _e( 'First Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Second">
                            <?php _e( 'Second Choice', 'nos_pinegrow' ); ?>
                        </option>
                        <option value="Third">
                            <?php _e( 'Third Choice', 'nos_pinegrow' ); ?>
                        </option>
                    </select>
                </div>
            </div>
            <div class="flexi-item header-booking-item last">
                <label for="Select-a-make-5">
                    <?php _e( 'Mileage:', 'nos_pinegrow' ); ?>
                </label>
                <select class="w-select" data-name="Select A Make 5" id="Select-a-make-5" name="Select-a-make-5" required="required">
                    <option value="">
                        <?php _e( 'Select one...', 'nos_pinegrow' ); ?>
                    </option>
                    <option value="First">
                        <?php _e( 'First Choice', 'nos_pinegrow' ); ?>
                    </option>
                    <option value="Second">
                        <?php _e( 'Second Choice', 'nos_pinegrow' ); ?>
                    </option>
                    <option value="Third">
                        <?php _e( 'Third Choice', 'nos_pinegrow' ); ?>
                    </option>
                </select>
            </div>
            <input class="button header-search-action w-button" data-wait="Please wait..." type="submit" value="Show Results">
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

<?php get_footer(); ?>