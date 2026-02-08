<?php use App\Enums\Payment\FlutterwaveCurrencyCodeEnum;use App\Enums\Payment\PaymentTypeEnum;use App\Enums\Payment\PaystackCurrencyCodeEnum; ?>


<?php $__env->startSection('title', __('labels.payment_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.payment_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.payment_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.payment_settings')); ?></h2>
                <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGE BODY -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-sm-2 d-none d-lg-block">
                    <div class="sticky-top">
                        <h3><?php echo e(__('labels.menu')); ?></h3>
                        <nav class="nav nav-vertical nav-pills" id="pills">
                            <a class="nav-link" href="#pills-stripe"><?php echo e(__('labels.stripe_payment')); ?></a>
                            <a class="nav-link" href="#pills-razorpay"><?php echo e(__('labels.razorpay_payment')); ?></a>
                            <a class="nav-link" href="#pills-paystack"><?php echo e(__('labels.paystack_payment')); ?></a>
                            <a class="nav-link" href="#pills-flutterwave"><?php echo e(__('labels.flutterwave_payment')); ?></a>
                            <a class="nav-link" href="#pills-wallet"><?php echo e(__('labels.wallet_payment')); ?></a>
                            <a class="nav-link" href="#pills-cod"><?php echo e(__('labels.cash_on_delivery')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="payment">
                                <div class="card mb-4" id="pills-stripe">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.stripe_payment')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_stripe_payment')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="stripePayment" value="1" <?php echo e(isset($settings['stripePayment']) && $settings['stripePayment'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                        <div id="stripeFields"
                                             style="<?php echo e(isset($settings['stripePayment']) && $settings['stripePayment'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_payment_mode')); ?></label>
                                                <select class="form-select" name="stripePaymentMode">
                                                    <option value=""
                                                            disabled <?php echo e(!isset($settings['stripePaymentMode']) ? 'selected' : ''); ?>><?php echo e(__('labels.stripe_payment_mode_placeholder')); ?></option>
                                                    <option
                                                        value="test" <?php echo e(isset($settings['stripePaymentMode']) && $settings['stripePaymentMode'] === 'test' ? 'selected' : ''); ?>>
                                                        Test
                                                    </option>
                                                    <option
                                                        value="live" <?php echo e(isset($settings['stripePaymentMode']) && $settings['stripePaymentMode'] === 'live' ? 'selected' : ''); ?>>
                                                        Live
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_publishable_key')); ?></label>
                                                <input type="text" class="form-control" name="stripePublishableKey"
                                                       placeholder="<?php echo e(__('labels.stripe_publishable_key_placeholder')); ?>"
                                                       value="<?php echo e($settings['stripePublishableKey'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_secret_key')); ?></label>
                                                <input type="text" class="form-control" name="stripeSecretKey"
                                                       placeholder="<?php echo e(__('labels.stripe_secret_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['stripeSecretKey'] ?? '****'), '****', 3, 8) : ($settings['stripeSecretKey'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_payment_endpoint_url')); ?></label>
                                                <input type="url" class="form-control"
                                                       name="stripePaymentEndpointUrl"
                                                       placeholder="<?php echo e(__('labels.stripe_payment_endpoint_url_placeholder')); ?>"
                                                       value="<?php echo e($settings['stripePaymentEndpointUrl'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_webhook_secret_key')); ?></label>
                                                <input type="text" class="form-control"
                                                       name="stripeWebhookSecretKey"
                                                       placeholder="<?php echo e(__('labels.stripe_webhook_secret_key_placeholder')); ?>"
                                                       value="<?php echo e($settings['stripeWebhookSecretKey'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.stripe_currency_code')); ?></label>
                                                <select class="form-select" name="stripeCurrencyCode">
                                                    <option value=""
                                                            disabled <?php echo e(!isset($settings['stripeCurrencyCode']) ? 'selected' : ''); ?>><?php echo e(__('labels.stripe_currency_code_placeholder')); ?></option>
                                                    <option
                                                        value="USD" <?php echo e(isset($settings['stripeCurrencyCode']) && $settings['stripeCurrencyCode'] === 'USD' ? 'selected' : ''); ?>>
                                                        USD
                                                    </option>
                                                    <option
                                                        value="EUR" <?php echo e(isset($settings['stripeCurrencyCode']) && $settings['stripeCurrencyCode'] === 'EUR' ? 'selected' : ''); ?>>
                                                        EUR
                                                    </option>
                                                    <option
                                                        value="GBP" <?php echo e(isset($settings['stripeCurrencyCode']) && $settings['stripeCurrencyCode'] === 'GBP' ? 'selected' : ''); ?>>
                                                        GBP
                                                    </option>
                                                    <!-- Add more currencies as per StripeCurrencyCodeEnum -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-razorpay">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.razorpay_payment')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_razorpay_payment')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="razorpayPayment" value="1" <?php echo e(isset($settings['razorpayPayment']) && $settings['razorpayPayment'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                        <div id="razorpayFields"
                                             style="<?php echo e(isset($settings['razorpayPayment']) && $settings['razorpayPayment'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.razorpay_payment_mode')); ?></label>
                                                <select class="form-select" name="razorpayPaymentMode">
                                                    <option value=""
                                                            disabled <?php echo e(!isset($settings['razorpayPaymentMode']) ? 'selected' : ''); ?>><?php echo e(__('labels.razorpay_payment_mode_placeholder')); ?></option>
                                                    <option
                                                        value="test" <?php echo e(isset($settings['razorpayPaymentMode']) && $settings['razorpayPaymentMode'] === 'test' ? 'selected' : ''); ?>>
                                                        Test
                                                    </option>
                                                    <option
                                                        value="live" <?php echo e(isset($settings['razorpayPaymentMode']) && $settings['razorpayPaymentMode'] === 'live' ? 'selected' : ''); ?>>
                                                        Live
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.razorpay_key_id')); ?></label>
                                                <input type="text" class="form-control" name="razorpayKeyId"
                                                       placeholder="<?php echo e(__('labels.razorpay_key_id_placeholder')); ?>"
                                                       value="<?php echo e($settings['razorpayKeyId'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.razorpay_secret_key')); ?></label>
                                                <input type="text" class="form-control" name="razorpaySecretKey"
                                                       placeholder="<?php echo e(__('labels.razorpay_secret_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['razorpaySecretKey'] ?? '****'), '****', 3, 8) : ($settings['razorpaySecretKey'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.razorpay_webhook_secret')); ?></label>
                                                <input type="text" class="form-control" name="razorpayWebhookSecret"
                                                       placeholder="<?php echo e(__('labels.razorpay_webhook_secret_placeholder')); ?>"
                                                       value="<?php echo e($settings['razorpayWebhookSecret'] ?? ''); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-paystack">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.paystack_payment')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_paystack_payment')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="paystackPayment" value="1" <?php echo e(isset($settings['paystackPayment']) && $settings['paystackPayment'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                        <div id="paystackFields"
                                             style="<?php echo e(isset($settings['paystackPayment']) && $settings['paystackPayment'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_payment_mode')); ?></label>
                                                <select class="form-select" name="paystackPaymentMode">
                                                    <option value=""
                                                            disabled <?php echo e(!isset($settings['paystackPaymentMode']) ? 'selected' : ''); ?>><?php echo e(__('labels.paystack_payment_mode_placeholder')); ?></option>
                                                    <option
                                                        value="test" <?php echo e(isset($settings['paystackPaymentMode']) && $settings['paystackPaymentMode'] === 'test' ? 'selected' : ''); ?>>
                                                        Test
                                                    </option>
                                                    <option
                                                        value="live" <?php echo e(isset($settings['paystackPaymentMode']) && $settings['paystackPaymentMode'] === 'live' ? 'selected' : ''); ?>>
                                                        Live
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_public_key')); ?></label>
                                                <input type="text" class="form-control" name="paystackPublicKey"
                                                       placeholder="<?php echo e(__('labels.paystack_public_key_placeholder')); ?>"
                                                       value="<?php echo e($settings['paystackPublicKey'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_secret_key')); ?></label>
                                                <input type="text" class="form-control" name="paystackSecretKey"
                                                       placeholder="<?php echo e(__('labels.paystack_secret_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['paystackSecretKey'] ?? '****'), '****', 3, 8) : ($settings['paystackSecretKey'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_webhook_secret')); ?></label>
                                                <input type="text" class="form-control" name="paystackWebhookSecret"
                                                       placeholder="<?php echo e(__('labels.paystack_webhook_secret_placeholder')); ?>"
                                                       value="<?php echo e($settings['paystackWebhookSecret'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_currency_code')); ?></label>
                                                <select class="form-select" name="paystackCurrencyCode">
                                                    <?php $__currentLoopData = PaystackCurrencyCodeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($value); ?>" <?php echo e(isset($settings['paystackCurrencyCode']) && $settings['paystackCurrencyCode'] === $value ? 'selected' : ''); ?>>
                                                            <?php echo e($value); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.paystack_webhook_url')); ?></label>
                                                <input type="text" class="form-control"
                                                       value="<?php echo e(url('api/paystack/webhook')); ?>"/>
                                                <small
                                                    class="form-text text-muted"><?php echo e(__('labels.paystack_webhook_url_description')); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-flutterwave">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.flutterwave_payment')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_flutterwave_payment')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="flutterwavePayment" value="1"
                                                               <?php echo e(isset($settings['flutterwavePayment']) && $settings['flutterwavePayment'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                            </label>
                                        </div>

                                        <div id="flutterwaveFields"
                                             style="<?php echo e(isset($settings['flutterwavePayment']) && $settings['flutterwavePayment'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_payment_mode')); ?></label>
                                                <select class="form-select" name="flutterwavePaymentMode">
                                                    <option value=""
                                                            disabled <?php echo e(!isset($settings['flutterwavePaymentMode']) ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.flutterwave_payment_mode_placeholder')); ?>

                                                    </option>
                                                    <option value="test"
                                                        <?php echo e(isset($settings['flutterwavePaymentMode']) && $settings['flutterwavePaymentMode'] === 'test' ? 'selected' : ''); ?>>
                                                        Test
                                                    </option>
                                                    <option value="live"
                                                        <?php echo e(isset($settings['flutterwavePaymentMode']) && $settings['flutterwavePaymentMode'] === 'live' ? 'selected' : ''); ?>>
                                                        Live
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_public_key')); ?></label>
                                                <input type="text" class="form-control" name="flutterwavePublicKey"
                                                       placeholder="<?php echo e(__('labels.flutterwave_public_key_placeholder')); ?>"
                                                       value="<?php echo e($settings['flutterwavePublicKey'] ?? ''); ?>"/>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_secret_key')); ?></label>
                                                <input type="text" class="form-control" name="flutterwaveSecretKey"
                                                       placeholder="<?php echo e(__('labels.flutterwave_secret_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['flutterwaveSecretKey'] ?? '****'), '****', 3, 8) : ($settings['flutterwaveSecretKey'] ?? '')); ?>"/>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_encryption_key')); ?></label>
                                                <input type="text" class="form-control" name="flutterwaveEncryptionKey"
                                                       placeholder="<?php echo e(__('labels.flutterwave_encryption_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['flutterwaveEncryptionKey'] ?? '****'), '****', 3, 8) : ($settings['flutterwaveEncryptionKey'] ?? '')); ?>"/>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_webhook_secret')); ?></label>
                                                <input type="text" class="form-control" name="flutterwaveWebhookSecret"
                                                       placeholder="<?php echo e(__('labels.flutterwave_webhook_secret_placeholder')); ?>"
                                                       value="<?php echo e($settings['flutterwaveWebhookSecret'] ?? ''); ?>"/>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_currency_code')); ?></label>
                                                <select class="form-select" name="flutterwaveCurrencyCode">
                                                    <?php $__currentLoopData = FlutterwaveCurrencyCodeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($value); ?>"
                                                            <?php echo e(isset($settings['flutterwaveCurrencyCode']) && $settings['flutterwaveCurrencyCode'] === $value ? 'selected' : ''); ?>>
                                                            <?php echo e(__('labels.currency_data.' . $value)); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.flutterwave_webhook_url')); ?></label>
                                                <input type="text" class="form-control"
                                                       value="<?php echo e(url('api/flutterwave/webhook')); ?>" readonly/>
                                                <small class="form-text text-muted">
                                                    <?php echo e(__('labels.flutterwave_webhook_url_description')); ?>

                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-wallet">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.wallet_payment')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_wallet_payment')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="walletPayment"
                                                               value="1" <?php echo e(isset($settings['walletPayment']) && $settings['walletPayment'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                                <small
                                                    class="form-text text-muted"><?php echo e(__('labels.wallet_payment_description')); ?></small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-cod">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.cash_on_delivery')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_cash_on_delivery')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="<?php echo e(PaymentTypeEnum::COD()); ?>"
                                                               value="1" <?php echo e(isset($settings['cod']) && $settings['cod'] ? 'checked' : ''); ?> />
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'payment'])): ?>
                                            <button type="submit"
                                                    class="btn btn-primary ms-auto"><?php echo e(__('labels.submit')); ?></button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PAGE BODY -->
    <script>
        const stripeToggle = document.querySelector('input[name="stripePayment"]');
        const stripeFields = document.getElementById('stripeFields');
        const razorpayToggle = document.querySelector('input[name="razorpayPayment"]');
        const razorpayFields = document.getElementById('razorpayFields');
        const paystackToggle = document.querySelector('input[name="paystackPayment"]');
        const paystackFields = document.getElementById('paystackFields');
        const bankToggle = document.querySelector('input[name="directBankTransfer"]');
        const bankFields = document.getElementById('bankFields');
        const flutterwaveToggle = document.querySelector('input[name="flutterwavePayment"]');
        const flutterwaveFields = document.getElementById('flutterwaveFields');

        const toggleStripeFields = () => {
            stripeFields.style.display = stripeToggle.checked ? 'block' : 'none';
        };
        const toggleRazorpayFields = () => {
            razorpayFields.style.display = razorpayToggle.checked ? 'block' : 'none';
        };
        const togglePaystackFields = () => {
            paystackFields.style.display = paystackToggle.checked ? 'block' : 'none';
        };
        const toggleFlutterwaveFields = () => {
            flutterwaveFields.style.display = flutterwaveToggle.checked ? 'block' : 'none';
        };
        const toggleBankFields = () => {
            bankFields.style.display = bankToggle.checked ? 'block' : 'none';
        };

        stripeToggle.addEventListener('change', toggleStripeFields);
        razorpayToggle.addEventListener('change', toggleRazorpayFields);
        paystackToggle.addEventListener('change', togglePaystackFields);
        flutterwaveToggle.addEventListener('change', toggleFlutterwaveFields);
        bankToggle.addEventListener('change', toggleBankFields);
        toggleStripeFields();
        toggleRazorpayFields();
        togglePaystackFields();
        toggleBankFields();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['payment']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/payment.blade.php ENDPATH**/ ?>