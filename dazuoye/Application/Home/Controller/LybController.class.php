<?php
namespace Home\Controller;
use Think\Controller;
class LybController extends Controller {
	//添加个人信息页面
	public function info_add(){
		
		$this->checkLogin();	
		$this->display();
	}
	
	//把个人信息写入数据库
	public function info_add_pass(){
		$this->checkLogin();
		$model=M('info');	
		$data=array(
		'username'=>I('username'),
		'name'=>I('name'),
		'qq'=>I('qq'),
		'iphone'=>I('iphone'),
		'gender'=>I('gender'),
		'age'=>I('age'),
		'add'=>I('add'),
		'signature'=>I('signature')
		);
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U('info_select'));
			}else{
			$this->error('添加失败',U('info_select'));	
				}
	}
	 public function info_select(){
		 $this->checkLogin();
		$model=M('info');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		
		$this->display();			//显示数据
    }	
	//查询所要修改的个人数据
	public function info_modify(){
		$this->checkLogin();
		$id=I('id');
		$model=M('info');
		$data=$model->where(array('id'=>$id))->find();
		$this->assign('data',$data);
		$this->display();
	}
	//修改个人数据
	public function info_modify_pass(){
		 $this->checkLogin();
		$id=I('id');
		$model=M('info');
		$data=array(
		'username'=>I('username'),
		'name'=>I('name'),
		'qq'=>I('qq'),
		'iphone'=>I('iphone'),
		'gender'=>I('gender'),
		'age'=>I('age'),
		'add'=>I('add'),
		'signature'=>I('signature')
		);
		if($model->where(array('id'=>$id))->save($data)){
			$this->success('修改成功',U('index'));
			}else{
			$this->error('修改失败',U('index'));
			}
	}
	//删除数据
	public function info_delete(){
		 $this->checkLogin();
		$model=M('info');
		$id=I('id');
		if($model->where(array('id'=>$id))->delete())
		{
			$this->success('删除成功',U('info_select'));
			}else{
			$this->error('删除失败',U('info_select'));
				}
	}
	//显示留言页面
	public function liuyan_select(){
		$this->checkLogin();
		$model=M('liuyanbiao');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);//分配数据
		$this->assign('username',session('username'));
		$this->assign('time',time());
		//分页
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		
		$this->display();
		}
		//留言删除
	public function liuyan_delete(){
		$this->checkLogin();
		$model=M('liuyanbiao');
		$liuyan=I('liuyan');	
		$id=I('id');
		if($model->where(array('id'=>$id))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U('liuyan_select'));
			}else{
			$this->error('删除失败',U('liuyan'));
				}
		}
	//添加留言数据到数据库中
	public function liuyan_add_pass(){
		$this->checkLogin();
		$liuyan=I('liuyan');
		$username=I('username');
		$data=array('username'=>session('username'),'liuyan'=>$liuyan,
		'time'=>time());
		$model=M('liuyanbiao');
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U('Lyb/liuyan_select'));
			}else{
				$this->error('添加失败',U('Lyb/liuyan'));
				}
		}
	public function index(){
		$this->checkLogin();
		$this->display();
		}
		//显示注册页面
	public function register(){
		$this->display();
	}
	///把注册信息添加到数据库中
		public function register_pass(){
			
			$username=I('username');
			if(empty($username)){
				$this->error('账号不能为空！');
				}
			$password=I('password');
			if(empty($password)){
				$this->error('密码不能为空！');
				}
			$model=M('username');
			$data=array(
			'username'=>$username,
			'password'=>$password,
			);
		   if($model->create($data)&&$model->add()){
			   $this->success('注册成功',U('login'));
			   }else{
				   $this->error('注册失败,请重新注册',U('register'));
				   }
			}
	//登录模块
	public function loginCheck(){
		$username=I('username');
		if(empty($username)){
			$this->error('账号不能为空！');
			}
		$password=I('password');
		if(empty($password)){
			$this->error('密码不能为空！');
			}
		$model=M('username');
		if($model->where("username='%s' AND password='%s'",$username,$password)->find()){
				session("username",$username);
				session("ischecked",'yes');
				$this->redirect('Lyb/index');
				}else{
					$this->error('登陆失败！',U('Lyb/login'));
					}
		}
	private function checkLogin(){
		if(!session('username')||session('ischecked')!='yes'){
			$this->error('请登录',U('Lyb/login'));
			}
		}
		//退出登录
		public function logout(){
			if(!session('username')||session('ischecked')!='yes'){
				$this->error('请登录！',U('Lyb/login'));
				}else{
					session_destroy();
					$this->success('退出成功',U('Lyb/login'));
					}
			}
}