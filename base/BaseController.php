<?php
namespace redo\base;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * Base controller
 */
class BaseController extends Controller
{
  public function init()
  {
     
      parent::init();
  }
   
}
