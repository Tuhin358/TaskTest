@extends('admin')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>

            <p class="alert-success">
                @php
                    $message=Session::get('message');
                    if($message){
                        echo $message;
                    }else{
                        Session::put('message',null);
                    }
                @endphp
            </p>

            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th style="width:10%">id</th>
                      <th style="width:10%"> Name</th>
                      <th style="width:10%"> Email</th>
                      <th style="width:10%"> Wensite</th>
                      <th style="width:15%">image</th>
                      <th style="width:20%">Actions</th>

                  </tr>
              </thead>
              @foreach ($companiedetails as $category)

              <tbody>
                <tr>
                    <td>{{ $category->id }}</td>
                    <td class="center">{{ $category->name }}</td>
                    <td class="center">{{ $category->email }}</td>
                    <td class="center">{{ $category->website }}</td>
                    <td>
                        <img src="{{asset('/storage/companiedetail/'.$category->image) }}" style="width:100px; height:100px">

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                        <div class="span4">

                        <a href="{{route('category.edit',$category->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{route('categorydelete',$category->id) }}" class="btn btn-warning">Delete</a>

                    </div>

                    </div>
                        <div class="spamn3"></div>
                    </td>
                </tr>

              </tbody>
              @endforeach
          </table>
          {{$companiedetails->links() }}
        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection
