@extends('layouts.admin')

@section('content')
<div class="container m-4">
    <div class="row justify-content-center">

        <!--begin::Tables Widget 13-->
							<div class="card mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Your Links</span>
										<span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span>
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body py-3">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bolder text-muted">
													<th class="w-25px">
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
														</div>
													</th>
													<th class="min-w-150px">Link ID</th>
													<th class="min-w-140px">Link</th>
													<th class="min-w-120px">Visits</th>
													<th class="min-w-120px">Creation Date</th>
													<th class="min-w-120px">Status</th>
													<th class="min-w-100px text-end">Actions</th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
                                                @foreach ($links as $link)
												<tr>
                                                    <td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input widget-13-check" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$link->id}}</a>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{$link->shortened_link}}</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">{{$link->origional_link}}</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{$link->visits_count}}</a>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{$link->created_at}}</a>
													</td>
													<td>
														<span class="badge badge-light-success">Approved</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<i class="bi bi-toggle-on"></i>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<i class="bi bi-pencil-fill"></i>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<i class="bi bi-trash-fill"></i>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
                                                @endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--begin::Body-->
							</div>
							<!--end::Tables Widget 13-->
        
    </div>
    </div>
</div>
@endsection
