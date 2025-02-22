<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly 
?>
<div class="iwbvel-modal iwbvel-modal-in-float-side" id="iwbvel-variations-individual-variation-modal">
    <div class="iwbvel-modal-container">
        <div class="iwbvel-modal-box iwbvel-modal-box-sm-iv">
            <div class="iwbvel-modal-content">
                <div class="iwbvel-modal-title">
                    <h2><?php esc_html_e('Individual variation', 'ithemelandco-woocommerce-bulk-variation-editing-lite'); ?></h2>
                    <button type="button" class="iwbvel-modal-close" data-toggle="modal-close">
                        <i class="iwbvel-icon-x"></i>
                    </button>
                </div>
                <div class="iwbvel-modal-body">
                    <div class="iwbvel-wrap">
                        <div class="iwbvel-variations-individual-variation-loading">
                            <p><img src="<?php echo esc_url(IWBVEL_IMAGES_URL . 'loading-2.gif'); ?>" width="34"></p>
                        </div>
                        <div id="iwbvel-variations-individual-variation-items"></div>
                    </div>
                </div>
                <div class="iwbvel-modal-footer">
                    <button type="button" class="iwbvel-button iwbvel-button-blue iwbvel-individual-variation-add-button" data-toggle="modal-close">
                        <?php esc_html_e('Add', 'ithemelandco-woocommerce-bulk-variation-editing-lite'); ?>
                    </button>
                    <button type="button" class="iwbvel-button iwbvel-button-gray" data-toggle="modal-close">
                        <?php esc_html_e('Cancel', 'ithemelandco-woocommerce-bulk-variation-editing-lite'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>