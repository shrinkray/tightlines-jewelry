

<div class="social-row">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="social-cc">
          <div class="property">

            <?php if ( have_rows( 'add_social_media', 'option' ) ) : ?>
              <?php while ( have_rows( 'add_social_media', 'option' ) ) : the_row();

                $alt = get_sub_field( 'alt_value', 'option' );
                $url = get_sub_field( 'add_url', 'option' );
                $logo = get_sub_field( 'select_a_logo', 'option' ); ?>

                <a href="<?php echo $url; ?>"
                   target="_blank" title="<?php echo $alt; ?>" ><i class="fa fa-<?php echo $logo; ?>"></i></a>

              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>

          </div>


          <div class="ccard">

            <?php // select_cards ( value )
            $select_cards_array = get_field( 'select_cards', 'option' );

            if ( $select_cards_array ):
            foreach ( $select_cards_array as $select_cards_item ):

            if ( $select_cards_item == 'paypal' ) { ?>
              <i class="cc-logo fa fa-paypal" title="PayPal"></i>
              <?php } else if ( $select_cards_item == 'apple' ) { ?>
              <i class="cc-logo fa fa-apple" title="Apple Pay"></i>
              <?php } else if ( $select_cards_item == 'amex' ) { ?>
              <i class="cc-logo fa fa-cc-amex" title="American Express"></i>
              <?php } else if ( $select_cards_item == 'visa' ) { ?>
              <i class="cc-logo fa fa-cc-visa" title="Visa"></i>
              <?php } else if ( $select_cards_item == 'mcard' ) { ?>
              <i class="cc-logo fa fa-cc-mastercard" title="MasterCard"></i>
              <?php } else if ( $select_cards_item == 'disc' ) { ?>
              <i class="cc-logo fa fa-cc-discover" title="Discovercard"></i>
              <?php } else if ( $select_cards_item == 'stripe' ) { ?>
              <i class="cc-logo fa fa-cc-stripe" title="Stripe"></i>
              <?php } else if ( $select_cards_item == 'dclub' ) { ?>
              <i class="cc-logo fa fa-cc-diners-club" title="Diner's Club"></i>
              <?php } ?>
                <?php  endforeach;
                endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>