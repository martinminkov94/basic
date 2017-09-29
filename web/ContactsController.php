<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Contacts;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = contacts::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $contacts = $query->orderBy('Name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}