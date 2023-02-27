
@extends('layout.all_admin')

@section('content')
<div class="container-fluid">
  <div class="row">
<div class="col-lg-6" id="Brand">
    <div class="card">
    	@if(isset($category))
        	<div class="card-header"><h2>Update Category Form</h2></div>
        @else
        	<div class="card-header"><h2>Create Category Form</h2></div>
        @endif
        <div class="card-body card-block">
        	@if(isset($category))
            	<form action="{{route('update_category',$category->id)}}" method="post" class="">
        	@else
				    <form action="{{route('add_category')}}" method="post" class="">
			@endif
            	@csrf
                <div class="form-group">
                    <div class="input-group">
                    	@if(isset($category))
							<div class="input-group-addon">Update Category</div>
						@else
							<div class="input-group-addon">Create Category</div>
						@endif
						<input type="text" id="category_name_english" name="category_name_english" placeholder="category_name_english" class="form-control" @if(isset($category)) value="{{$category->name_en}}" @endif>
						<input type="text" id="category_name_arabic" name="category_name_arabic" placeholder="category_name_arabic" class="form-control"  @if(isset($category)) value="{{$category->name_ar}}" @endif>
						<div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                	@if(isset($category))
                    	<button type="submit" class="btn btn-primary btn-sm">Update</button>
                	@else
						<button type="submit" class="btn btn-primary btn-sm">submit</button>
					@endif
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


<div class="row">
      <div class="col-lg-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
              <table class="table table-borderless table-data3">
                  <thead>
					<tr>
								<th>#</th>
								<th>Name in English</th>
								<th>Name in Arabic</th>
								<th>Edit</th>
								<th>delete</th>
					</tr>
                  </thead>
                  <tbody>

					@foreach($categories as $category)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$category->name_en}}</td>
							<td>{{$category->name_ar}}</td>
							<td><a href="{{route('edit_category_page',$category->id)}}" class="btn btn-info">Edit</a></td>
							<td><a href="{{route('delete_category',$category->id)}}" class="btn btn-danger">Delete</a></td>
					  	</tr>
					@endforeach
				
                </tbody>
              </table>
          </div>
          <!-- END DATA TABLE-->
      </div>
     </div>



<hr><hr>
@endsection