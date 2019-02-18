# ShopXO 国内领先企业级B2C免费开源电商系统！
* 求实进取、创新专注、自主研发、国内领先企业级B2C电商系统解决方案。
* 遵循Apache2开源协议发布，并提供免费使用。
* PC+WAP、支付宝小程序、微信小程序、百度小程序。

### 传送门
* 官网地址：http://shopxo.net/
* 演示地址：http://demo.shopxo.net/ （管理账户/密码可进入官网查看）
* 支付宝小程序：http://shopxo.net/alipay.html （已发布）
* 微信小程序：https://shopxo.net/weixin.html （已发布）

### 小程序体验码
![微信小程序](https://images.gitee.com/uploads/images/2019/0125/111858_88b945a6_488475.jpeg "微信小程序")

### 安装教程
* v1.2.0安装教程：https://ask.shopxo.net/article/5

### 官方QQ群
* 群号：833531593
* 答案：shopxo.net

### 源代码平台
* Github：https://github.com/gongfuxiang/shopxo
* 码云/开源中国：https://gitee.com/gongfuxiang/shopxo
* 腾讯云开发者：https://dev.tencent.com/u/gongfuxiang/p/shopxo/git

### 扩展性
* 独立模块式开发，完善的注释，易扩展。

### 安全性
* 防止sql注入，代码高安全性。

### 轻量级，高性能
* 支持多数据库，读写分离，高并发，内置缓存机制。

# 后端基于ThinkPHP v5.1
ThinkPHP是一个快速、简单的基于MVC和面向对象的轻量级PHP开发框架，遵循Apache2开源协议发布，从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，尤其注重开发体验和易用性，并且拥有众多的原创功能和特性，为WEB应用开发提供了强有力的支持。

# 前端基于AmazeUI v2.7.2
##### 组件丰富，模块化
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
##### 本地化支持
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;相比国外框架，Amaze UI 关注中文排版，根据用户代理调整字体，实现更好的中文排版效果；兼顾国内主流浏览器及 App 内置浏览器兼容支持。
##### 轻量级，高性能
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amaze UI 面向 HTML5 开发，使用 CSS3 来做动画交互，平滑、高效，更适合移动设备，让 Web 应用更快速载入。

# 小程序图片展示（微信、支付宝）
![小程序](https://images.gitee.com/uploads/images/2019/0111/104727_fb5ce133_488475.jpeg "xcx-1500.jpg")

# PC端图片展示
![电脑端](https://images.gitee.com/uploads/images/2019/0111/104442_0a307119_488475.gif "1547174456822.gif")

# 后台管理图片展示
![后台管理](https://images.gitee.com/uploads/images/2019/0111/104511_63926cf8_488475.gif "1547174286447.gif")

# 项目结构
```
shopxo
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─module_name        模块目录
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行定义文件
│  ├─common.php         公共函数文件
│  └─tags.php           应用行为扩展定义文件
│
├─config                应用配置目录
│  ├─module_name        模块配置目录
│  │  ├─database.php    数据库配置
│  │  ├─cache           缓存配置
│  │  └─ ...            
│  │
│  ├─app.php            应用配置
│  ├─cache.php          缓存配置
│  ├─cookie.php         Cookie配置
│  ├─database.php       数据库配置
│  ├─log.php            日志配置
│  ├─session.php        Session配置
│  ├─template.php       模板引擎配置
│  └─trace.php          Trace配置
│
├─route                 路由定义目录
│  ├─route.php          路由定义
│  └─...                更多
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
```

# 功能简介
### 后端功能列表
```
后端配置
站点配置
    > 站点设置
    > 短信设置
    > 邮箱设置
    > SEO设置
权限控制
    > 管理员
    > 角色管理
    > 权限分配
用户管理
    > 用户管理
商品管理
    > 商品管理
    > 商品分类
订单管理
    > 订单管理
问答留言
    > 问答留言
网站管理
    > 导航管理
    > 自定义页面
    > 友情链接
    > 主题管理
    > 首页轮播
    > 筛选价格
品牌管理
    > 品牌管理
    > 品牌分类
手机端管理
    > 基础配置
    > 首页导航
    > 轮播管理
支付宝小程序
    > 基础配置
    > 小程序源码包
支付宝生活号（v1.1.0）
    > 生活号管理
    > 生活号分类
    > 消息管理
    > 菜单管理
    > 批量上下架
    > 用户管理
文章管理
    > 文章管理
    > 文章分类
数据管理
    > 消息管理
    > 支付日志
    > 用户积分日志
资源管理
    > 地区管理
    > 快递管理
    > 支付方式
工具
    > 缓存管理
```

### 前端
```
首页
所有分类
商品搜索
商品详情
自定义页面
文章
购物车
订单确认页
用户中心
    > 聚合内容
交易管理
    > 订单管理
        > 订单详情
        > 评论页
    > 我的收藏
资料管理
    > 个人资料
    > 我的地址
    > 安全设置
    > 我的消息
    > 我的积分
    > 我的足迹
    > 安全退出
```

# 如何贡献
非常欢迎您对ShopXO的开发作出贡献！
你可以选择以下方式向ShopXO贡献：
- [Github - 发布issue进行问题反馈和建议](https://github.com/gongfuxiang/shopxo/pulls)
- [码云/开源中国 - 发布issue进行问题反馈和建议](https://gitee.com/gongfuxiang/shopxo/pulls)
- 通过Pull Request提交修复
- 完善我们的文档和例子

# 开源协议
Apache License Version 2.0 see http://www.apache.org/licenses/LICENSE-2.0.html

# 更新日志
更多细节参阅 <a href="changelog.txt">changelog.txt</a>