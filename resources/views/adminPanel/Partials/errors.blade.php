@if($errors->any())

<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        @foreach($errors->all() as $error)
            {{ $error }}
            <br>
        @endforeach
    </div><!-- End alert-danger -->
@endif