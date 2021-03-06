<?php

namespace app\controllers;

use app\models\CliSector;
use app\models\ManEvento;
use app\models\ManEventoSearch;
use app\models\ManEventoSeguimiento;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ManEventoController implements the CRUD actions for ManEvento model.
 */
class ManEventoController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                //'eliminarSeguimientoAjax',
                ],
            ],
        ];
    }

    /**
     * Lists all ManEvento models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ManEventoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ManEvento model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                        'model' => $this->findModel($id),
            ]);
        } else {
            return $this->render('view', [
                        'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new ManEvento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ManEvento();
        $model->fecha = date("Y-m-d H:i:s");
        $model->estado = "1";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['man-evento/index']);
        } else {

            $cli_sectores = CliSector::find()->all();

            syslog(LOG_NOTICE, print_r($cli_sectores, true));

            return $this->renderPartial('create', [
                        'model' => $model, 'cli_sectores' => $cli_sectores
            ]);
        }
    }

    /**
     * Updates an existing ManEvento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model->estado = "1";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['man-evento/index']);
        } else {
            $cli_sectores = CliSector::find()->all();

            return $this->renderPartial('update', [
                        'model' => $model, 'cli_sectores' => $cli_sectores
            ]);
        }
    }
    
    

    /**
     * Deletes an existing ManEvento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {


        $model = $this->findModel($id);
        $model->baja_fecha = date("Y-m-d H:i:s");
        $model->load(Yii::$app->request->post()) && $model->save();
          //  return $this->redirect(['index']);
        

            return $this->redirect(['index']);
       
    }

    /**
     * Finds the ManEvento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ManEvento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ManEvento::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////*AJAX *////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////

    public function actionNewseguimiento($man_evento_id) {//Agrego un nuevo seguimiento
        $model = new ManEventoSeguimiento();

        $model->fecha = date("Y-m-d H:i:s");
        $model->cli_profesional_actuante_id = 2;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['man-evento/newSeguimiento']);
            return $this->redirect(['view', 'id' => $man_evento_id]);
        } else {

            $model->man_evento_id = $man_evento_id;
            return $this->renderPartial('newSeguimiento', [
                        'model' => $model
            ]);
        }
    }

    public function actionIndexSeguimientosForEventoAjax($id) {//Agrego y listo el nuevo seguimiento
        $modelos = ManEventoSeguimiento::find()->where(['man_evento_id' => $id])->All();
        return $this->render('indexSeguimientosForEventoAjax', ['modelos' => $modelos]);
    }

    public function actionEliminarSeguimientoAjax($id) {//Elimino un seguimiento
        if (($model = ManEventoSeguimiento::findOne($id)) !== null) {
            $model->delete();
        }
        return;
    }
    
  /*  
    public function actionActualizarSeguimiento($id) {
        
        $model= ManEventoSeguimiento::find()->where(['man_evento_id' => $id])->All();
        
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['man-evento/index']);
        } else {
            return $this->render('update', [
                        'model' => $model
            ]);
        }
    }*/
    
    public function actionActualizarSeguimientoAjax($id) {
            $model = $this->loadModelSeguimiento($id);
            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['ManEventoSeguimiento'])) {
                $model->attributes = $_POST['ManEventoSeguimiento'];
                if ($model->save()) {
                    if (isset($_POST['ManEvento'])) {
                        $model_evento = $model->man_evento;
                        $model_evento->estado = $_POST['ManEvento']['estado'];
                        if($model_evento->estado == 5){
                            $model_evento->fecha_finalizacion = date("d/m/Y H:i:s", strtotime($model->fecha));
                            $model_evento->fecha_finalizacion_real = date("d/m/Y H:i:s");
                        }
                        if($model_evento->save()){
                            echo "";
                            return;
                        }else{
                            throw new HttpException(500, 'Problemas al actualizar la incidencia');
                        }
                    }
                }
            }
            return $this->renderPartial('_form_seguimiento', array('model' => $model));
    }
    
    public function loadModelSeguimiento($id) {
        $model = ManEventoSeguimiento::findOne($id);   
        if ($model === null)
            throw new HttpException(404, 'The requested page does not exist.');
        return $model;
    }
    
    
   
}
