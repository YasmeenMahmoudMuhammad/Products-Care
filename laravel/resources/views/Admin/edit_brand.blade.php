@extends('layout.all_admin')

@section('content')

<div class="container-fluid">
  <div class="row">
<div class="col-lg-6" id="Brand">
    <div class="card">
        <div class="card-header"><h2>Update Brand Form</h2></div>
        <div class="card-body card-block">
            <form action="{{route('update_brand',$brand->id)}}" method="post" class="">
            @csrf
                <div class="form-group">
                    <div class="input-group">
						<div class="input-group-addon">Name Brand</div>
						<input type="text" id="brand_name_english" name="brand_name_english" placeholder="brand_name_english" class="form-control" value="{{$brand->name_ar}}">
						<input type="text" id="brand_name_arabic" name="brand_name_arabic" placeholder="brand_name_arabic" class="form-control" value="{{$brand->name_en}}">
						<div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>




<hr><hr>
@endsection

