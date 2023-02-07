@extends('admin')
@section('admin_content')

{{--  @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif  --}}


<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>

        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Companies</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01"> Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Email</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Webssite</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="website" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">File Upload</label>
                    <div class="controls">
                        <input type="file" name="image">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Company</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->


@endsection
