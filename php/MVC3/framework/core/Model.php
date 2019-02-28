<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 14:54
 */
//namespace home\model;
//use framework\dao\MVCDAO;
namespace framework\core;
use framework\dao\MVCDAO;
class Model
{
    protected $dao3;
    protected $true_table;
    protected $pk;
    public function __construct()
    {
        //初始化数据库
        $this -> initDAO();
        //初始化真实表名
        $this -> initTrueTable();
        $this -> findPrimary();
    }
    public function initDAO()
    {
        $option = $GLOBALS['config1'];
        $this -> dao3 = MVCDAO::getSingle($option);
    }
    public function initTrueTable()
    {
        $this -> true_table = '`'.$GLOBALS['config1']['table_prefix'].$this->logic_table.'`';
//        echo "真实表名  ".$this -> true_table;
    }
    //主键查询
    public function findPrimary()
    {
        $sql = "desc $this->true_table ";
        $result = $this -> dao3 ->selectOne($sql);
        echo'<pre>';
        var_dump($result);
        foreach ($result as $k => $v)
        {
            if ($v['key'] == 'PRI'){
                $this ->pk = $v['Field'];
            }
        }
    }
    //自动查询
    public function find($where = [],$fileds = [])
    {
        if (empty($where)){
            $str_where = '';
        }else {
            $key = array_keys($where)[0];
            $value = array_values($where)[0];
            $str_where = "WHERE `$key` = '$value'";
        }
        //查询字段
        if(empty($fileds)){
            $str_fileds = '*';
        }else{
            $filed = [];
            foreach ($fileds as $k=>$v){
//                echo ",查询字段v=   `$v`";
                $filed[] =  "`$v`";
            }
            $str_fileds = implode(',',$filed);
        }
//        $sql = "select $str_fileds from $this->true_table $str_where";
        $sql = "select * from $this->true_table ";
        return $this -> dao3 ->selectAll($sql);
    }
    //自动删除
    /*public function delete($pk_value)
    {
        $sql = "delete $this->true_table where `$this->pk`=$pk_value";
        return $this->dao3->myquery($sql);
    }*/
    //自动添加
    /*public function add($date)
    {
        $sql = "insert into $this->true_table";
        $keys  = [];
        $values = [];
        foreach ($date as $k=>$v){
            $keys[] = "`$k`";
            $values[] = "'$v'";
        }
        $fields = '('.implode(',',$keys).')';
        $sql .= $fields;
        $fields = '('.implode(',',$values).')';
        $sql .= $fields;
        return $this->dao3->myquery($sql);
    }*/
    //自动修改
    public function update()
    {

    }
}