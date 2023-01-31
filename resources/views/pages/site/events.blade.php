@extends('layouts.base')

@section('content')
    <div class="container">
        @include('layouts.bread', ['current_page' => 'Events']) 
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <div class="row mx-3 my-5">
                            <div class="col-md-4">
                                <h6 class="mb-5">Filter Options</h6>
                                <form>
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <input class="btn btn-secondary" type="submit" value="Search" id="button-addon2">
                                    </div>
                                </form>   
                            </div>
                        </div>
                    </div>
                    <!--end::Card widget 17-->
                </div>  
            </div>   
        </div>   
    </div>   
@endsection