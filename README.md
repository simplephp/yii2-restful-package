->**Yii2-restful 基础包**


----------

> 基础包

 1. 基础 restful 功能
 2. 系统、自定义抛出异常同一返回
 3. 应答格式协商（缺省支持 JSON 和 XML）
 4. 基础认证
 5. 访问速度限制
 6. 自定义action
 7. 未修改底层框架代码，保持和官网框架一致，便于升级。下载即可用
 
 

----------


> 初始化
> 

 1. cd $your_project_file_path && yii migrate console\migrations\m130524_201442_init.php
 2. 没有写数据库数据初始化的 migrate ，自行添加数据
 
 

> 效果
	> 

![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_1.jpg "访问不存在的action")
![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_2.jpg "访问不存在的module")
![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_3.jpg "访问公共不受限的action")
![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_4.jpg "基础认证，访问action")
![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_5.jpg "基础认证成功，且访问速度正常，获取user数据")
![Alt text](https://github.com/simplephp/yii2-restful-package/blob/master/yii2_6.jpg "访问速度限制")
 

> 写到最后
	> 

 Yii2 restFul 基础包，开箱即用，不在个位看官面前班门弄斧，学海无涯，so 写代码去吧
