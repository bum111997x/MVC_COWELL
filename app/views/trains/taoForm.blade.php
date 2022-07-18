@extends('frame')
@section('content')
    <form action="" enctype="multipart/form-data" method="post">
        <p>
            <label for="">name</label>
            <input type="text" name="name" class="form-control">
            <span style="color: red">{{ isset($error['name']) ? $error['name'] : '' }}</span>
        </p>
        <p>
            <label for="">train_number</label>
            <input type="text" name="train_number" class="form-control">
            <span style="color: red">{{ isset($error['train_number']) ? $error['train_number'] : '' }}</span>
        </p>
        <p>
            <label for="">ticket_price</label>
            <input type="number" name="ticket_price" class="form-control">
            <span style="color: red">{{ isset($error['ticket_price']) ? $error['ticket_price'] : '' }}</span>
        </p>
        <p>
            <label for="">cabin_number</label>
            <input type="text" name="cabin_number" class="form-control">
            <span style="color: red">{{ isset($error['cabin_number']) ? $error['cabin_number'] : '' }}</span>
        </p>
        <p>
            <button type="submit" class="btn btn-success">thêm</button>
        </p>
    </form>
@endsection
