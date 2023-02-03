<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>page-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awwesome file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap Css -->
    <!-- Icons Css -->
    <link href="{{asset('engineer_company/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="{{asset('engineer_company/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}"
          rel="stylesheet" type="text/css">

    <!-- App Css-->
    <link rel="stylesheet" href="{{asset('engineer_company/assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('engineer_company/assets/css/custom.css')}}">


    <style>
        .Opinions-section {
            padding: 100px 0px 100px 0px;
        }


        .bill-section {
            margin-top: 100px;
            text-align: center;
            font-weight: 600;
        }

        .fnc-section {
            border-bottom: 1px dashed black;
            margin-left: 11px;
            font-weight: 600;
        }

        .aAJ-Auto-section {
            margin-top: 200px;
            font-weight: 600;
            text-align: center;
        }

        .page1-section {
            margin-top: 100px;
            font-weight: 600;
            color: gray;
            font-size: 30px;
            text-align: center;

        }

        .wish-section {
            font-size: 18px;
            font-weight: 600;
            text-align: center;
        }

        .fnc-entertainment-section {
            margin-top: 100px;
        }

        .count-section {
            font-weight: 600;
            border-bottom: 1px solid black;
        }

        .count-section {
            font-weight: 600;
            border-bottom: 1px solid black;
            width: 50%;
            text-align: left;
            padding-left: 5px;
        }

        .tel-text {
            font-size: 16px;
            width: 50%;
            font-weight: 600;

        }

        .tel-text-2 {
            font-size: 16px;
            width: 50%;
            font-weight: 600;
            padding-left: 70px;
        }

        .tel-text-4 {
            font-size: 16px;
            width: 25%;
            font-weight: 600;
            padding-left: 70px;
        }

        .tel-text-5 {
            font-size: 16px;
            width: 50%;
            font-weight: 600;
            padding-left: 70px;
        }

        .Opinions-text {
            margin-top: 80px;
        }

        .custom-table-pdf {
            border: 1px solid black !important;
            position: relative;
        }

        .Contract-text {
            font-size: 35px;
        }

        .price-text {
            display: flex;
            text-align: end;
            justify-content: end;
        }

        .custom-table-pdf-2 {
            border: 1px solid black !important;
            background-color: yellow !important;
        }

        .custom-table-pdf-3 {
            border: 1px solid black !important;
            background-color: pink !important;
            z-index: 999;
        }

        .page-text {
            position: absolute;
            left: 41%;
            top: 38%;
            color: #E1E3EC;
            font-size: 113px;
        }

        .main-section {
            position: relative;
        }
    </style>
</head>

<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<div class="container">
    <div class="row">
        <div class="col-12 text-end mt-5">
            <button id="download" class="btn btn-primary"><i class="fa fa-print"></i></button>
        </div>
    </div>
</div>
<div id="content" class="Opinions-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4  class="text-center Opinions-text">Contract</h4>
                <p class="bill-section">Company Name: <span
                        class="fnc-section">{{$quote->GetCustomer->maintenance_company}}</span></p>
                <h4 class="page1-section">Page 1</h4>
                <h4 class="aAJ-Auto-section"> <span><img
                            src="{{asset('engineer_company/assets/images/screenshot.png')}}" height="20"
                            alt=""></span> aAJ Auto Parking Systems</h4>
            </div>

            <div>
                <h4 style="padding-bottom: 250px" class="text-center fnc-entertainment-section">Contract</h4>
                <h4>&nbsp;</h4>
                <div class="d-flex justify-content-center">
                    <p class="count-section">Company Name: {{$quote->GetCustomer->maintenance_company}}</p>
                    <h4 class="tel-text">
                        &nbsp;
                    </h4>
                </div>
                <p class="wish-section">We wish you the prosperity of your ear building and submit a quote as
                    follows.
                </p>
                <div class="d-flex justify-content-center">
                    <p class="count-section">Construction Name: {{$quote->GetCustomer->building_management_company}}</p>
                    <h4 class="tel-text"><img src="{{asset('engineer_company/assets/images/screenshot2.png')}}"
                                              height="40" class="px-5">
                    </h4>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="count-section">Price:<span class="price-text">{{$quote->total_amount}} V.A.T</span></p>
                    <h4 class="tel-text-2"> My Client Address info : {{$quote->GetCustomer->address}}</h4>
                </div>
                <div class="d-flex justify-content-center">
                    @php
                        $date = \Carbon\Carbon::parse($quote->contract_date);
                    @endphp
                    <p class="count-section">Construction Date :@if($date->isPast())
                            Date has expired
                        @else
                            Date not expired yet
                        @endif</p>
                    <h4 class="tel-text-2">Company Phone number : {{auth('engineer_company')->user()->phone}}</h4>
                </div>
                <div class="d-flex justify-content-center">
                    @php
                        $date = \Carbon\Carbon::parse($quote->contract_date);
                    @endphp
                    <p class="count-section">Contract Date : {{$date->format('Y.m.d')}}</p>
                    <h4 class="tel-text-2"></h4>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="count-section">Payment Condition : 100% Cash</p>
                    <h4 class="tel-text-5">Fax Numer: {{$quote->GetCustomer->BuildingInformation->fax}} /
                        <span
                            class="mx-1">Manager Phone : {{$quote->GetCustomer->BuildingInformation->manager_contact}}</span>
                    </h4>
                    <!-- <h4 class="tel-text-4">Manager Phone :  010-9902</h4> -->
                </div>
                <div class="d-flex justify-content-center">
                    <p class="count-section border-0">&nbsp;</p>
                    <h4 class="tel-text-4">Ceo</h4>
                    <h4 class="tel-text-4">Singature ommision</h4>
                </div>
            </div>


            <div class="main-section">
                <h1 class="page-text">Page</h1>
                <table class="table table-bordered custom-table-pdf">
                    <thead>
                    <tr>
                        <th class="custom-table-pdf-3">Contents</th>
                        <th class="custom-table-pdf-3">size</th>
                        <th class="custom-table-pdf-3">unit</th>
                        <th class="custom-table-pdf-3">Qty</th>
                        <th class="custom-table-pdf-3">Unite Price</th>
                        <th class="custom-table-pdf-3">Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $sum = 0;
                    @endphp
                    @foreach($quote->GetQuoteContent as $content)
                        @php
                            $sum = $sum + $content->price;
                        @endphp
                        <tr>
                            <th class="custom-table-pdf">{{$content->content}}</th>
                            <th class="custom-table-pdf"></th>
                            <th class="custom-table-pdf"></th>
                            <th class="custom-table-pdf">{{$content->quantity}}</th>
                            <th class="custom-table-pdf">{{$content->price}}</th>
                            <th class="custom-table-pdf">{{$sum}}</th>
                        </tr>

                    @endforeach
                    <tr>
                        <th class="custom-table-pdf"></th>
                        <td class="custom-table-pdf"></td>
                        <td class="custom-table-pdf"></td>
                        <td class="custom-table-pdf"></td>
                        <td class="custom-table-pdf"></td>
                        <td class="custom-table-pdf">{{$quote->total_amount}}</td>
                    </tr>


                    <tr>
                        <th class="custom-table-pdf-2"></th>
                        <td class="custom-table-pdf-2">Public company Gun Shop</td>
                        <td class="custom-table-pdf-2"></td>
                        <td class="custom-table-pdf-2"></td>
                        <td class="custom-table-pdf-2"></td>
                        <td class="custom-table-pdf-2">{{$quote->total_amount}}
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <p>NOTE : 1 Public company Gun Shop</p>
            <p>2 VAT :</p>

        </div>
    </div>
</div>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js "
        integrity="sha512-pdCVFUWsxl1A4g0uV6fyJ3nrnTGeWnZN2Tl/56j45UvZ1OMdm9CIbctuIHj+yBIRTUUyv6I9+OivXj4i0LPEYA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    window.onload = function () {
        document.getElementById("download")
            .addEventListener("click", () => {
                const invoice = this.document.getElementById("content");
                console.log(invoice);
                console.log(window);
                var opt = {
                    margin: 1,
                    filename: 'Test.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scrollX: 0, scrollY: 0
                    },
                    jsPDF: {
                        orientation: 'p',
                        unit: 'mm',
                        format: 'a4',
                        putOnlyUsedFonts: true,
                        floatPrecision: 16 // or "smart", default is 16
                    }


                };
                html2pdf().from(invoice).set(opt).save();
            })
    }
</script>

</body>

</html>
