@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 d-flex justify-content-center">
            <form>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="ブランド名">
                </div>
            </form>
            <button type="button" class="btn btn-primary">ブランド新規作成</button>
        </div>
        <div class="col-3 d-flex justify-content-center">
            <button type="button" class="btn btn-success">ブランド加入</button>
        </div>
        <div class="col-3 d-flex justify-content-center">
            <button type="button" class="btn btn-danger d-flex justify-content-center">ブランド退会</button>
        </div>
    </div>
</div>
@endsection
