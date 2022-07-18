@extends('frame')
@section('content')
    <form action="" enctype="multipart/form-data" method="post">
        <p>
            <label for="">name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ isset($_POST['name']) ? $_POST['name'] : $train->name }}">
            <span style="color: red">{{ isset($error['name']) ? $error['name'] : '' }}</span>
        </p>
        <p>
            <label for="">train_number</label>
            <input type="text" name="train_number" class="form-control"
                   value="{{ isset($_POST['train_number']) ? $_POST['train_number'] : $train->train_number }}">
            <span style="color: red">{{ isset($error['train_number']) ? $error['train_number'] : '' }}</span>
        </p>
        <p>
            <label for="">ticket_price</label>
            <input type="number" name="ticket_price" class="form-control"
                   value="{{ isset($_POST['ticket_price']) ? $_POST['ticket_price'] : $train->ticket_price }}">
            <span style="color: red">{{ isset($error['ticket_price']) ? $error['ticket_price'] : '' }}</span>
        </p>
        <p>
            <label for="">cabin_number</label>
            <input type="text" name="cabin_number" class="form-control"
                   value="{{ isset($_POST['cabin_number']) ? $_POST['cabin_number'] : $train->cabin_number }}">
            <span style="color: red">{{ isset($error['cabin_number']) ? $error['cabin_number'] : '' }}</span>
        </p>
        <p>
            <button type="submit" class="btn btn-success">Update</button>
        </p>
    </form>
@endsection