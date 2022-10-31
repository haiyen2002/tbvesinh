@extends('admin.layouts.main')
@section('content')
    <div class="product-edit">
        <div class="create-product">
            <h1>
                @if (isset($product))
                    Sửa sản phẩm
                @else
                    Thêm sản phẩm
                @endif
            </h1>
            <form class="row"
                action="{{ isset($product) ? url('admin/products/update/'. $product['product_id'])  : route('admin.create_product') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-8">
                    <div class="form-group my-3">
                        <label for="product_name">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="product_name" name="product_name"
                            placeholder="Nhập tên sản phẩm" value="{{isset($product)? @$product['product_name']: '' }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="product_path">Đường dẫn</label>
                        <input type="text" class="form-control" id="product_path"
                            placeholder="Nhập tên sản phẩm" value="{{ isset($product) ? @$product['product_path'] : ''}} " disabled>
                    </div>
                    <div class="form-group my-3">
                        <label for="product_id">Mã sản phẩm</label>
                        <input type="text" class="form-control" id="product_id" name="product_id"
                            placeholder="Nhập mã sản phẩm" value="{{ isset($product) ? @$product['product_id'] : '' }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="qr_code">Mã QR (phần này nên được nhập vào sau khi có link sản phẩm)</label>
                        <input type="text" class="form-control" id="qr_code" name="qr_code"
                            placeholder="Nhập mã QR" value="{{ isset($product) ? @$product['qr_code'] : '' }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="origin">Nguồn gốc</label>
                        <input type="text" class="form-control" id="origin" name="origin"
                            placeholder="Nhập nguồn gốc sản phẩm" value="{{ isset($product) ? @$product['origin'] : ''}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="amount">Số lượng sản phẩm</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                            placeholder="Nhập số lượng sản phẩm" value="{{ isset($product) ? @$product['amount'] : '' }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="brand_id">Thương hiệu</label>
                        <select class="form-control" id="brand_id" name="brand_id">
                            <option value>-- Select Thương hiệu --</option>
                          
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand['brand_id'] }}"
                                        {{ isset($product) && $product['brand_id'] == $brand['brand_id'] ? 'selected' : '' }}>
                                        {{ $brand['brand_name'] }}</option>
                                @endforeach
                           
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="category_id">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value>-- Select Category --</option>
                            
                                @foreach ($categories as $category)
                                    <option value="{{ $category['category_id'] }}"
                                    {{ isset($product) && $product['category_id'] == $category['category_id'] ? 'selected' : '' }}>
                                    {{ $category['category_name'] }}</option>
                                @endforeach
                           
                           
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="hot">Hot</label>
                        <select class="form-control" id="hot" name="hot">
                            <option value="0" {{ isset($product) && $product['hot'] == 0 ? 'selected' : '' }}>No
                            </option>
                            <option value="1" {{ isset($product) && $product['hot'] == 1 ? 'selected' : '' }}>Yes
                            </option>
                        </select>
                    </div>
                    {{-- <div class="form-group my-3">
                        <label for="weight">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter Weight"
                            value="{{ @$product['weight'] }}">
                    </div> --}}
                    <div class="form-group my-3">
                        <label for="unit_cost">Giá gốc</label>
                        <input type="number" class="form-control" id="unit_cost" name="unit_cost"
                            placeholder="Nhập giá gốc" value="{{isset($product) ? @$product['unit_cost'] : ''}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="real_cost">Giá thực</label>
                        <input type="number" class="form-control" id="real_cost" name="real_cost"
                            placeholder="Nhập giá thực" value="{{isset($product) ? @$product['real_cost']:'' }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="discount">Khuyến mại (theo %)</label>
                        <input type="number" class="form-control" id="discount" name="discount"
                            placeholder="Enter Unit Price" value="{{isset($product) ? @$product['discount'] : '' }}">
                        <div class="form-group my-3">
                            <label for="product_title">sản phẩm Title</label>
                            <input type="text" class="form-control" id="product_title" name="product_title"
                                placeholder="Enter sản phẩm Title" value="{{isset($product) ? @$product['product_title']:'' }}">
                        </div>
                        <div class="form-group my-3">
                            <label for="product_description">sản phẩm Description</label>
                            <textarea class="form-control" id="product_description" name="product_description" rows="3">
                            {{@$product['product_description'] }}
                            </textarea>
                        </div>
                        <div class="form-group my-3">
                            <label for="product_content">sản phẩm Content</label>
                            <textarea class="form-control" id="product_content" name="product_content" rows="3">
                            {{@$product['product_content'] }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="preview-logo image-lg">
                        <img class="lodas w-100 product_image" src="{{ url('images/products/' . @$product['product_image']) }}"
                            alt="">
                    </div>
                    <div class="form-group my-3">
                        <label for="product_image">sản phẩm Image</label>
                        <input type="file" class="form-control" id="product_image" name="product_image">
                    </div>
                    <div class="preview-list-image row">
                        @if (isset($product) && $product['product_image_slide'])
                            <?php $listImageSlide = explode(',', $product['product_image_slide']); ?>
                            @foreach ($listImageSlide as $key=>$imageSlide)
                                <div class="my-2 col-md-6 col-12">
                                    <img class="lodas w-100 product_image_slide{{$key}}" src="{{ url('images/products/' . $imageSlide) }}"
                                        alt="">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group my-3">
                        <label for="product_image_slide">sản phẩm Image Slide</label>
                        <input type="file" class="form-control" id="product_image_slide" name="product_image_slide"
                            multiple>
                    </div>
                    <div class="form-group my-3">
                        <label for="product_status">sản phẩm Status</label>
                        <select class="form-control" id="product_status" name="product_status">
                            <option value="1"
                                {{ isset($product) && $product['product_status'] == 1 ? 'selected' : '' }}>Hiện
                            </option>
                            <option value="0"
                                {{ isset($product) && $product['product_status'] == 0 ? 'selected' : '' }}>Ẩn
                            </option>
                        </select>
                    </div>
                    {{-- <div class="form-group my-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> --}}
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            handlePreviewImage('#product_image','.product_image');
            handlePreviewMultipleImage('#product_image_slide',{
                imageContainer:'.preview-list-image',
                renderItem:(src)=>{
                    console.log(src);   
                    return `<div class="my-2 col-md-6 col-12">
                                    <img class="lodas w-100" src="${src}"
                                        alt="">
                                </div>`}
            });
            CKEDITOR.editorConfig = function(config) {
                config.image_previewText = '';
            };

            CKEDITOR.replace('product_description', {
                filebrowserBrowseUrl: '{{ @url('admin/images-products') }}',
                filebrowserImageBrowseUrl: '{{ @url('admin/images-products') }}',
                filebrowserUploadUrl: '{{ @url('admin/upload-products') }}',
                filebrowserImageUploadUrl: '{{ @url('admin/upload-products') }}',
                config: {
                    image_previewText: ''
                }
            });
            CKEDITOR.replace('product_content', {
                filebrowserBrowseUrl: '{{ @url('admin/images-products') }}',
                filebrowserImageBrowseUrl: '{{ @url('admin/images-products') }}',
                filebrowserUploadUrl: '{{ @url('admin/upload-products') }}',
                filebrowserImageUploadUrl: '{{ @url('admin/upload-products') }}',
                config: {
                    image_previewText: ''
                }
            });
        });
    </script>
@endsection
