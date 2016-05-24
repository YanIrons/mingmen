<?php 
namespace Home\Controller;
use Think\Controller;
class RecommendController extends Controller {
	public function index(){
		//创建对象
		$recommend = M('recommend');

		/*echo $recommend->_sql();
		echo $recommend->getLastSql();*/

		//获取每页显示的数量
		// $num = !empty($_GET['num']) ? $_GET['num'] : 2;

		// //获取关键字
		// if (!empty($_GET['keyword'])) {
		// 	//有关键字
		// 	$where = "work like '%".$_GET['keyword']."%'";
		// }else{
		// 	$where = '';
		// }

		// //查询满足要求的总记录数
		$count = $recommend->where($where)->count();
		// //实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		// //获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$recommends = $recommend->where($where)->limit($limit) -> order(p,3) ->select();
		// var_dump($recommends);

		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('recommends',$recommends);
		$this->assign('pages',$pages);
		//解析模板
		$this->display();
	}

	public function ajax(){
        //创建表对象
        $recommend = M('recommend');
        
        // $res = $recommend->save($_POST);
        $recommends = $recommend -> page($_POST['p'],6) -> order('id') ->select();
        //json_encode($recommends);
       
       //向ajax返回数据
        if ($recommends) {
            echo json_encode($recommends);
        }else{
            echo 0;
        }
    } 

    public function intro(){
    	// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$recommend = M('recommend');
		//查询当前用户的数据
		$info = $recommend->find($id);
		// var_dump($info);die;
		
		$res = $recommend->find($id);
		// var_dump($info);
		$res = htmlspecialchars_decode($res['r_msg']);


		$this->assign('info',$info);
		$this->assign('res',$res);


    	//解析模板
    	$this->display();
    }

    public function ajaxadd(){
        //创建表对象
        $recommend = M('recommend');
        //获取上传评论时间
		$_POST['rectime'] = date('Y/m/d H:i:s');
        
        $res = $resume->save($_POST);
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    } 

 }
?>