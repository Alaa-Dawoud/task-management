@extends('admin.layouts.master')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        {{ __('Package :') }} {{$membership->title}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

			<div class="row">
				<div class="col-12 col-md-4">
					<div class="col-12">
						<label class="form-label">Package Image</label>
						<div class="inline-inputs mb-3">
							<label class="image-input admin-avatar">
								<img src="{{asset('storage/' . $membership->image)}}" class="img-input-preview h-auto w-auto" alt="">
							</label>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12 mb-4">
									<div class="form-group">
										<label class="form-label">Package Title</label>
										<div class="datagrid-content">{{$membership->title}}</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb-4">
									<div class="form-group">
										<label class="form-label">Package Price</label>
										<div class="datagrid-content">{{$membership->price}}</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb-4">
									<div class="form-group">
										<label class="form-label">Package Price After Discount</label>
										<div class="datagrid-content">{{$membership->price_after_discount}}</div>
									</div>
								</div>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Package Active Status</label>
								<div class="datagrid-content">
									@if($membership->active)
										Package is active
									@else
										Package is not active
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
@endsection
