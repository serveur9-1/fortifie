
@if(Session::has('success'))
    <div class="container">
        <div class="row">
            <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-success alert-rounded">
                <strong>{{ Session::get('success')}}</strong>
            </div>
        </div>
    </div>
@endif


@if(Session::has('only'))
    <div class="container">
        <div class="row">
            <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-warning alert-rounded">
                <strong>{{ Session::get('only')}}</strong>
            </div>
        </div>
    </div>
@endif