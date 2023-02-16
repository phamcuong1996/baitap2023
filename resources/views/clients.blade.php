@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('client.store') }}">
                <p class="zid_regform_notice">Những thông tin có đánh dấu (<span class="fa fa-star"
                                                                                 style="font-size:10px;color:red"></span>)
                    là bắt buộc nhập.</p>
                <br>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" style="text-align: center">Vui Lòng Nhập</h3>
                    </div>
                    <br>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                            <input class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Năm Sinh (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                            <input class="form-control" type="text" name="birth" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Loại (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                            <input class="form-control" type="text" name="type" required>
                        </div>

                    </div>
                    <br>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

