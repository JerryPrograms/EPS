<div id="print_form1" class="main_content_section">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="contract-details border-0">

                            <div class="contract-details-section">
                                <h4>{{__('translation.Construction Completion Management')}}</h4>
                                <div class="d-flex">
                                    <p class="construction-text_2 custom_pr_2">
                                        ▶ {{__('translation.Project Number')}}:
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        {{$completion_report->project_number}}
                                    </p>
                                </div>

                                <div class="d-flex mt-3">
                                    <p class="construction-text_2 custom_pr_2">
                                        {{__('translation.Site Name')}}:
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        {{$completion_report->site_name}}
                                    </p>
                                </div>

                                <div class="d-flex">
                                    <p class="construction-text_2 custom_pr_2">
                                        {{__('translation.Species name')}}:
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        {{$completion_report->joint_name}}
                                    </p>
                                </div>


                                <div class="d-flex">
                                    <p class="construction-text_2 custom_pr_2">
                                        {{__('translation.Contract amount')}}
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        {{$completion_report->contract_amount}} {{__('translation.won per day')}}
                                    </p>
                                </div>


                                <div class="d-flex">
                                    <p class="construction-text_2 custom_pr_2">
                                        {{__('translation.Company name')}} :
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        {{$completion_report->joint_name}}</p>
                                </div>


                                <div class="date-contract-margin">

                                    <div class="d-flex mt-4 ">
                                        <p class="construction-text_2 custom_pr_2">
                                            {{__('translation.Date of contract')}}:
                                        </p>

                                        <p class="construction-text custom-padding-left">
                                            {{\Carbon\Carbon::parse($completion_report->contract_date)->format('M d,Y')}}</p>
                                    </div>


                                    <div class="d-flex">
                                        <p class="construction-text_2 custom_pr_2">
                                            {{__('translation.Date of work')}}:
                                        </p>

                                        <p class="construction-text custom-padding-left">
                                            {{\Carbon\Carbon::parse($completion_report->production_date)->format('M d,Y')}}</p>
                                    </div>


                                    <div class="d-flex">
                                        <p class="construction-text_2 custom_pr_2">
                                            {{__('translation.Date of Completion')}}:
                                        </p>

                                        <p class="construction-text custom-padding-left">
                                            {{\Carbon\Carbon::parse($completion_report->completion_date)->format('M d,Y')}}</p>
                                    </div>


                                    <div class="d-flex">
                                        <p class="construction-text_2 custom_pr_2">
                                            {{__('translation.Date of confirmation')}}:
                                        </p>

                                        <p class="construction-text custom-padding-left">
                                            {{\Carbon\Carbon::parse($completion_report->confirmation_date)->format('M d,Y')}}</p>
                                    </div>


                                </div>

                                <div class="d-flex mt-4">
                                    <p class="construction-text custom_pr_2">
                                        ▶ {{__('translation.Construction claim details')}}
                                    </p>

                                    <p class="construction-text custom-padding-left">
                                        &nbsp;
                                    </p>
                                </div>
                            </div>


                            <div class="customer-info-2">
                                <div class="table-responsive">
                                    <table class="table  mb-0">

                                        <thead>
                                        <tr>
                                            <th>{{__('translation.Contract Amount')}}</th>
                                            <th>{{__('translation.Advance Payment')}}</th>
                                            <th>%</th>
                                            <th>{{__('translation.Completion Fund')}}</th>
                                            <th>%</th>
                                            <th>{{__('translation.Other Settlement Amount')}}</th>
                                            <th>{{__('translation.Microbial Balance')}}</th>
                                            <th>%</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row">{{$completion_report->contract_amount}}</th>
                                            <th></th>
                                            <th>1</th>
                                            <th>{{$completion_report->completion_fund}}</th>
                                            <th>2</th>
                                            <th>{{$completion_report->other_settlement_fund}}</th>
                                            <th>{{$completion_report->microbial_fund}}</th>
                                            <th>97</th>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <p class="construction-text pb-5 mt-2">
                                {{__('translation.When the work for the above construction is completed, a construction completion report is prepared by attaching work photos.')}}
                            </p>


                            <h4 class="text-center mt-5">October 24, 2022</h4>

                            <div class="d-flex mt-4">
                                <p class="construction-text custom_pr_2">
                                    Type :
                                </p>

                                <p class="construction-text custom-padding-left">
                                    &nbsp;
                                </p>
                            </div>


                            <div class="d-flex">
                                <p class="construction-text custom_pr_2">
                                    . Working photo: &nbsp;&nbsp;&nbsp;&nbsp;
                                </p>

                                <p class="construction-text custom-padding-left">
                                    Part 1
                                </p>
                            </div>


                            <div class="d-flex">
                                <p class="construction-text custom_pr_2">
                                    . Copy of bankbook:
                                </p>

                                <p class="construction-text custom-padding-left">
                                    1 copy
                                </p>
                            </div>

                            <div class="text-center mt-3">
                                <img src="{{asset('engineer_company/images/company_logo.png')}}"
                                     height="60">
                            </div>
                        </div>
                    </div>

                    <!-- end table-responsive -->

                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="contract-details_2 border-0">

                            @for($i = 0 ; $i < count(json_decode($completion_report->title)); $i++)
                                <div class="contract-details-section">
                                    <h4>{{__('translation.Process Photo')}}</h4>
                                    <p class="construction-heading">{{json_decode($completion_report->title)[$i]}}
                                    </p>

                                    <div class="process-photo-section border-bottom-0">
                                        <img src="{{asset(json_decode($completion_report->photo)[$i])}}"
                                             class="mt-5">

                                        <div class="customer-info-2 mt-5">
                                            <div class="table-responsive">
                                                <table class="table  mb-0">

                                                    <thead>
                                                    <tr>
                                                        <th class="construction-text">{{__('translation.Site Name')}}</th>
                                                        <th class="construction-text">{{json_decode($completion_report->site)[$i]}}
                                                        </th>
                                                        <th class="construction-text">{{__('translation.Date')}}</th>
                                                        <th class="construction-text">{{json_decode($completion_report->date)[$i]}}
                                                        </th>
                                                    </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->


        <!-- row end  -->
    </div>
</div>
