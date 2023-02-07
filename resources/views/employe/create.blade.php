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


        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Employe</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{route('employe.store') }}" method="post" >
            {{--  {{route('category.store')}}  --}}
            @csrf

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">First Name</label>
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
                    <label class="control-label" for="date01">phone</label>
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


                {{--  <div class="control-group">
                    <label class="control-label">Select Company</label>
                    <div class="control">
                        <select name="color" style="margin-left: 20px">
                            <option>Select company</option>

                            @foreach ($companiedetails as $company)

                            <option value="{{$company->id }}">{{$company->name}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>  --}}


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Employe</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->


@endsection
