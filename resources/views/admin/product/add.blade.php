@extends('admin/master')
@section('title',"Thêm sản phẩm")


@section('main')

<div class="box-body">
    <form action="{{ route('product.store') }}" method="POST" role="form" enctype= "multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" name="name" id="name" >
                    @if($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>

                     @endif
                </div>
                <div class="form-group">
                    <label for="">Đường dẫn</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                    @if($errors->has('slug'))
                    <div class="alert alert-danger">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                        <textarea name="content" id="content" class="form-control" ></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control">
                        <option value="">Chọn một</option>
                        @foreach ($cats as $cat)
                        <option value="{{ $cat -> id }}">{{ $cat->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="price" >
                    @if($errors->has('price'))
                    <div class="alert alert-danger">
                        {{ $errors->first('price') }}
                    </div>
            @endif
                </div>
                <div class="form-group">
                    <label for="">Giá khuyến mãi</label>
                    <input type="text" class="form-control" name="sale_price" >
                    @if($errors->has('sale_price'))
                    <div class="alert alert-danger">
                        {{ $errors->first('sale_price') }}
                    </div>
            @endif
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status"  value="1" checked>
                            Hiển thị
                        </label>
                    </div>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status"  value="0" >
                            Ẩn
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" required="true">
                </div>

                </div>

                <button type="submit"class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
</div>


@stop


@section('js')
<script src="{{ url('admin/slug.js') }}"></script>
<script src="{{ url('admin/ tinymce/tinymce.min.js') }}"></script>
<script src="{{ url('admin/ tinymce/config.js') }}"></script>


@stop
