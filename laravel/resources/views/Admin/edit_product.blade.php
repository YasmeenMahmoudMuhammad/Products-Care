@extends('layout.all_admin')

@section('content')
<div class="CONTAINER" id="products">
	<div class="container-fluid">
		 <div class="row">
			 <div class="col-lg-12">
					 <div class="card">
							 <div class="card-header">
									 <strong><h2>Update Product</h2></strong>
							 </div>
							 <form action="{{route('update_product',$product->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
							 	@csrf
							 	<div class="card-body card-block">
									 
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="Name Product" class=" form-control-label">Name Product</label>
													 </div>
													 <div class="col-12 col-md-9">
														 <input type="text" id="product_name_english" name="product_name_english" placeholder="product_name_english" class="form-control" value="{{$product->name_en}}">
														<input type="text" id="product_name_arabic" name="product_name_arabic" placeholder="product_name_arabic" class="form-control" value="{{$product->name_ar}}">
													</div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="price" class=" form-control-label">Price</label>
													 </div>

													 <div class="col-12 col-md-9">
														<input type="number" id="price" name="price" placeholder="price" class="form-control" value="{{$product->price}}">
											 </div>
											</div>
											 <div class="row form-group">
												<div class="col col-md-3">
														<label for="Quantity" class="form-control-label">Quantity</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="number" id="Quantity" name="Quantity" placeholder="Quantity" class="form-control" value="{{$product->quantity}}">
                                                </div>
											  </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="textarea-input" class=" form-control-label">Description</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <textarea name="description_en" id="textarea-input" rows="9" placeholder="Description_english" class="form-control">{{$product->description_en}}</textarea>
															 <textarea name="description_ar" id="textarea-input" rows="9" placeholder="Description_arabic" class="form-control">{{$product->description_ar}}</textarea>
											  </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="select" class=" form-control-label">Category</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <select name="category" class="form-control">
															 		@foreach($categories as $category)
																	 @if($category->id == $product->category_id)
																	 	<option value="{{$category->id}}" selected="">{{$category->name_en}}</option>
																	 @else
																	 	<option value="{{$category->id}}">{{$category->name_en}}</option>
																	 @endif
																	 
																	 @endforeach

															 </select>
													 </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="select" class=" form-control-label">Brand</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <select name="brand" class="form-control">
																	 @foreach($brands as $brand)
																		 @if($brand->id == $product->brand_id)
																		 	<option value="{{$brand->id}}" selected="">{{$brand->name_en}}</option>
																		 @else
																		 	<option value="{{$brand->id}}">{{$brand->name_en}}</option>
																		 @endif
																	 
																	 @endforeach
															 </select>
													 </div>
											 </div>
											 <div class="row form-group">
												<div class="col col-md-3">
														 <label for="size" class=" form-control-label">Size</label>
												 </div>

												 <div class="col-12 col-md-9">
													<input type="number" name="size" placeholder="screen size" class="form-control" value="{{$product->screen_size}}">
										 		</div>
											</div>

												<div class="row form-group">
													<div class="col col-md-3">
															<label for="select" class=" form-control-label">Color</label>
													</div>
													<div class="col-12 col-md-9">
														<select name="color[]"  class="form-control" multiple>
															@foreach($colors as $color)
																@php($found = false)
																@foreach($product->product_colors as $product_color)

																	@if($color->id == $product_color->color_id)
																		@php($found = true)

																	 @endif
																@endforeach

																@if($found)
																	<option value="{{$color->id}}" selected="">{{$color->name_en}}</option>
																 @else
																 	<option value="{{$color->id}}">{{$color->name_en}}</option>
																 @endif
															@endforeach
														</select>
												</div>
										</div>

											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="file-input" class=" form-control-label">Picture</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <input type="file" id="file-input" name="main_image" class="form-control-file">
															 <img class="img-fluid " width="100px" height="100px" src="{{asset($product->main_image)}}">
													 </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="file-multiple-input" class=" form-control-label">Another Pictures</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <input type="file" id="file-multiple-input" name="multiple_images[]" multiple="" class="form-control-file">
															 @foreach($product->images as $product_image)
															 	<img class="img-fluid "width="100px" height="100px" src="{{asset($product_image->image)}}">
															 @endforeach

													 </div>
											 </div>
									 
								 </div>
								 <div class="card-footer">
										 <button type="submit" class="btn btn-primary btn-sm">
												 <i class="fa fa-dot-circle-o"></i> Update
										 </button>
										 <button type="reset" class="btn btn-danger btn-sm">
												 <i class="fa fa-ban"></i> Reset
										 </button>
								 </div>
							</form>
					 </div>
			 </div>
		 </div>
		 <hr>

  </div>
</div>



<hr><hr>
@endsection
