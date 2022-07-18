<?php

use App\Controllers\TrainController;
use App\Controllers\PassengerController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){
    $router = new RouteCollector();

    $router->get('trains', [TrainController::class, 'index']);
    $router->get('trains/xoa/{id}', [TrainController::class, 'xoa']);
    $router->get('trains/tao', [TrainController::class, 'taoForm']);
    $router->post('trains/tao', [TrainController::class, 'luuTao']);
    $router->get('trains/sua/{id}', [TrainController::class, 'suaForm']);
    $router->post('trains/sua/{id}', [TrainController::class, 'luuSua']);

    $router->get('passengers', [PassengerController::class, 'index']);
    $router->get('passengers/xoa/{id}', [PassengerController::class, 'xoa']);
    $router->get('passengers/tao', [PassengerController::class, 'taoForm']);
    $router->post('passengers/tao', [PassengerController::class, 'luuTao']);
    $router->get('passengers/sua/{id}', [PassengerController::class, 'suaForm']);
    $router->post('passengers/sua/{id}', [PassengerController::class, 'luuSua']);

    

    // // đăng nhập 
    // // đăng xuất => LoginController và hàm logout
    // $router->any('logout', [LoginController::class, 'logout']);
    // // danh sách môn học - mon-hoc
    // // SubjectController => index
    // $router->get('mon-hoc', [SubjectController::class, 'index']);
    // // {id} vị trí tham số đường dẫn
    // $router->get('mon-hoc/xoa/{id}', [SubjectController::class, 'xoa']);

    // // các bài quiz của môn học
    // $router->get('bai-quiz', [QuizController::class, 'index']);
    // $router->get('bai-quiz/tao-moi', [QuizController::class, 'addForm']);
    // $router->post('bai-quiz/tao-moi', [QuizController::class, 'saveAdd']);
    // $router->get('bai-quiz/cap-nhat/{id}', [QuizController::class, 'editForm']);
    // $router->post('bai-quiz/cap-nhat/{id}', [QuizController::class, 'saveEdit']);
    // $router->get('bai-quiz/xoa/{id}', [QuizController::class, 'remove']);
    // các câu hỏi của 1 bài quiz
    // $router->get('cau-hoi', [QuestionController::class, 'index']);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>