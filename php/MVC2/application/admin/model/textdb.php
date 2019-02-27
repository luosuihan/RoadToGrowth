<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 13:05
 */
/*require_once 'dao/DAO.php';
require_once '../../util/Util.php';*/
//new DAO();
/*$property = Util::getINIflie("../../config/db.ini");
$dao = DAO::getSingle($property);*/
//require_once '../../../framework/BModell.php';
use framework\Model;
class textdb extends Model{
    public function textdb1(){
        $sql = "select * from ecs_goods";
        $showdb = $this ->dao->selectAll($sql);
        echo'<pre>';
        var_dump($showdb);
    }
}
$tex = new textdb();
$tex ->textdb1();
