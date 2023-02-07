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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Employe</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{route('employeupdate',$employe->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$employe->id }}" name="employe_id">

           {{--  @method('PUT')  --}}

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">First  Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="first_name" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Last Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="last_name" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="date01">Email</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Phone</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="phone" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Company</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="company" required>
                    </div>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update </button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->


@endsection

