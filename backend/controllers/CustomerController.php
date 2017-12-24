<?php

namespace backend\controllers;

use common\models\FamilyType;
use common\models\User;
use Yii;
use common\models\Customer;
use common\models\CustomerSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class CustomerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Customer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Customer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Customer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Customer();
        $typeCustomer=new FamilyType();
        $parent=ArrayHelper::map(Customer::find()->where(['id_parent_family'=>null])->all(),'id','family_name');
        $familyType=ArrayHelper::map(FamilyType::find()->where(['type_customer'=>$typeCustomer::FAMILY])->all(),'id','type');
        $childType=ArrayHelper::map(FamilyType::find()->where(['type_customer'=>$typeCustomer::CHILD])->all(),'id','type');
        $user=ArrayHelper::map(User::find()->all(),'id','username');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'parent'=>$parent,
                'familyType'=>$familyType,
                'childType'=>$childType,
                'user'=>$user
            ]);
        }
    }

    /**
     * Updates an existing Customer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $typeCustomer=new FamilyType();
        $parent=ArrayHelper::map(Customer::find()->where(['id_parent_family'=>null])->all(),'id','family_name');
        $familyType=ArrayHelper::map(FamilyType::find()->where(['type_customer'=>$typeCustomer::FAMILY])->all(),'id','type');
        $childType=ArrayHelper::map(FamilyType::find()->where(['type_customer'=>$typeCustomer::CHILD])->all(),'id','type');
        $user=ArrayHelper::map(User::find()->all(),'id','username');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'parent'=>$parent,
                'familyType'=>$familyType,
                'childType'=>$childType,
                'user'=>$user
            ]);
        }
    }

    /**
     * Deletes an existing Customer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $model->delete=true;
        $model->save();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Customer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Customer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
