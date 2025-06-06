<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="shopify-api-key" content="<?php echo e(\Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name )); ?>"/>
        <script src="https://cdn.shopify.com/shopifycloud/app-bridge.js"></script>

        <title><?php echo e(config('shopify-app.app_name')); ?></title>
        <?php echo $__env->yieldContent('styles'); ?>
    </head>

    <body>
        <div class="app-wrapper">
            <div class="app-content">
                <main role="main">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>

        <?php if(\Osiset\ShopifyApp\Util::useNativeAppBridge()): ?>
            <?php echo $__env->make('shopify-app::partials.token_handler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /home/demoiglobeco/public_html/Inventory/vendor/kyon147/laravel-shopify/src/resources/views/layouts/default.blade.php ENDPATH**/ ?>