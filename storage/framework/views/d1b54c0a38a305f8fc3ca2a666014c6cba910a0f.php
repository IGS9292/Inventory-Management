<?php $__env->startSection('styles'); ?>
    <?php echo $__env->make('shopify-app::partials.polaris_skeleton_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="Polaris-SkeletonPage__Page" role="status" aria-label="Page loading">
            <div class="Polaris-SkeletonPage__Header">
                <div class="Polaris-SkeletonPage__TitleAndPrimaryAction">
                    <div class="Polaris-SkeletonPage__TitleWrapper">
                        <div class="Polaris-SkeletonPage__SkeletonTitle"></div>
                    </div>
                </div>
            </div>
            <div class="Polaris-SkeletonPage__Content">
                <div class="Polaris-Layout">
                    <div class="Polaris-Layout__Section">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-SkeletonBodyText__SkeletonBodyTextContainer">
                                <div class="Polaris-SkeletonBodyText"></div>
                                <div class="Polaris-SkeletonBodyText"></div>
                                <div class="Polaris-SkeletonBodyText"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
        <script>
                // If no host is found, we need to throw an error
                const host = new URLSearchParams(location.search).get("host");
                if (!host) {
                    throw new Error('No host found in the URL');
                }

                // If shopify is not defined, then we are not in a Shopify context redirect to the homepage as it
                if (typeof shopify === 'undefined') {
                    open("<?php echo e(route('home')); ?>", "_self");
                }

                shopify.idToken().then((token) => {

                    let url = new URL(`<?php echo $target; ?>`, window.location.origin);
                    // Enforce HTTPS if the current page is using HTTPS
                    if (window.location.protocol === 'https:') {
                        url.protocol = 'https:';
                    }

                    url.searchParams.set('token', token);
                    url.searchParams.set('host', host);

                    open(url.toString(), "_self");
                    history.pushState(null, '', url.toString());
                });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoiglobeco/public_html/Inventory/vendor/kyon147/laravel-shopify/src/resources/views/auth/token.blade.php ENDPATH**/ ?>