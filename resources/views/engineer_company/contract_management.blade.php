@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.Contract Management') }}
                                    </h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center">
                                            <select class="form-select select_filter w-25" name="filter" autocomplete="off"
                                            required>
                                                <option selected="" value="" disabled="">{{ __('translation.Filter') }}</option>
                                                <option value="all">
                                                    {{ __('translation.all') }}
                                                </option>
                                                <option value="created_at">
                                                    {{ __('translation.Registration Date') }}
                                                </option>
                                                <option value="building_name">
                                                    {{ __('translation.Building Name') }}
                                                </option>
                                                <option value="customer_number">
                                                    {{ __('translation.Customer Number') }}
                                                </option>
                                                <option value="address">
                                                    {{ __('translation.address') }}
                                                </option>
                                                <option value="building_management company">
                                                    {{ __('translation.Building Management Company') }}
                                                </option>
                                            </select>
                                            <div class="custom_search">
                                                <div class="search">
                                                    <input type="text" class="form-control" name="keyword"
                                                        placeholder="{{ __('translation.search') }}" autocomplete="off"
                                                        required="">
                                                    <button type="submit" class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/search.png')}}">
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count($contracts) > 0)
                                        <div id="customer_list_table" class="table-responsive mt-3 data-set-list">
                                            @include('engineer_company.templates.contract_listing', [
                                                'contracts' => $contracts,
                                            ])
                                        </div>
                                        <div class="w-100 mt-4">
                                            <div class="text-center">
                                                {{ $contracts->links('common_files.paginate') }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img src="{{ asset('engineer_company/images/no-data-found.png') }}" style="height:250px;" class="img-fluid" alt="No Record Found">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
