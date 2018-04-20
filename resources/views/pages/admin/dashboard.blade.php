@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2 style="margin-top: 40px; margin-bottom: 100px;">Hi! What would you like to do today?</h2>

            <div class="row">
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/update-hours">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-clock" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update Opening Hours
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/update-services">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-asterisk" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update Services
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/update-products">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-barcode" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update Products
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/show-enquiries">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-comment-dots" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            View Enquiries
                        </div>
                    </a>
                </div>
            </div>{{--row--}}

            <div class="row">
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/add-promotion">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-certificate" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update Promotion
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/update-services">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-id-card" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update About Us
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/update-products">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-gift" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            Update Gift Certificate
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom: 15px;">
                    <a class="taskbox" style="cursor: pointer;" href="/show-enquiries">
                        <div style="height: 250px; background-color: #f5f8fa; border: 1px #e0e4e6 solid;">
                            <i class="fas fa-calendar-alt" style="font-size: 100px; width: 100%; margin-top: 50px; margin-bottom: 25px;"></i>
                            View Calendar
                        </div>
                    </a>
                </div>
            </div>{{--row--}}
        </div>{{--col-md-8--}}
    </div>{{--row--}}
</div>
@endsection
