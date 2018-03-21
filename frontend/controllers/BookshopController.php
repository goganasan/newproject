<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conditions = ['publisher_id' => 1];
        $bookList = Book::find()->limit(10)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);

    }

    public function actionCreate()
    {
        $book = new Book();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Data was saved');
            return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
        ]);
    }


}
