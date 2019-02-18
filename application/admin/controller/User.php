<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2018 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace app\admin\controller;

use app\service\IntegralService;
use app\service\UserService;

/**
 * 用户管理
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
class User extends Common
{
	/**
	 * 构造方法
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-03T12:39:08+0800
	 */
	public function __construct()
	{
		// 调用父类前置方法
		parent::__construct();

		// 登录校验
		$this->Is_Login();

		// 权限校验
		$this->Is_Power();
	}

	/**
     * [Index 用户列表]
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  0.0.1
     * @datetime 2016-12-06T21:31:53+0800
     */
	public function Index()
	{
		// 参数
		$params = input();

		// 条件
		$where = UserService::UserListWhere($params);

		// 总数
		$total = UserService::UserTotal($where);

		// 分页
		$number = MyC('admin_page_number', 10, true);
		$page_params = array(
				'number'	=>	$number,
				'total'		=>	$total,
				'where'		=>	$params,
				'page'		=>	isset($params['page']) ? intval($params['page']) : 1,
				'url'		=>	MyUrl('admin/user/index'),
			);
		$page = new \base\Page($page_params);

		// 获取管理员列表
		$data_params = [
			'where'		=> $where,
			'm'			=> $page->GetPageStarNumber(),
			'n'			=> $number,
		];
		$data = UserService::UserList($data_params);

		// 性别
		$this->assign('common_gender_list', lang('common_gender_list'));

		// Excel地址
		$this->assign('excel_url', MyUrl('admin/user/excelexport', $params));

		$this->assign('params', $params);
		$this->assign('page_html', $page->GetPageHtml());
		$this->assign('data', $data['data']);
		return $this->fetch();

	}

	/**
	 * [ExcelExport excel文件导出]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2017-01-10T15:46:00+0800
	 */
	public function ExcelExport()
	{
		// 条件
		$where = UserService::UserListWhere(input('post.'));

		$data_params = [
			'where'		=> $where,
			'm'			=> 0,
			'n'			=> 100000,
		];
		$data = UserService::UserList($data_params);

		// Excel驱动导出数据
		$excel = new \base\Excel(array('filename'=>'user', 'title'=>lang('excel_user_title_list'), 'data'=>$data['data'], 'msg'=>'没有相关数据'));
		return $excel->Export();
	}

	/**
	 * [SaveInfo 用户添加/编辑页面]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-14T21:37:02+0800
	 */
	public function SaveInfo()
	{
		// 参数
		$params = input();

		// 用户编辑
		if(!empty($params['id']))
		{
			$data_params = [
				'where'		=> ['id'=>$params['id']],
				'm'			=> 0,
				'n'			=> 1,
			];
			$data = UserService::UserList($data_params);
			if(empty($data['data'][0]))
			{
				return $this->error('用户信息不存在', MyUrl('admin/user/index'));
			}
			$data['data'][0]['birthday_text'] = empty($data['data'][0]['birthday']) ? '' : date('Y-m-d', $data['data'][0]['birthday']);
			$this->assign('data', $data['data'][0]);
		}

		// 性别
		$this->assign('common_gender_list', lang('common_gender_list'));

		// 参数
		$this->assign('params', $params);

		return $this->fetch();
	}


	/**
	 * [Save 用户添加/编辑]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-14T21:37:02+0800
	 */
	public function Save()
	{
		// 是否ajax
		if(!IS_AJAX)
		{
			return $this->error('非法访问');
		}

		// 开始操作
		$params = input('post.');
		$params['admin'] = $this->admin;
		return UserService::UserSave($params);
	}

	/**
	 * [Delete 用户删除]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-15T11:03:30+0800
	 */
	public function Delete()
	{
		// 是否ajax
		if(!IS_AJAX)
		{
			return $this->error('非法访问');
		}

		// 开始操作
		$params = input('post.');
		$params['admin'] = $this->admin;
		return UserService::UserDelete($params);
	}
}
?>