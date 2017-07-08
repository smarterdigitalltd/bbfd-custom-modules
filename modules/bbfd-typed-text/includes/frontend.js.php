(function($) {
    $('.fl-node-<?= $id; ?> .typed-text').typeIt({
        strings: <?= json_encode( $settings->text ); ?>,
        speed: 50,
        breakLines: false
    });
})(jQuery);