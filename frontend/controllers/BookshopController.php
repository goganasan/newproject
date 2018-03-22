<?php

namespace frontend\controllers;

use frontend\models\Book;
use frontend\models\Publisher;
use Yii;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $bookList = Book::find()->limit(10)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);

    }

    public function actionCreate()
    {
        $book = new Book();
        $publisherList = Publisher::getList();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Data was saved');
            return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
            'publisherList' => $publisherList,
        ]);
    }


}
