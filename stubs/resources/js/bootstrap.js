import _ from "lodash";
window._ = _;
import UIkit from "uikit";
// this is the core uikit js package without the components activated.
// import UIkit from "uikit/dist/js/uikit-core";

/**
 * UIkit js components
 * Load the necessary components that you will require
 */
// IMPORTS
// import Countdown from "uikit/dist/js/components/countdown";
// import Filter from 'uikit/dist/js/components/filter';
// import Lightbox from 'uikit/dist/js/components/lightbox';
// import LightboxPanel from 'uikit/dist/js/components/lightbox-panel';
// import Notification from 'uikit/dist/js/components/notification';
// import Parallax from 'uikit/dist/js/components/parallax';
// import Slider from "uikit/dist/js/components/slider";
// import SliderParallax from 'uikit/dist/js/components/slider-parallax';
// import Slideshow from "uikit/dist/js/components/slideshow";
// import SlideshowParallax from "uikit/dist/js/components/slideshow-parallax";
// import Sortable from 'uikit/dist/js/components/sortable';
// import Tooltip from "uikit/dist/js/components/tooltip";
// import Upload from 'uikit/dist/js/components/upload';
import UIkitIcons from "uikit/dist/js/uikit-icons";

// USAGE
// UIkit.component('countdown', Countdown);
// UIkit.component('filter', Filter);
// UIkit.component('lightbox', Lightbox);
// UIkit.component('lightboxPanel', LightboxPanel);
// UIkit.component('notification', Notification);
// UIkit.component('parallax', Parallax);
// UIkit.component('slider', Slider);
// UIkit.component('sliderParallax', SliderParallax);
// UIkit.component('slideshow', Slideshow);
// UIkit.component("slideshowParallax", SlideshowParallax);
// UIkit.component('sortable', Sortable);
// UIkit.component('tooltip', Tooltip);
// UIkit.component('upload', Upload);

UIkit.use(UIkitIcons);

window.UIkit = UIkit;
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
