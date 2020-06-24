#C-tool
![C-tool](https://user-images.githubusercontent.com/61730661/83403234-4116d180-a443-11ea-9f2a-211b1c12c8cd.jpg)

## 🌐 App URL
### **IP：000.000.00.00**

## 概要



### 搭載予定機能
* 投稿機能(画像、テキスト）、詳細、編集、削除
###
* ページネーション、検索機能

## 使用した技術
* 言語:  HTML/CSS/PHP/SQL
* FW:  Laravel
* DB:  phpMyAdmin (MAMP)
* heroku 



# C-tool DB設計
## usersテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false|
|password|string|null: false|
|Column|Type|Options|

## postテーブル
|Column|Type|Options|
|------|----|-------|
| id | bigIncrements | NO | NULL |
| user_id | int(11) | NULL | |
| title | varchar(255) | NULL | |
| url | longText | NULL | |
| image | string |     |
|user_id|integer|null: false, foreign_key: true|
| message | varchar(255) | NO | | NULL | |
| created_at | timestamp | YES | | NULL | |
| updated_at | timestamp | YES | | NULL | |
