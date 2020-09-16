<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Foundation_Hall
 */

?>
</div>
<footer class="bg-light-brown">
    <div class="w-full xl:max-w-screen-xl xl:mx-auto">
        <div class="bg-dark-brown flex flex-col-reverse lg:flex-row flex-wrap py-6 px-6">
            <div class="w-full lg:w-1/2 text-white border-0 lg:border-l-4 border-darker-brown pl-0 lg:pl-6 mt-6 lg:mt-0 pb-4 lg:pb-0">
                <div class="font-semibold text-xl hidden lg:block">Stay Connected</div>
                <div class="flex space-x-8 items-center mt-4 justify-center lg:justify-start">
                    <a href="https://www.marshall.edu/foundationhall/" class="text-white transition-all duration-100 hover:-mt-1">
                        <span class="sr-only">Foundation Hall on Instagram</span>
                        <svg role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8 w-8 fill-current">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" /></svg>
                    </a>
                    <a href="https://www.facebook.com/mufoundationhall" class="text-white transition-all duration-100 hover:-mt-1">
                        <span class="sr-only">Foundation Hall on Facebook</span>
                        <svg role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" class="h-8 w-8 fill-current">
                            <path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" /></svg>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 text-white lg:border-l-4 border-darker-brown pl-0 lg:pl-6 mt-8 lg:mt-0 text-center lg:text-left border-0">
                Marshall University Foundation, Inc.<br>
                519 John Marshall Dr.<br>
                Huntington, WV 25703<br>
                304-696-6264<br>
                1-866-308-1346<br>
                <a href="mailto:foundation@marshall.edu" class="underline text-white hover:text-white hover:no-underline">foundation@marshall.edu</a>
            </div>
        </div>
        <div class="mt-8 mb-8 text-center text-white text-sm px-6 lg:px-0">
            <?php echo date("Y"); ?> Marshall University Foundation - 519 John Marshall Drive - Huntington, WV 25703
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>