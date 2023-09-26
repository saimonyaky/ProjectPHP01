@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chi tiết sản phẩm</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->name }}" readonly>
                                </div>
                                <div class="form-group col-sm-4 box-body">
                                    <label>Loại sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $dataCategory->name }}" readonly>
                                </div>
                                <div class="form-group col-sm-4 box-body">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="price"
                                        value="{{ $data->price }}" readonly>
                                </div>
                                <div class="form-group box-body col-sm-4">
                                    <label for="exampleInputFile">Ảnh sản phẩm</label>
                                    @if ($data->image)
                                        <img src="{{ asset($data->image) }}" alt="">
                                    @else
                                        <p>Không có ảnh</p>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-default">Quay
                                    lại</a>
                                <a href="{{ route('product.edit', $data->id) }}" type="button"
                                    class="btn btn-warning">Sửa</a>
                            </div>
                        </div>
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
