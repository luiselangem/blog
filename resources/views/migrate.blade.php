@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidenavbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Posts has been migrated succesfully</h1>
					<br/>
					<img src="../../images/payment-success.png" style="heigh:50px; width:50px; padding-left:0; padding-right:0;">
					<a href="../../home">Dashboard</a>
					</h1>
                </div>
              
			  
            </main>
        </div>
    </div>
@endsection