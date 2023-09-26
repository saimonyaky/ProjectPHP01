@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thêm sản phẩm mới</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('product.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tên sản phẩm" name="name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group col-sm-4 box-body">
                                        <label>Loại sản phẩm</label>
                                        <select class="form-control select2" style="width: 100%;" name='category_id'>
                                            <option selected value="">---Chọn loại sản phẩm---</option>
                                            @foreach ($dataCategory as $key => $val)
                                                <option value="{{$val['id']}}">{{ $val['name'] }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('category_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group col-sm-4 box-body">
                                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Giá sản phẩm" name="price">
                                        <span class="text-danger">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group box-body col-sm-4">
                                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                                        <input type="file" id="exampleInputFile" name="image">
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
    </div>
    </div>
@endsection
