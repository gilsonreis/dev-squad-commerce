@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Oppss!! Something wrong is happening ... </strong>
        <br>
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li><i class="fa fa-close"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
