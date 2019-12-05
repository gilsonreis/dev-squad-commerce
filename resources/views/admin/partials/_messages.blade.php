@if(Session::get("success"))
    <div class="row">
        <div class="col-md-12 alert alert-success">
            {{Session::get("success")}}
        </div>
    </div>
@endif

@if(Session::get("warning"))
    <div class="row">
        <div class="col-md-12 alert alert-warning">
            {{Session::get("warning")}}
        </div>
    </div>
@endif

@if(Session::get("danger"))
    <div class="row">
        <div class="col-md-12 alert alert-danger">
            {{Session::get("danger")}}
        </div>
    </div>
@endif
