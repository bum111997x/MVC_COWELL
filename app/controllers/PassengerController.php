<?php
namespace App\Controllers;
use App\Models\Passenger;
use App\Models\Train;

class PassengerController{
    public function index(){
        return view("passengers.index", [
            "passengers" => Passenger::all()
        ]);
    }

    public function taoForm(){
        return view('passengers.taoForm',[
            'trains' => Train::all()
        ]);
    }

    public function luuTao(){
        $error = array();
        if ($_POST['name'] == '') {
            $error['name'] = 'ko đc để trống';
        }
        if ($_POST['train_id'] == '') {
            $error['train_id'] = 'ko đc để trống';
        }
        if ($_POST['gender'] == '') {
            $error['gender'] = 'ko đc để trống';
        }
        if ($_POST['birth_date'] == '') {
            $error['birth_date'] = 'ko đc để trống';
        }
        if ($_POST['phone'] == '') {
            $error['phone'] = 'ko đc để trống';
        }
        if ($_FILES['avatar']['size'] <= 0) {
            $error['avatar'] = 'hãy thêm ảnh';
        }

        if (!empty($error)) {
            return view('passengers.taoForm', [
                'error' => $error,
                'trains' => Train::all()
            ]);
        } else {
            $model = new Passenger();
            $model->fill($_POST);

            $img = $_FILES['avatar']['name'];
            $tmp = $_FILES['avatar']['tmp_name'];
            move_uploaded_file($tmp, 'public/img/' . $img);

            $model->avatar = $img;
            $model->save();
            header('location: ' . BASE_URL . 'passengers?msg=Tao thanh cong');
        }
    }

    public function suaForm($id){
        return view('passengers.suaForm',[
            'trains' => Train::all(),
            'passenger' => Passenger::find($id)
        ]);
    }

    public function luuSua($id){
        if ($_POST['name'] == '') {
            $error['name'] = 'ko đc để trống';
        }
        if ($_POST['train_id'] == '') {
            $error['train_id'] = 'ko đc để trống';
        }
        if ($_POST['gender'] == '') {
            $error['gender'] = 'ko đc để trống';
        }
        if ($_POST['birth_date'] == '') {
            $error['birth_date'] = 'ko đc để trống';
        }
        if ($_POST['phone'] == '') {
            $error['phone'] = 'ko đc để trống';
        }

        if (!empty($error)) {
            return view('passengers.suaForm', [
                'error' => $error,
                'trains' => Train::all()
            ]);
        } else {
            echo "update data";
            $model = Passenger::find($id);
            $model->fill($_POST);

            if ($_FILES['avatar']['size'] <= 0) {
                $img = $model->avatar;
            } else {
                $img = $_FILES['avatar']['name'];
                $tmp = $_FILES['avatar']['tmp_name'];
                move_uploaded_file($tmp, 'public/img/' . $img);
            }

            $model->avatar = $img;
            $model->save();
            header('location: ' . BASE_URL . 'passengers?msg=Sua thanh cong');
        }
    }

    public function xoa($id)
    {
        $model = Passenger::find($id);
        $model->delete();
        header('location: ' . BASE_URL . 'passengers?msg=Xoa thanh cong');
    }
}

?>