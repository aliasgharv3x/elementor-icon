<?php
/**
 * Plugin Name: Iconsax + Line Awesome for Elementor
 * Plugin URI: https://github.com/aliasgharv3x/elementor-icon
 * Description: دو مجموعه آیکون رایگان (Iconsax سبک Linear با 890 آیکون، و Line Awesome با آیکون‌های عمومی + برند/شبکه‌اجتماعی) را به‌صورت فونت آیکون واقعی به تب سراسری «آیکون» المنتور اضافه می‌کند؛ دقیقاً کنار Font Awesome، برای انتخاب در تمام ویجت‌های المنتور (Icon Box، Icon List، Button، Nav Menu، Toggle و ...) در تمام قالب‌ها. همچنین توابع PHP و شورت‌کد برای استفاده مستقیم در قالب‌ها فراهم می‌کند.
 * Version: 4.0.0
 * Author: علی اصغر نوروززاده
 * Text Domain: iconsax-elementor
 * License: GPLv2 or later (کد افزونه)
 *
 * درباره فونت‌های آیکون:
 * - Iconsax: طرح آیکون‌ها متعلق به تیم Vuesax (iconsax.io) است و طبق لایسنس رایگان
 *   Iconsax (استفاده شخصی/تجاری نامحدود، بدون فروش یا بازتوزیع مجموعه به‌عنوان یک
 *   محصول مستقل) استفاده شده. فایل فونت با fontello.com از روی نسخه رایگان (Linear)
 *   ساخته شده - بر پایه کار متن‌باز glenthemes/iconsax (github.com/glenthemes/iconsax).
 * - Line Awesome: از پروژه icons8/line-awesome (github.com/icons8/line-awesome)،
 *   لایسنس MIT / Good Boy License، رایگان برای استفاده شخصی و تجاری. شامل آیکون‌های
 *   عمومی خط‌دار و آیکون‌های برند/شبکه‌اجتماعی (اینستاگرام، تلگرام، واتساپ، فیسبوک،
 *   لینکدین، یوتیوب، پینترست و ...).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // no direct access
}

define( 'ICONSAX_ELEMENTOR_VERSION', '4.0.0' );
define( 'ICONSAX_ELEMENTOR_URL', plugin_dir_url( __FILE__ ) );
define( 'ICONSAX_ELEMENTOR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * فهرست نام تمام 890 آیکون رایگان Iconsax (سبک Linear) بدون پیشوند.
 * این نام‌ها با کلاس‌های تعریف‌شده در assets/iconsax.css مطابقت دارند (iconsax-NAME).
 */
function iconsax_elementor_get_icon_names() {
    static $names = [
        '24hr-service', '3d-cube', 'activity-chart', 'activity-chart-favorite', 'activity-square', 'add',
        'add-circle', 'add-layer', 'add-square', 'airdrop', 'airplane', 'airplane-square',
        'airpod', 'airpods', 'alarm', 'align-bottom', 'align-left', 'align-right',
        'align-top', 'align-x-center', 'align-y-center', 'aquarius', 'archive-book', 'archive-closed',
        'archive-open', 'arrow-down', 'arrow-down-circle', 'arrow-down-thick-1', 'arrow-down-thick-3', 'arrow-left',
        'arrow-left-circle', 'arrow-left-thick-1', 'arrow-left-thick-3', 'arrow-right', 'arrow-right-circle', 'arrow-right-thick-1',
        'arrow-right-thick-2', 'arrow-right-thick-3', 'arrow-up', 'arrow-up-circle', 'arrow-up-down', 'arrow-up-thick-1',
        'arrow-up-thick-3', 'auto-brightness', 'award', 'award-2', 'award-3', 'background-layer',
        'backspace', 'bank', 'bank-card', 'bank-card-add', 'bank-card-convert', 'bank-card-diagonal',
        'bank-card-receive', 'bank-card-send', 'bank-card-slash', 'bank-card-tick-1', 'bank-card-tick-2', 'bank-card-x-1',
        'bank-card-x-2', 'bank-cards', 'bar-graph-1', 'bar-graph-2', 'bar-graph-3', 'bar-graph-4',
        'bar-graph-5', 'barcode', 'basket-1', 'basket-2', 'basket-3', 'basket-happy',
        'basket-tick-1', 'basket-tick-2', 'basket-time', 'basket-x', 'basket-x-1', 'battery-1',
        'battery-2', 'battery-charging', 'battery-disable', 'battery-empty', 'battery-full', 'bell-1',
        'bell-2', 'bell-3', 'bezier', 'bill', 'birdhouse', 'blend-1',
        'blend-2', 'bluetooth', 'bluetooth-2', 'bluetooth-circle', 'bluetooth-rectangle', 'blur',
        'bold', 'book-closed', 'book-open', 'book-square', 'book-with-bookmark', 'bookmark-add',
        'bookmark-minus', 'bookmark-minus-2', 'bookmark-slash', 'bookmark-tick', 'bookmarks', 'bookmarks-add',
        'bookmarks-minus', 'bookmarks-x', 'bounding-box', 'bounding-circle', 'box', 'box-add',
        'box-dashed', 'box-rotate', 'box-scan', 'box-search', 'box-square', 'box-swap',
        'box-tick', 'box-time', 'box-x', 'briefcase', 'briefcase-tick', 'briefcase-time',
        'briefcase-x', 'broom', 'brush-1', 'brush-2', 'brush-3', 'brush-4',
        'brush-5', 'brush-tools', 'bubbles', 'building-1', 'building-2', 'building-3',
        'building-4', 'buildings-1', 'buildings-2', 'bulb', 'bulb-charge', 'bulb-slash',
        'bus', 'cake', 'calculator', 'calendar-1', 'calendar-2', 'calendar-3',
        'calendar-add', 'calendar-circle', 'calendar-edit', 'calendar-search', 'calendar-tick', 'calendar-x',
        'camera', 'camera-slash', 'car', 'card-coin', 'card-edit', 'cast',
        'cd', 'change-shape-1', 'change-shape-2', 'chart-square', 'chart-tick', 'chart-x',
        'chevron-down', 'chevron-down-circle', 'chevron-down-square', 'chevron-left', 'chevron-left-circle', 'chevron-left-square',
        'chevron-right', 'chevron-right-circle', 'chevron-right-square', 'chevron-up', 'chevron-up-circle', 'chevron-up-square',
        'chrome', 'circle', 'clipboard', 'clipboard-in', 'clipboard-out', 'clipboard-text-1',
        'clipboard-text-2', 'clipboard-tick', 'clipboard-x', 'clock', 'cloud', 'cloud-add',
        'cloud-change', 'cloud-connection', 'cloud-fog', 'cloud-lightning', 'cloud-minus', 'cloud-notif',
        'cloud-rain', 'cloud-snow', 'cloud-sunny', 'cloud-tick', 'cloud-x-1', 'cloud-x-circle',
        'code-1', 'code-2', 'code-circle', 'code-clipboard', 'code-tag', 'coffee',
        'coins-2', 'coins-3', 'coins-4', 'color-filter', 'color-filter-square', 'color-swatch',
        'columns', 'command', 'command-square', 'compass-1', 'compass-2', 'component',
        'convert', 'copy', 'copy-tick', 'copyright', 'courthouse', 'cpu',
        'cpu-charge', 'cpu-setting', 'creative-commons', 'crop', 'crown-1', 'crown-2',
        'cue-cards', 'cursor-circle', 'cursor-circle-1', 'cursor-square', 'cursor-square-1', 'devices-1',
        'devices-2', 'diamonds', 'directions', 'directions-square', 'discount-badge', 'discount-circle',
        'dislike', 'document-1', 'document-2', 'document-cloud', 'document-code-1', 'document-code-2',
        'document-copy', 'document-download', 'document-favorite', 'document-favorite-1', 'document-filter', 'document-forward',
        'document-previous', 'document-sketch', 'document-text-1', 'document-text-2', 'document-upload', 'dollar-circle',
        'dollar-square', 'download-1', 'download-2', 'download-square', 'driver-1', 'driver-2',
        'driver-refresh', 'driving', 'drop', 'earphones', 'edit-1', 'edit-2',
        'emoji-happy', 'emoji-normal', 'emoji-sad', 'eraser', 'eraser-square', 'external-circle',
        'external-drive', 'external-square', 'eye', 'eye-slash', 'female', 'filter',
        'filter-add', 'filter-edit', 'filter-search', 'filter-square', 'filter-tick', 'filter-x',
        'fingerprint-circle', 'fingerprint-scan', 'first-character', 'flag-1', 'flag-2', 'flash-1',
        'flash-circle-1', 'flash-circle-2', 'flash-slash', 'flash-speed', 'flask', 'flow-chart-1',
        'flow-chart-2', 'folder-1', 'folder-2', 'folder-add', 'folder-cloud', 'folder-connection',
        'folder-favorite', 'folder-minus', 'folder-open', 'folder-x', 'footer', 'foreground-layer',
        'game-controller', 'gameboy', 'gas-station', 'gemini', 'gemini-2', 'ghost',
        'gift', 'git-arrows', 'git-commit', 'git-pull-request', 'git-pull-request-square', 'glasses',
        'globe', 'globe-edit', 'globe-refresh', 'globe-search', 'gps', 'gps-slash',
        'grammarly', 'grid-apps', 'grid-apps-2', 'grid-apps-add', 'grid-apps-equals', 'grid-lock',
        'grid-quadrants', 'grid-table', 'grid-table-edit', 'grid-table-eraser', 'grid-uneven', 'group',
        'hamburger-menu', 'hashtag', 'hashtag-down', 'hashtag-up', 'header', 'headphones',
        'headphones-active', 'heart', 'heart-add', 'heart-circle', 'heart-edit', 'heart-monitor-square',
        'heart-search', 'heart-slash', 'heart-tag', 'heart-tick', 'heart-x', 'hearts',
        'hierarchy-1', 'hierarchy-1-square', 'hierarchy-2', 'hierarchy-2-square', 'hierarchy-3', 'history',
        'home-1', 'home-2', 'home-shield', 'home-trend-down', 'home-trend-up', 'home-wifi',
        'hospital', 'hourglass', 'house-1', 'house-2', 'inbox-1', 'inbox-2',
        'inbox-3', 'inbox-4', 'inbox-in-1', 'inbox-in-2', 'inbox-notif', 'inbox-out-1',
        'inbox-out-2', 'infinite', 'info-badge', 'info-circle', 'instagram', 'italic',
        'item-rotate-left', 'item-rotate-right', 'judge', 'kanban', 'key', 'key-square',
        'keyboard-1', 'keyboard-2', 'lamp-1', 'lamp-2', 'language-circle', 'language-square',
        'layers-1', 'layers-2', 'layout-1', 'layout-2', 'layout-3', 'layout-4',
        'layout-5', 'layout-6', 'layout-7', 'layout-8', 'layout-half', 'level',
        'lifebuoy', 'like', 'like-badge', 'like-dislike', 'like-tag', 'line-spacing',
        'link-1', 'link-2', 'link-3', 'link-4', 'link-circle', 'link-square',
        'location', 'location-add', 'location-minus', 'location-slash', 'location-tick', 'location-x',
        'lock-1', 'lock-2', 'lock-circle', 'lock-slash', 'login', 'login-2',
        'logout-1', 'logout-2', 'loop', 'magic-star', 'magic-wand', 'mail',
        'mail-edit', 'mail-notif', 'mail-search', 'mail-speed', 'mail-star', 'main-component',
        'male', 'map-1', 'map-2', 'map-3', 'mask', 'mask-1',
        'mask-2', 'mask-3', 'math-1', 'math-2', 'maximize', 'maximize-1',
        'maximize-2', 'maximize-3', 'maximize-3-square', 'maximize-circle', 'media-backward', 'media-backward-10s',
        'media-backward-15s', 'media-backward-5s', 'media-forward', 'media-forward-10s', 'media-forward-15s', 'media-forward-5s',
        'media-next', 'media-previous', 'media-repeat', 'media-repeat-single', 'media-sliders-1', 'media-sliders-2',
        'media-sliders-3', 'menu-4-dots', 'menu-meatballs', 'message-add', 'message-circle', 'message-dash-1',
        'message-dash-2', 'message-dash-add', 'message-dash-tick', 'message-dash-time', 'message-dash-x', 'message-dots',
        'message-dots-favorite', 'message-edit', 'message-minus', 'message-notif', 'message-search', 'message-square',
        'message-text', 'messages-1', 'messages-2', 'messages-3', 'messages-4', 'mic-1',
        'mic-2', 'mic-slash-1', 'mic-slash-2', 'milk', 'minus', 'minus-circle',
        'minus-square', 'mirror', 'mobile', 'money-1', 'money-2', 'money-3',
        'money-4', 'money-5', 'money-add', 'money-change', 'money-forbidden', 'money-in',
        'money-out', 'money-tick', 'money-time', 'money-x', 'monitor', 'monitor-message',
        'monitor-record', 'moon', 'more-circle', 'more-square', 'mouse', 'music',
        'music-circle-dashed', 'music-dashboard', 'music-list', 'music-multi', 'music-playlist', 'music-square-1',
        'music-square-2', 'music-square-3', 'music-square-4', 'music-square-add', 'music-square-search', 'music-square-x',
        'musicnote', 'not-allowed-1', 'not-allowed-2', 'not-allowed-3', 'note', 'note-add',
        'note-favorite', 'note-text', 'note-x', 'notepad', 'notes-1', 'notes-2',
        'notif-circle', 'notif-favorite', 'notif-square', 'notif-text-square', 'nut', 'omega-circle',
        'omega-square', 'package', 'page-with-bookmark-1', 'page-with-bookmark-2', 'paintbucket-1', 'paintbucket-2',
        'paintbucket-circle', 'paintbucket-square', 'paperclip-1', 'paperclip-2', 'paperclip-circle', 'paperclip-square',
        'password-check', 'pause', 'pause-circle', 'pen-path-1', 'pen-path-2', 'pen-tool-1',
        'pen-tool-2', 'pen-tool-add', 'pen-tool-minus', 'pen-tool-square', 'pen-tool-x', 'percentage-circle',
        'percentage-square', 'person-card', 'pet', 'phone', 'phone-add', 'phone-minus',
        'phone-outgoing', 'phone-receive', 'phone-ringing', 'phone-slash', 'phone-tick', 'phone-x',
        'picture', 'picture-1', 'picture-add', 'picture-download', 'picture-edit', 'picture-favorite',
        'picture-slash', 'picture-tick', 'picture-upload', 'picture-x', 'pie-chart', 'play',
        'play-circle', 'play-circle-add', 'play-circle-dashed', 'play-circle-x', 'play-octagon', 'play-square',
        'plug', 'pop-in-circle', 'pop-in-square', 'pop-out', 'pop-out-player', 'presentation-chart',
        'printer', 'printer-slash', 'qr-code', 'question-message', 'quote-end', 'quote-end-circle',
        'quote-end-square', 'quote-start', 'quote-start-circle', 'quote-start-square', 'radar-1', 'radar-2',
        'radar-3', 'radial-chart', 'radio', 'ram-1', 'ram-2', 'ranking',
        'ranking-1', 'reblog', 'receipt', 'receipt-2', 'receipt-3', 'receipt-4',
        'receipt-add', 'receipt-discount-1', 'receipt-discount-2', 'receipt-edit', 'receipt-list', 'receipt-minus-1',
        'receipt-minus-2', 'receipt-search', 'receipt-square', 'receipt-text', 'receive-diagonal-down', 'receive-diagonal-square',
        'record-circle', 'recover', 'redo', 'redo-square', 'refresh', 'refresh-circle',
        'refresh-left-square', 'refresh-right-square', 'refresh-square', 'repeat', 'repeat-circle', 'retweet',
        'rotate-left', 'rotate-right', 'route-1', 'route-2', 'rows-1', 'rows-2',
        'ruler', 'ruler-and-pen', 'safebox-1', 'safebox-2', 'sagittarius', 'scan-1',
        'scan-2', 'scan-3', 'scan-4', 'scissors', 'scissors-square', 'scroll-horizontal-square',
        'search-favorite-1', 'search-favorite-2', 'search-normal-1', 'search-normal-2', 'search-status-1', 'search-status-2',
        'search-zoom-in', 'search-zoom-in-2', 'search-zoom-out-1', 'search-zoom-out-2', 'send-1', 'send-2',
        'send-diagonal-square', 'send-diagonal-up', 'setting-1', 'setting-2', 'setting-3', 'shapes-1',
        'shapes-2', 'share', 'shield', 'shield-card', 'shield-lock', 'shield-search',
        'shield-slash', 'shield-tick', 'shield-time', 'shield-user', 'shield-x', 'ship',
        'shop', 'shop-add', 'shop-minus', 'shopping-cart', 'shuffle-1', 'shuffle-2',
        'sidebar-left', 'sidebar-right', 'signpost', 'simcard-1', 'simcard-2', 'simcards',
        'size', 'slider', 'slideshow-horizontal-1', 'slideshow-horizontal-2', 'slideshow-vertical-1', 'slideshow-vertical-2',
        'smart-car', 'smart-home', 'smileys', 'snow', 'sort', 'sound',
        'sound-circle', 'speaker', 'speedometer', 'square', 'star', 'star-slash',
        'star-speed', 'status', 'stickynote', 'stickynote-round', 'stop-circle', 'stopwatch',
        'stopwatch-pause', 'stopwatch-play', 'story', 'subtitles', 'sun', 'sun-fog',
        'swap-horizontal', 'swap-horizontal-circle', 'swap-horizontal-square', 'swap-vertical', 'swap-vertical-circle', 'swap-vertical-square',
        'tag-1', 'tag-2', 'task-list', 'task-list-square', 'teacher', 'telescope',
        'text', 'text-align-center', 'text-align-justify-center', 'text-align-justify-left', 'text-align-justify-right', 'text-align-left',
        'text-align-right', 'text-block', 'therefore', 'tick-circle', 'tick-square', 'ticket-1',
        'ticket-2', 'ticket-discount', 'ticket-star', 'ticket-tear', 'toggle-off-round', 'toggle-off-square',
        'toggle-on-round', 'toggle-on-square', 'translate', 'trash', 'trash-square', 'tree',
        'trend-down-square', 'trend-up', 'triangle', 'trophy', 'truck', 'truck-speed',
        'truck-tick', 'truck-time', 'truck-x', 'tuning-knob', 'underline', 'undo',
        'undo-square', 'unlock', 'upload-1', 'upload-2', 'upload-square', 'uppercase-lowercase',
        'user-1', 'user-1-add', 'user-1-minus', 'user-1-square', 'user-1-tag', 'user-1-tick',
        'user-1-x', 'user-2', 'user-2-add', 'user-2-circle', 'user-2-circle-add', 'user-2-edit',
        'user-2-minus', 'user-2-search', 'user-2-tag', 'user-2-tick', 'user-2-x', 'user-octagon',
        'users', 'verify', 'video', 'video-2', 'video-add', 'video-horizontal',
        'video-slash', 'video-tick', 'video-time', 'video-vertical', 'video-x', 'voice-square',
        'volume-add', 'volume-high', 'volume-low', 'volume-minus', 'volume-mute', 'volume-slash',
        'volume-x', 'wallet-1', 'wallet-2', 'wallet-3', 'wallet-4', 'wallet-add',
        'wallet-add-1', 'wallet-minus', 'wallet-money', 'wallet-open', 'wallet-open-add', 'wallet-open-change',
        'wallet-open-tick', 'wallet-open-time', 'wallet-open-x', 'wallet-search', 'wallet-tick', 'wallet-x',
        'warning-octagon', 'warning-triangle', 'watch-1', 'watch-2', 'watch-activity', 'weight-scale',
        'weights', 'wifi', 'wifi-square', 'wind-1', 'wind-2', 'x',
        'x-circle', 'x-square',
    ];

    return $names;
}

/**
 * افزودن Iconsax و سه دسته‌ی Line Awesome (Regular/Solid/Brands) به‌عنوان تب‌های
 * مستقل و واقعی (بر پایه فونت) در ابزار انتخاب آیکون سراسری المنتور. دقیقاً مثل
 * Font Awesome، در همان پنل کناری و در تمام ویجت‌های آیکون‌دار المنتور (و در نتیجه
 * تمام قالب‌ها) در دسترس قرار می‌گیرند.
 */
add_filter( 'elementor/icons_manager/additional_tabs', 'iconsax_elementor_register_tab' );
function iconsax_elementor_register_tab( $tabs ) {
    $tabs['iconsax'] = [
        'name'          => 'iconsax',
        'label'         => 'Iconsax',
        'url'           => ICONSAX_ELEMENTOR_URL . 'assets/iconsax.css',
        'enqueue'       => [],
        'prefix'        => 'iconsax-',
        'displayPrefix' => 'iconsax',
        'labelIcon'     => 'eicon-star',
        'ver'           => ICONSAX_ELEMENTOR_VERSION,
        'fetchJson'     => ICONSAX_ELEMENTOR_URL . 'assets/iconsax-icons.json',
        'native'        => true,
    ];

    $tabs['line-awesome-brands'] = [
        'name'          => 'line-awesome-brands',
        'label'         => 'Line Awesome - Brands',
        'url'           => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-brands.css',
        'enqueue'       => [],
        'prefix'        => 'la-',
        'displayPrefix' => 'lab',
        'labelIcon'     => 'lab la-instagram',
        'ver'           => ICONSAX_ELEMENTOR_VERSION,
        'fetchJson'     => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-brands-icons.json',
        'native'        => true,
    ];

    $tabs['line-awesome-regular'] = [
        'name'          => 'line-awesome-regular',
        'label'         => 'Line Awesome - Regular',
        'url'           => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-regular.css',
        'enqueue'       => [],
        'prefix'        => 'la-',
        'displayPrefix' => 'lar',
        'labelIcon'     => 'eicon-star',
        'ver'           => ICONSAX_ELEMENTOR_VERSION,
        'fetchJson'     => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-regular-icons.json',
        'native'        => true,
    ];

    $tabs['line-awesome-solid'] = [
        'name'          => 'line-awesome-solid',
        'label'         => 'Line Awesome - Solid',
        'url'           => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-solid.css',
        'enqueue'       => [],
        'prefix'        => 'la-',
        'displayPrefix' => 'las',
        'labelIcon'     => 'eicon-star',
        'ver'           => ICONSAX_ELEMENTOR_VERSION,
        'fetchJson'     => ICONSAX_ELEMENTOR_URL . 'assets/line-awesome/la-solid-icons.json',
        'native'        => true,
    ];

    return $tabs;
}

/**
 * تابع PHP برای چاپ مستقیم یک آیکون در قالب‌ها/ویجت‌های سفارشی.
 * مثال: iconsax_icon( 'add-circle', [ 'class' => 'my-icon', 'style' => 'font-size:32px;color:#3a86ff;' ] );
 */
function iconsax_icon( $name, $args = [] ) {
    echo iconsax_get_icon_html( $name, $args ); // phpcs:ignore WordPress.Security.EscapeOutput -- already escaped inside
}

/**
 * همانند iconsax_icon() اما به‌جای چاپ مستقیم، رشته HTML را برمی‌گرداند.
 */
function iconsax_get_icon_html( $name, $args = [] ) {
    $name = sanitize_html_class( str_replace( 'iconsax-', '', $name ) );

    $args = wp_parse_args(
        $args,
        [
            'class' => '',
            'style' => '',
        ]
    );

    $classes = trim( 'iconsax iconsax-' . $name . ' ' . $args['class'] );

    return sprintf(
        '<i class="%1$s" style="%2$s" aria-hidden="true"></i>',
        esc_attr( $classes ),
        esc_attr( $args['style'] )
    );
}

/**
 * شورت‌کد برای استفاده در ویجت‌های Text Editor / Shortcode المنتور یا هر جای دیگر وردپرس.
 * مثال: [iconsax name="add-circle" class="my-icon" style="font-size:32px;color:#3a86ff;"]
 */
add_shortcode( 'iconsax', 'iconsax_elementor_shortcode' );
function iconsax_elementor_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'name'  => 'add-circle',
            'class' => '',
            'style' => '',
        ],
        $atts,
        'iconsax'
    );

    return iconsax_get_icon_html( $atts['name'], $atts );
}
