
@extends('layout.all_admin')

@section('content')

<div class="container-fluid">
  <div class="row">
<div class="col-lg-6" id="Brand">
    <div class="card">
    	@if(isset($brand))
        	<div class="card-header"><h2>Update Brand Form</h2></div>
        @else
        	<div class="card-header"><h2>Create Brand Form</h2></div>
        @endif
        <div class="card-body card-block">
        	@if(isset($brand))
            	<form action="{{route('update_brand',$brand->id)}}" method="post" class="">
        	@else
				<form action="{{route('add_brand')}}" method="post" class="">
			@endif
            	@csrf
                <div class="form-group">
                    <div class="input-group">
                    	@if(isset($brand))
							<div class="input-group-addon">Update Brand</div>
						@else
							<div class="input-group-addon">Create Brand</div>
						@endif
            <div>
              <input type="text" id="brand_name_english" name="brand_name_english" placeholder="brand_name_english" class="form-control" @if(isset($brand)) value="{{$brand->name_en}}" @else value="{{ old('brand_name_english') }}" @endif>
              @error('brand_name_english')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div>
              <input type="text" id="brand_name_arabic" name="brand_name_arabic" placeholder="brand_name_arabic" class="form-control"  @if(isset($brand)) value="{{$brand->name_ar}}" @else value="{{ old('brand_name_arabic') }}" @endif>
              @error('brand_name_arabic')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
						
						<div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                	@if(isset($brand))
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


<div class="row" id="section-table">
      <div class="col-lg-12" id="content-table">
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
      					  @foreach($brands as $brand)
      					  <tr>
      						  <td>{{$loop->iteration}}</td>
      						  <td>{{$brand->name_en}}</td>
      						  <td>{{$brand->name_ar}}</td>
      						  <td><a href="{{route('edit_brand_page',$brand->id)}}" class="btn btn-info ">Edit</a></td>
      						  <td><a href="{{route('delete_brand',$brand->id)}}" class="btn btn-danger delete">Delete</a></td>
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

@section('js')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
@endsection