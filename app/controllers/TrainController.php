<?php
namespace App\Controllers;
use App\Models\Train;

class TrainController{
    public function index(){
        return view("trains.index", [
            "trains" => Train::all()
        ]);
    }

    public function taoForm(){
        return view("trains.taoForm");
    }

    public function luuTao(){
        $error = array();
        if ($_POST['name'] == '') {
            $error['name'] = 'ko đc để trống';
        }
        if ($_POST['train_number'] == '') {
            $error['train_number'] = 'ko đc để trống';
        }
        if ($_POST['ticket_price'] == '') {
            $error['ticket_price'] = 'ko đc để trống';
        }
        if ($_POST['cabin_number'] == '') {
            $error['cabin_number'] = 'ko đc để trống';
        }


        if (!empty($error)) {
            return view('trains.taoForm', [
                'error' => $error
            ]);
        } else {
            $model = new Train();
            $model->fill($_POST);
            $model->save();
            header('location: ' . BASE_URL . 'trains?msg=Tao thanh cong');
        }
    }

    public function suaForm($id){
        return view('trains.suaForm', [
            'train' => Train::find($id)
        ]);
    }

    public function luuSua($id){
        $error = array();
        if ($_POST['name'] == '') {
            $error['name'] = 'ko đc để trống';
        }
        if ($_POST['train_number'] == '') {
            $error['train_number'] = 'ko đc để trống';
        }
        if ($_POST['ticket_price'] == '') {
            $error['ticket_price'] = 'ko đc để trống';
        }
        if ($_POST['cabin_number'] == '') {
            $error['cabin_number'] = 'ko đc để trống';
        }


        if (!empty($error)) {
            return view('trains.suaForm', [
                'error' => $error
            ]);
        } else {
                $model = Train::find($id);
                $model->fill($_POST);
                $model->save();
                header('location: ' . BASE_URL . 'trains?msg=Sua thanh cong');
            }
    }

    public function xoa($id){
        $model = Train::find($id);
        $model->delete();
        header('location: ' . BASE_URL . 'trains?msg=Xoa thanh cong');
    }
}

?>