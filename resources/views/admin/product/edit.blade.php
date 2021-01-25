@extends('admin/master')
@section('title',"Sửa sản phẩm")


@section('main')

<div class="box-body">
    <form action="{{ route('product.update',['id'=>$model->id]) }}" method="POST" role="form" enctype= "multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PUT">

        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $model->name }}" >
                    @if($errors->has('name'))
                             {{ $errors->first('name') }}
                     @endif
                </div>
                <div class="form-group">
                    <label for="">Đường dẫn</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $model->slug }}">
                    @if($errors->has('slug'))
                    {{ $errors->first('slug') }}
                @endif
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                        <textarea name="content" id="content" class="form-control" >{{ $model->content }}</textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control">
                        <option value="">Chọn một</option>
                        @foreach ($cats as $cat)
                        <?php $selected = $cat->id == $model->category_id ? 'selected' : '' ?>
                        <option {{ $selected }} value="{{ $cat -> id }}">{{ $cat->name }}</option>

                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="price"value="{{ $model->price }}" >
                    @if($errors->has('price'))
                    {{ $errors->first('price') }}
            @endif
                </div>
                <div class="form-group">
                    <label for="">Giá khuyến mãi</label>
                    <input type="number" class="form-control" name="sale_price" value="{{ $model->sale_price }}" >
                    @if($errors->has('sale_price'))
                    {{ $errors->first('sale_price') }}
            @endif
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status"  value="1"
                            <?php echo $model->status == 1 ? 'checked' : ''; ?> >
                            Hiển thị
                        </label>
                    </div>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status"  value="0"
                            <?php echo $model->status == 0 ? 'checked' : ''; ?> >
                            Ẩn
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" required="true" value="{{ $model->image }}">
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
