<?php $__env->startSection('title', __('labels.dashboard')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.dashboard');
        $page_pretitle = __('labels.seller') . " " . __('labels.dashboard');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => '']
    ];
?>

<?php $__env->startSection('seller-content'); ?>
    <?php if($viewPermission ?? false): ?>
        <div class="row row-deck row-cards">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-12 col-sm d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="h2 text-capitalize">Welcome back, <?php echo e($user->name ?? "Power"); ?></h3>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="subheader"><?php echo e(__('labels.sales')); ?></div>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-secondary sales-period" href="#"
                                                   data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false" data-period="30"
                                                ><?php echo e(__('labels.last_30_days')); ?></a
                                                >
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"
                                                       data-period="7"><?php echo e(__('labels.last_7_days')); ?></a>
                                                    <a class="dropdown-item active" href="#"
                                                       data-period="30"><?php echo e(__('labels.last_30_days')); ?></a>
                                                    <a class="dropdown-item" href="#"
                                                       data-period="90"><?php echo e(__('labels.last_3_months')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h1 mb-3"><?php echo e($conversionRateData['rate'] ?? 0); ?>%</div>
                                    <div class="d-flex mb-2">
                                        <div><?php echo e(__('labels.conversion_rate')); ?></div>
                                        <div class="ms-auto">
                        <span
                            class="text-<?php echo e($conversionRateData['is_increase'] ? 'green' : 'red'); ?> d-inline-flex align-items-center lh-1">
                          <?php echo e(abs($conversionRateData['percentage_change'])); ?>%
                            <!-- Download SVG icon from http://tabler.io/icons/icon/trending-up or trending-down -->
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="icon ms-1 icon-2"
                          >
                            <?php if($conversionRateData['is_increase']): ?>
                                  <path d="M3 17l6 -6l4 4l8 -8"/>
                                  <path d="M14 7l7 0l0 7"/>
                              <?php else: ?>
                                  <path d="M3 7l6 6l4 -4l8 8"/>
                                  <path d="M21 7l0 7l-7 0"/>
                              <?php endif; ?>
                          </svg>
                        </span>
                                        </div>
                                    </div>
                                    <div class="text-secondary mb-2">
                                        <?php echo e($conversionRateData['delivered_orders']); ?> <?php echo e(__('labels.delivered_out_of_total_orders')); ?>

                                        <?php echo e($conversionRateData['total_orders']); ?>

                                    </div>
                                    <div class="progress progress-sm">
                                        <div
                                            class="progress-bar bg-primary"
                                            style="width: <?php echo e($conversionRateData['rate']); ?>%"
                                            role="progressbar"
                                            aria-valuenow="<?php echo e($conversionRateData['rate']); ?>"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            aria-label="<?php echo e($conversionRateData['rate']); ?>% <?php echo e(__('labels.complete')); ?>"
                                        >
                                        <span
                                            class="visually-hidden"><?php echo e($conversionRateData['rate']); ?>% <?php echo e(__('labels.complete')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto d-flex justify-content-center">
                                <img src="<?php echo e(asset("assets/theme/img/dashboard.svg")); ?>" alt="Sales Illustration"
                                     class="img-fluid"
                                     style="max-height: 200px;" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader"><?php echo e(__('labels.revenue')); ?></div>
                            <div class="ms-auto lh-1">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-secondary revenue-period" href="#"
                                       data-bs-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false" data-period="30"
                                    ><?php echo e(__('labels.last_30_days')); ?></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"
                                           data-period="7"><?php echo e(__('labels.last_7_days')); ?></a>
                                        <a class="dropdown-item active" href="#"
                                           data-period="30"><?php echo e(__('labels.last_30_days')); ?></a>
                                        <a class="dropdown-item" href="#"
                                           data-period="90"><?php echo e(__('labels.last_3_months')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-0 me-2" id="revenue-total"><?php echo e($revenueData['formatted_total']); ?></div>
                            <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1" id="revenue-days">
                          <?php echo e(count($revenueData['daily'])); ?> <?php echo e(__('labels.days')); ?>

                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="icon ms-1 icon-2"
                          >
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"/>
                            <path d="M16 3v4"/>
                            <path d="M8 3v4"/>
                            <path d="M4 11h16"/>
                            <path d="M11 15h1"/>
                            <path d="M12 15v3"/>
                          </svg>
                        </span>
                            </div>
                        </div>
                    </div>
                    <div id="chart-revenue-bg" class="rounded-bottom chart-sm"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader"><?php echo e(__('labels.wallet_balance')); ?></div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <div class="h1 mb-3 me-2"><?php echo e($currencyService->format($walletBalance)); ?></div>
                            <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                          <?php echo e($currencyService->format($blockedBalance)); ?> <?php echo e(__('labels.blocked')); ?>

                            <!-- Download SVG icon from http://tabler.io/icons/icon/minus -->
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="icon ms-1 icon-2"
                          >
                            <path d="M5 12l14 0"/>
                          </svg>
                        </span>
                            </div>
                        </div>
                        <div id="chart-new-clients" class="chart-sm"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <a href="<?php echo e(route('seller.commissions.index')); ?>"
                               class="card-body text-decoration-none">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                            <span class="bg-primary text-white avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/currency-dollar -->
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="icon icon-1"
                              >
                                <path
                                    d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"/>
                                <path d="M12 3v3m0 12v3"/></svg
                              ></span>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="font-weight-medium"><?php echo e($salesData['total_sales']); ?> <?php echo e(__('labels.sales')); ?></div>
                                        <div class="text-secondary"><?php echo e($salesData['unsettled_payments']); ?>

                                            <?php echo e($salesData['unsettled_payments'] != 1 ? __('labels.unsettled_payments') : __('labels.unsettled_payment')); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <a href="<?php echo e(route('seller.orders.index')); ?>"
                               class="card-body text-decoration-none">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                            <span class="bg-green text-white avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/shopping-cart -->
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="icon icon-1"
                              >
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                                <path d="M17 17h-11v-14h-2"/>
                                <path d="M6 5l14 1l-1 7h-13"/></svg
                              ></span>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="font-weight-medium"><?php echo e($totalOrders); ?> <?php echo e(__('labels.orders')); ?></div>
                                        <div
                                            class="text-secondary"><?php echo e($deliveredOrders); ?> <?php echo e(__('labels.delivered')); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                            <span class="bg-yellow text-white avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="icon icon-1"
                              >
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/></svg
                              ></span>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="font-weight-medium"><?php echo e($recentFeedback['average_rating']); ?> <?php echo e(__('labels.rating')); ?></div>
                                        <div
                                            class="text-secondary"><?php echo e($recentFeedback['total_reviews']); ?> <?php echo e(__('labels.reviews')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <a href="<?php echo e(route('seller.products.index')); ?>"
                               class="card-body text-decoration-none">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                            <span class="bg-azure text-white avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/package -->
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="icon icon-1"
                              >
                                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"/>
                                <path d="M12 12l8 -4.5"/>
                                <path d="M12 12l0 9"/>
                                <path d="M12 12l-8 -4.5"/></svg
                              ></span>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="font-weight-medium"><?php echo e($productStats['total_products']); ?> <?php echo e(__('labels.products')); ?></div>
                                        <div
                                            class="text-secondary"><?php echo e($productStats['recent_products']); ?> <?php echo e(__('labels.new_this_week')); ?>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="card-title mb-0"><?php echo e(__('labels.store_revenue')); ?></h3>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-secondary store-revenue-period" href="#"
                                       data-bs-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false" data-period="30"
                                    ><?php echo e(__('labels.last_30_days')); ?></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"
                                           data-period="7"><?php echo e(__('labels.last_7_days')); ?></a>
                                        <a class="dropdown-item active" href="#"
                                           data-period="30"><?php echo e(__('labels.last_30_days')); ?></a>
                                        <a class="dropdown-item" href="#"
                                           data-period="90"><?php echo e(__('labels.last_3_months')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart-stores-revenue" class="chart-lg"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo e(__('labels.store_wise_order_distribution')); ?></h3>
                        <div id="chart-campaigns"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <div class="card-title"><?php echo e(__('labels.recent_orders')); ?></div>
                            <div class="ms-auto">
                                <a href="<?php echo e(route('seller.orders.index')); ?>" class="btn btn-primary">
                                    <?php echo e(__('labels.view_all_orders')); ?>

                                </a>
                                <button class="btn btn-outline-primary" id="refresh">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row w-full">
                            <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'orders-table','columns' => $orderColumns,'route' => ''.e(route('seller.orders.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Datatable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $attributes = $__attributesOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__attributesOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $component = $__componentOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__componentOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="card-title"><?php echo e(__('labels.daily_orders_history')); ?></div>
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="chart-sparkline chart-sparkline-square"
                                         id="sparkline-activity"></div>
                                </div>
                                <div class="col">
                                    <div><?php echo e(__('labels.todays_earning')); ?>

                                        : <?php echo e($todaysEarning['formatted_today']); ?></div>
                                    <div class="text-<?php echo e($todaysEarning['is_increase'] ? 'green' : 'red'); ?>">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/trending-up or trending-down -->
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-inline <?php echo e($todaysEarning['is_increase'] ? 'text-green' : 'text-red'); ?> icon-3"
                                        >
                                            <?php if($todaysEarning['is_increase']): ?>
                                                <path d="M3 17l6 -6l4 4l8 -8"/>
                                                <path d="M14 7l7 0l0 7"/>
                                            <?php else: ?>
                                                <path d="M3 7l6 6l4 -4l8 8"/>
                                                <path d="M21 7l0 7l-7 0"/>
                                            <?php endif; ?>
                                        </svg>
                                        <?php echo e(abs($todaysEarning['percentage_change'])); ?>

                                        % <?php echo e($todaysEarning['is_increase'] ? __('labels.more') : __('labels.less')); ?> <?php echo e(__('labels.than_yesterday')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart-development-activity"></div>
                    </div>
                    <div class="card-table table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                            <tr>
                                <th><?php echo e(__('labels.customer')); ?></th>
                                <th><?php echo e(__('labels.feedback')); ?></th>
                                <th><?php echo e(__('labels.rating')); ?></th>
                                <th><?php echo e(__('labels.date')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($recentFeedback['items']) > 0): ?>
                                <?php $__currentLoopData = $recentFeedback['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="w-1">
                                    <span class="avatar avatar-sm">
                                        <?php echo e(substr($feedback['user_name'], 0, 1)); ?>

                                    </span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="font-weight-medium"><?php echo e($feedback['title']); ?></div>
                                            <div
                                                class="text-truncate text-secondary"><?php echo e($feedback['description']); ?></div>
                                        </td>
                                        <td>
                                            <div class="d-flex pointer-events-none">
                                                <select id="rating-<?php echo e($loop->index); ?>" class="rating-stars"
                                                        data-rating="<?php echo e($feedback['rating']); ?>">
                                                    <option value=""><?php echo e(__('labels.select_a_rating')); ?></option>
                                                    <option value="5" <?php echo e($feedback['rating'] == 5 ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.excellent')); ?>

                                                    </option>
                                                    <option value="4" <?php echo e($feedback['rating'] == 4 ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.very_good')); ?>

                                                    </option>
                                                    <option value="3" <?php echo e($feedback['rating'] == 3 ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.average')); ?>

                                                    </option>
                                                    <option value="2" <?php echo e($feedback['rating'] == 2 ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.poor')); ?>

                                                    </option>
                                                    <option value="1" <?php echo e($feedback['rating'] == 1 ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.terrible')); ?>

                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-secondary"><?php echo e($feedback['date']); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center"><?php echo e(__('labels.no_feedback_available')); ?></td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-secondary">
                                <?php echo e(__('labels.total_reviews')); ?>: <span
                                    class="font-weight-medium"><?php echo e($recentFeedback['total_reviews']); ?></span>
                                | <?php echo e(__('labels.average_rating')); ?>: <span
                                    class="font-weight-medium"><?php echo e($recentFeedback['average_rating']); ?></span>
                                <span class="ml-2 pointer-events-none">
                                <select id="rating-average" class="rating-stars"
                                        data-rating="<?php echo e($recentFeedback['average_rating']); ?>">
                                    <option value=""><?php echo e(__('labels.select_a_rating')); ?></option>
                                    <option
                                        value="5" <?php echo e(round($recentFeedback['average_rating']) == 5 ? 'selected' : ''); ?>><?php echo e(__('labels.excellent')); ?></option>
                                    <option
                                        value="4" <?php echo e(round($recentFeedback['average_rating']) == 4 ? 'selected' : ''); ?>><?php echo e(__('labels.very_good')); ?></option>
                                    <option
                                        value="3" <?php echo e(round($recentFeedback['average_rating']) == 3 ? 'selected' : ''); ?>><?php echo e(__('labels.average')); ?></option>
                                    <option
                                        value="2" <?php echo e(round($recentFeedback['average_rating']) == 2 ? 'selected' : ''); ?>><?php echo e(__('labels.poor')); ?></option>
                                    <option
                                        value="1" <?php echo e(round($recentFeedback['average_rating']) == 1 ? 'selected' : ''); ?>><?php echo e(__('labels.terrible')); ?></option>
                                </select>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('seller.orders.partials.order-accept-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('seller.orders.partials.order-preparing-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('seller.orders.partials.order-reject-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/star-rating.js/dist/star-rating.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/vendor/apexcharts/dist/apexcharts.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/vendor/star-rating.js/dist/star-rating.min.js')); ?>" defer></script>
    <script src="<?php echo e(hyperAsset('assets/js/order.js')); ?>" defer></script>
    <script>
        // Pass dashboard data to JavaScript
        var dashboardData = {
            monthlyRevenueData: <?php echo json_encode($monthlyRevenueData, 15, 512) ?>,
            storeOrderTotals: <?php echo json_encode($storeOrderTotals, 15, 512) ?>,
            storeRevenueData: <?php echo json_encode($storeRevenueData, 15, 512) ?>,
            dailyPurchaseHistory: <?php echo json_encode($dailyPurchaseHistory, 15, 512) ?>,
            todaysEarning: <?php echo json_encode($todaysEarning, 15, 512) ?>
        };
    </script>
    <script src="<?php echo e(asset('assets/js/seller-dashboard.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.seller.app', ['page' => $menuSeller['dashboard']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/seller/dashboard.blade.php ENDPATH**/ ?>