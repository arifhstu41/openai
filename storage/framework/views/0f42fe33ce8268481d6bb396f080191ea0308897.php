

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER-->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Admin Dashboard')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Dashboard')); ?></a></li>
			</ol>
		</div>
	</div>
	<!--END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total New Users')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['new_users_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="users_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 mt-m1"><i class="fa-solid fa-user-plus"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['new_users_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['total_new_users'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total New Subscribers')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['new_subscribers_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="subscribers_change"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="text-info fs-40 mt-m1"><i class="fa-solid fa-user-visor"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['new_subscribers_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['total_new_subscribers'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total Income')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_current_month'][0]['data'], 2)); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="income_change"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="text-success fs-40 mt-m1"><i class="fa-solid fa-badge-dollar"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_past_month'][0]['data'], 2)); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['total_income'][0]['data'], 2)); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total Estimated Spending')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">$<?php echo e(number_format((float)$total_data_monthly['spending_current_month'], 3, '.', '')); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span class="fs-12" id="spending_change"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="text-danger fs-40 mt-m1"><i class="fa-solid fa-circle-dollar-to-slot"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Last Month')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i>$<?php echo e(number_format((float)$total_data_monthly['spending_past_month'], 3, '.', '')); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Current Year')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i>$<?php echo e(number_format((float)$total_data_yearly['total_spending'], 3, '.', '')); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Words Generated')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['words_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="words_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 text-primary mt-m1"><i class="fa-solid fa-cloud-word"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['words_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['words_generated'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Images Generated')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['images_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="images_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 mt-m1"><i class="fa-solid fa-image-landscape"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['images_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['images_generated'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Documents Created')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['contents_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="contents_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 text-yellow mt-m1"><i class="fa-solid fa-folder-grid"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['contents_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['contents_generated'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Transactions')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['transactions_current_month'][0]['data'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="transactions_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 text-primary mt-m1"><i class="fa-solid fa-file-invoice-dollar"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['transactions_past_month'][0]['data'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['transactions_generated'][0]['data'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-6 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-money-check-dollar-pen mr-4 text-info"></i><?php echo e(__('Finance Overview')); ?></h3>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div>
								<h3 class="card-title fs-24 font-weight-800"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['total_income'][0]['data'], 2, '.', '')); ?></h3>
							</div>
							<div class="mb-3">
								<span class="fs-12 text-muted"><?php echo e(__('Total Earnings Current Year')); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-total-income" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-users-viewfinder mr-4 text-info"></i><?php echo e(__('Total New Users')); ?></h3>
					</div>
					<div>
						<h3 class="card-title fs-24 font-weight-800"><?php echo e(number_format($total_data_yearly['total_new_users'])); ?></h3>
					</div>
					<div class="mb-3">
						<span class="fs-12 text-muted"><?php echo e(__('Total New Registered Users Current Year')); ?></span>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-total-users-year" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-money-check-pen mr-4 text-info"></i><?php echo e(__('Latest Registrations')); ?></h3>
						<a href="<?php echo e(route('admin.user.list')); ?>" class="" id="return-sound" data-tippy-content="<?php echo e(__('View All Registered Users')); ?>."><i class="fa-solid fa-bring-front"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<table class="table" id="database-backup">
								<thead>
									<tr role="row">
									<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('User')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Group')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Status')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Registered On')); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
										<td><?php if($data->profile_photo_path): ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" src="<?php echo e($data->profile_photo_path); ?>"></div>
													<div class="widget-user-name"><span class="font-weight-bold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
											<?php else: ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" class="rounded-circle" src="<?php echo e(URL::asset('img/users/avatar.png')); ?>"></div>
													<div class="widget-user-name"><span class="font-weight-bold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
										<?php endif; ?></td>
										<td><span class="cell-box user-group-<?php echo e($data->group); ?>"><?php echo e(ucfirst($data->group)); ?></span></td>
										<td><span class="cell-box user-<?php echo e($data->status); ?>"><?php echo e(ucfirst($data->status)); ?></span></td>
										<td><span class="font-weight-bold"><?php echo e(date_format($data->created_at, 'd M Y')); ?></span><br><span><?php echo e(date_format($data->created_at, 'H:i A')); ?></span></td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-money-bill-transfer mr-4 text-info"></i><?php echo e(__('Latest Transactions')); ?></h3>
						<a href="<?php echo e(route('admin.finance.transactions')); ?>" class="" id="return-sound" data-tippy-content="<?php echo e(__('View All Transactions')); ?>."><i class="fa-solid fa-bring-front"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<table class="table" id="database-backup">
								<thead>
									<tr role="row">
									<th class="fs-12 font-weight-700 border-top-0" width="10%"><?php echo e(__('Paid By')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0" width="10%"><?php echo e(__('Status')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0" width="10%"><?php echo e(__('Total')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0" width="10%"><?php echo e(__('Gateway')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0" width="10%"><?php echo e(__('Paid On')); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
										<td><?php if($data->profile_photo_path): ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" src="<?php echo e($data->profile_photo_path); ?>"></div>
													<div class="widget-user-name"><span class="font-weight-bold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
											<?php else: ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" class="rounded-circle" src="<?php echo e(URL::asset('img/users/avatar.png')); ?>"></div>
													<div class="widget-user-name"><span class="font-weight-bold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
										<?php endif; ?></td>
										<td><span class="cell-box payment-<?php echo e(strtolower($data->status)); ?>"><?php echo e(ucfirst($data->status)); ?></span></td>
										<td><span class="font-weight-bold"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e($data->price); ?></span></td>
										<td><?php if($data->gateway == 'PayPal'): ?>
												<img alt="PayPal Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/paypal.svg')); ?>">
											<?php elseif($data->gateway == 'Stripe'): ?>
												<img alt="Stripe Gateway" class="w-40" src="<?php echo e(URL::asset('img/payments/stripe.svg')); ?>">
											<?php elseif($data->gateway == 'Razorpay'): ?>
												<img alt="Razorpay Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/razorpay.svg')); ?>"> 
											<?php elseif($data->gateway == 'Paystack'): ?>
												<img alt="Paystack Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/paystack.svg')); ?>">	
											<?php elseif($data->gateway == 'BankTransfer'): ?>
												<img alt="Paystack Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/bank-transfer.png')); ?>">
											<?php elseif($data->gateway == 'Coinbase'): ?>
												<img alt="Coinbase Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/coinbase.svg')); ?>">
											<?php elseif($data->gateway == 'Mollie'): ?>
												<img alt="Mollie Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/mollie.svg')); ?>">
											<?php elseif($data->gateway == 'Braintree'): ?>
												<img alt="Braintree Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/braintree.svg')); ?>">
											<?php elseif($data->gateway == 'Midtrans'): ?>
												<img alt="Midtrans Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/midtrans.png')); ?>">
											<?php elseif($data->gateway == 'Flutterwave'): ?>
												<img alt="Flutterwave Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/flutterwave.svg')); ?>">
											<?php elseif($data->gateway == 'Paddle'): ?>
												<img alt="Paddle Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/paddle.svg')); ?>">
											<?php elseif($data->gateway == 'Yookassa'): ?>
												<img alt="Yookassa Gateway" class="w-60" src="<?php echo e(URL::asset('img/payments/yookassa.svg')); ?>">
											<?php else: ?>
												<span class="font-weight-bold fs-12"><?php echo e(__('Free')); ?></span>
										<?php endif; ?>
										</td>
										<td><span class="font-weight-bold"><?php echo e(date_format($data->created_at, 'd M Y')); ?></span><br><span><?php echo e(date_format($data->created_at, 'H:i A')); ?></span></td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-header d-inline border-0">
					<div>
						<h3 class="card-title fs-16 mt-3 mb-4"><i class="fa-solid fa-users mr-4 text-info"></i><?php echo e(__('New Registered Users')); ?></h3>
					</div>
					<div class="mb-3">
						<span class="fs-12 text-muted"><?php echo e(__('Registered Users Current Month')); ?></span>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-total-users-month" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Chart JS -->
	<script src="<?php echo e(URL::asset('plugins/chart/chart.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function() {

			"use strict";

			// Total New User Analysis Chart
			var userMonthlyData = JSON.parse(`<?php echo $chart_data['monthly_new_users']; ?>`);
			var userMonthlyDataset = Object.values(userMonthlyData);
			var ctx = document.getElementById('chart-total-users-month');
			let delayed1;

			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
					datasets: [{
						label: '<?php echo e(__('New Registered Users')); ?> ',
						data: userMonthlyDataset,
						backgroundColor: '#007bff',
						borderWidth: 1,
						borderRadius: 20,
						barPercentage: 0.7,
						fill: true
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					animation: {
						onComplete: () => {
							delayed1 = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed1) {
								delay = context.dataIndex * 50 + context.datasetIndex * 5;
							}
							return delay;
						},
					},
					scales: {
						y: {
							stacked: true,
							ticks: {
								beginAtZero: true,
								font: {
									size: 10
								},
								stepSize: 40,
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						},
						x: {
							stacked: true,
							ticks: {
								font: {
									size: 10
								}
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						}
					},
					plugins: {
						tooltip: {
							cornerRadius: 10,
							xPadding: 10,
							yPadding: 10,
							backgroundColor: '#000000',
							titleColor: '#FF9D00',
							yAlign: 'bottom',
							xAlign: 'center',
						},
						legend: {
							position: 'bottom',
							labels: {
								boxWidth: 10,
								font: {
									size: 10
								}
							}
						}
					}
				}
			});


			// Total New User Analysis Chart
			var userYearlyData = JSON.parse(`<?php echo $chart_data['total_new_users']; ?>`);
			var userYearlyDataset = Object.values(userYearlyData);
			var ctx = document.getElementById('chart-total-users-year');
			let delayed3;

			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
					datasets: [{
						label: '<?php echo e(__('Total New Registered Users')); ?> ',
						data: userYearlyDataset,
						backgroundColor: '#1e1e2d',
						borderWidth: 1,
						borderRadius: 20,
						barPercentage: 0.8,
						fill: true
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					animation: {
						onComplete: () => {
							delayed3 = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed3) {
								delay = context.dataIndex * 50 + context.datasetIndex * 5;
							}
							return delay;
						},
					},
					scales: {
						y: {
							stacked: true,
							ticks: {
								beginAtZero: true,
								font: {
									size: 10
								},
								stepSize: 40,
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						},
						x: {
							stacked: true,
							ticks: {
								font: {
									size: 10
								}
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						}
					},
					plugins: {
						tooltip: {
							cornerRadius: 10,
							xPadding: 10,
							yPadding: 10,
							backgroundColor: '#000000',
							titleColor: '#FF9D00',
							yAlign: 'bottom',
							xAlign: 'center',
						},
						legend: {
							position: 'bottom',
							labels: {
								boxWidth: 10,
								font: {
									size: 10
								}
							}
						}
					}
				}
			});


			// Total Income Chart
			var incomeData = JSON.parse(`<?php echo $chart_data['total_income']; ?>`);
			var incomeDataset = Object.values(incomeData);
			var ctx = document.getElementById('chart-total-income');
			let delayed;

			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
					datasets: [{
						label: '<?php echo e(__('Total Income')); ?> (<?php echo e(config('payment.default_system_currency')); ?>) ',
						data: incomeDataset,
						backgroundColor: '#FF9D00',
						borderWidth: 1,
						borderRadius: 20,
						barPercentage: 0.8,
						fill: true
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					animation: {
						onComplete: () => {
							delayed = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed) {
								delay = context.dataIndex * 50 + context.datasetIndex * 5;
							}
							return delay;
						},
					},
					scales: {
						y: {
							stacked: true,
							ticks: {
								beginAtZero: true,
								font: {
									size: 10
								},
								stepSize: 40,
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						},
						x: {
							stacked: true,
							ticks: {
								font: {
									size: 10
								}
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						}
					},
					plugins: {
						tooltip: {
							cornerRadius: 10,
							xPadding: 10,
							yPadding: 10,
							backgroundColor: '#000000',
							titleColor: '#FF9D00',
							yAlign: 'bottom',
							xAlign: 'center',
						},
						legend: {
							position: 'bottom',
							labels: {
								boxWidth: 10,
								font: {
									size: 10
								}
							}
						}
					}
				}
			});


			// Percentage Difference First Row
			var users_current_month = JSON.parse(`<?php echo $percentage['users_current']; ?>`);	
			var users_past_month = JSON.parse(`<?php echo $percentage['users_past']; ?>`);
			var subscribers_current_month = JSON.parse(`<?php echo $percentage['subscribers_current']; ?>`);	
			var subscribers_past_month = JSON.parse(`<?php echo $percentage['subscribers_past']; ?>`);
			var income_current_month = JSON.parse(`<?php echo $percentage['income_current']; ?>`);	
			var income_past_month = JSON.parse(`<?php echo $percentage['income_past']; ?>`);
			var spending_current_month = JSON.parse(`<?php echo $percentage['spending_current']; ?>`);	
			var spending_past_month = JSON.parse(`<?php echo $percentage['spending_past']; ?>`);
			(income_current_month[0]['data'] == null) ? income_current_month = 0 : income_current_month = income_current_month[0]['data'];
			(income_past_month[0]['data'] == null) ? income_past_month = 0 : income_past_month = income_past_month[0]['data'];

			var words_current_month = JSON.parse(`<?php echo $percentage['words_current']; ?>`);
			var words_past_month = JSON.parse(`<?php echo $percentage['words_past']; ?>`);
			var images_current_month = JSON.parse(`<?php echo $percentage['images_current']; ?>`);
			var images_past_month = JSON.parse(`<?php echo $percentage['images_past']; ?>`);
			var contents_current_month = JSON.parse(`<?php echo $percentage['contents_current']; ?>`);
			var contents_past_month = JSON.parse(`<?php echo $percentage['contents_past']; ?>`);
			var transactions_current_month = JSON.parse(`<?php echo $percentage['transactions_current']; ?>`);
			var transactions_past_month = JSON.parse(`<?php echo $percentage['transactions_past']; ?>`);

			var users_current_total = parseInt(users_current_month);
			var users_past_total = parseInt(users_past_month);
			var subscribers_current_total = parseInt(subscribers_current_month);
			var subscribers_past_total = parseInt(subscribers_past_month);
			var income_current_total = parseInt(income_current_month);
			var income_past_total = parseInt(income_past_month);
			var spending_current_total = parseInt(spending_current_month);
			var spending_past_total = parseInt(spending_past_month);

			var words_current_total = parseInt(words_current_month);
			var words_past_total = parseInt(words_past_month);
			var images_current_total = parseInt(images_current_month);
			var images_past_total = parseInt(images_past_month);
			var contents_current_total = parseInt(contents_current_month);
			var contents_past_total = parseInt(contents_past_month);
			var transactions_current_total = parseInt(transactions_current_month);
			var transactions_past_total = parseInt(transactions_past_month);

			var users_change = mainPercentageDifference(users_past_month, users_current_month);
			var subscribers_change = mainPercentageDifference(subscribers_past_month, subscribers_current_month);
			var income_change = mainPercentageDifference(income_past_month, income_current_month);
			var spending_change = mainPercentageDifference(spending_past_month, spending_current_month);

			var words_change = mainPercentageDifference(words_past_month, words_current_month);
			var images_change = mainPercentageDifference(images_past_month, images_current_month);
			var contents_change = mainPercentageDifference(contents_past_month, contents_current_month);
			var transactions_change = mainPercentageDifference(transactions_past_month, transactions_current_month);
			
			document.getElementById('users_change').innerHTML = users_change;
			document.getElementById('subscribers_change').innerHTML = subscribers_change;
			document.getElementById('income_change').innerHTML = income_change;
			document.getElementById('spending_change').innerHTML = spending_change;
			document.getElementById('words_change').innerHTML = words_change;
			document.getElementById('images_change').innerHTML = images_change;
			document.getElementById('contents_change').innerHTML = contents_change;
			document.getElementById('transactions_change').innerHTML = transactions_change;

			function mainPercentageDifference(past, current) {
				if (past == 0) {
					var change = (current == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-success"><i class="fa fa-caret-up"></i> 100%</span>';   					
					return change;
				} else if(current == 0) {
					var change = (past == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-danger"><i class="fa fa-caret-down"></i> 100%</span>';
					return change;
				} else if(past == current) {
					var change = '<span class="text-muted"> 0%</span>';
					return change; 
				}

				var difference = current - past;
    			var difference_value, result;

				var totalDifference = Math.abs(difference);
				var change = (totalDifference/past) * 100;				

				if (difference > 0) { result = '<span class="text-success"><i class="fa fa-caret-up"></i> ' + change.toFixed(1) + '%</span>'; }
				else if(difference < 0) {result = '<span class="text-danger"><i class="fa fa-caret-down"></i> ' + change.toFixed(1) + '%</span>'; }
				else { difference_value = '<span class="text-muted"> ' + change.toFixed(1) + '%</span>'; }				

				return result;
			}

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>