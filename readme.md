## 说明：
  项目地址：www.noirot.com 如果访问不了那说明DNS还没解析好。。。 <br>请使用 http://http://45.76.218.21 查看
 
## 架设服务器环境：
Ubuntu<br>
NGINX：1.4.6<br>
MySQL：5.7.23<br>
PHP：7.1.20<br>
composer：1.7.2<br>

## 安装
1.首先确认composer Git 已经备好 <br>
然后clone下来 ： 
```
git clone git@github.com:w756280309/Laravel-new-one.git
```
2.安装依赖
```
composer install
```
3.获取base64的 app秘钥  
```
php artsian key:generate
```
4.用户注册验证邮箱需要用到邮件发送，所以需要配置邮件服务,我这里使用的是`sendcloud`

```
MAIL_DRIVER=
SEND_CLOUD_USER=
SEND_CLOUD_KEY=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```
5.然后就可以在本地试试看了:laughing:！~~~~~~
