## GS-SIP
This web application creates configurations files for Grand Stream Sip Phones based on most commonly use and mutable configurations for every department.

### Laravel Web App Development
This project id build using Larave 6x+ and we will create web and api both from same project.

For GUI we will use tailwindcss to give it design for web and 
we build this project using React and vue both.


### Set up new Laravel Project

We asume you have composer installed and redy to use. We Will use Laravel Installer

#### via Laravel Installer
First, download the Laravel installer using Composer:
```shell
$ composer global require laravel/installer
```

Make sure to place Composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

* _macOS and GNU / Linux Distributions:  **$HOME/.composer/vendor/bin**_
* _Windows: **%USERPROFILE%\AppData\Roaming\Composer\vendor\bin**_

Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel's dependencies already installed:

```shell
$ laravel new gssip
```

### Via Composer Create-Project
Alternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:
```shell
$ composer create-project --prefer-dist laravel/laravel blog
```

### Local Development Server
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

```shell
$ php artisan serve
```


### sipphones database Tables
Our Database tables are given below.


#### account_settings

|#	|Name				|Type			|Null	|Default| 	Extra
|---|-------------------|---------------|-------|-------|---------------
| 1	|id					|int(11)		|No		|None	|Primary, AUTO_INCREMENT	
| 2	|model_id			|int(11)		|No		|None	|		
| 3	|mac				|varchar(50)	|Yes	|NULL	|	Index	
| 4	|account_active		|varchar(1)		|Yes	|NULL	|		
| 5	|account_name		|varchar(150)	|Yes	|NULL	|		
| 6	|sip_server			|varchar(50)	|No		|None	|		
| 7	|sip_user			|varchar(150)	|Yes	|NULL	|		
| 8	|auth_id			|varchar(150)	|Yes	|NULL	|		
| 9	|auth_password		|varchar(250)	|Yes	|NULL	|	
| 10|acc_name			|varchar(150)	|Yes	|NULL	|		
| 11|voicemail_id		|varchar(30)	|Yes	|NULL	|		
| 12|cf_created			|varchar(1)		|Yes	|NULL	|		
| 13|date_created		|date			|No		|None	|		
| 14|flag				|varchar(1)		|No		|0		|	



#### advance_settings

| #	|Name				|Type			|Null	|Default| 	Extra
|---|-------------------|---------------|-------|-------|-------------
| 1	|mac	  			|varchar(50)	|No		|None	|	Primary	
| 2	|vlan_tag			|varchar(50)	|Yes	|NULL	|		
| 3	|priority_tag		|varchar(50)	|Yes	|NULL	|		
| 4	|pc_vlan_tag		|varchar(50)	|Yes	|NULL	|		
| 5	|pc_priority_tag	|varchar(50)	|Yes	|NULL	|		
| 6	|host_name			|varchar(50)	|Yes	|NULL	|		
| 7	|bg_label			|int(11)		|No		|0		|	
| 8	|long_label			|int(11)		|Yes 	|0		|



#### audio_settings

| #	|Name				|Type			|Null	|Default|	Extra
|---|-------------------|---------------|-------|-------|-----------
| 1	|mac				|varchar(50)	|No		|None	| Primary			
| 2	|fcodec				|varchar(50)	|No		|None	|		
| 3	|scodec				|varchar(50)	|No		|None	|		
| 4	|tcodec				|varchar(50)	|No		|None	|		
| 5	|handsetgain		|int(11)		|No		|0		|



#### device_admin

|#	|Name				|Type			|Null	|Default |Extra
|---|-------------------|---------------|-------|--------|---------
|1	|mac 				|varchar(50)	|No		|None	 | Primary		
|2	|admin_pass			|varchar(200)	|No		|None	 |



#### feature_settings

|#	|Name					|Type			|Null	|Default| Extra
|---|-----------------------|---------------|-------|-------|-------
|1	|mac 					|varchar(50)	|No		|None	|Primary	
|2	|a_transfer				|varchar(50)	|Yes	|NULL	|		
|3	|enable_cf				|varchar(50)	|Yes	|NULL	|		
|4	|fs_date				|varchar(10)	|Yes	|NULL	|		
|5	|rc_dnd					|varchar(50)	|Yes	|NULL	|		
|6	|disable_call_waiting 	|varchar(1)		|Yes	|NULL	|		
|7	|dnd_on					|varchar(3)		|Yes	|NULL	|		
|8	|dnd_off				|varchar(3)		|Yes	|NULL	|		
|9	|VPK_transfer			|int(11)		|No		|0		|	
|10	|cf_on					|varchar(3)		|Yes	|NULL	|		
|11	|cf_off					|varchar(3)		|Yes	|NULL	|		
|12	|incoming_call_popup	|varchar(1)		|No		|0		|		



#### mpk_details

|#	|Name			|Type			|Null	|Default| 	Extra
|---|---------------|---------------|-------|-------|--------------
|1	|id 			|int(11)		|No		|None	| Primary, AUTO_INCREMENT	
|2	|mac			|varchar(50)	|No		|None	|		
|3	|mode			|varchar(50)	|No		|None	|		
|4	|account		|varchar(50)	|Yes	|NULL	|		
|5	|mpk_description|varchar(150)	|Yes	|NULL	|	
|6	|mpk_value		|varchar(50)	|Yes	|NULL	|		



#### phone_macs

|#	Name				|Type			|Null	|Default| 	Extra
|-----------------------|---------------|-------|-------|--------------
|1	id 					|int(11)		|No		|None	| Primary, AUTO_INCREMENT	
|2	model_id			|int(11)		|No		|None	|		
|3	model_mac 			|varchar(50)	|No		|None	|	Index



#### phone_models

|#	|Name				|Type			|Null	|Default |	Extra
|---|-------------------|---------------|-------|--------|--------------
|1	|id 				|int(11)		|No		|None	 | Primary, AUTO_INCREMENT	
|2	|phone_name			|varchar(30)	|No		|None	 |		
|3	|mp_keys			|varchar(1)		|No		|None	 |	



#### sip_server

|#	|Name				|Type			|Null	|Default| 	Extra
|---|-------------------|---------------|-------|-------|---------------
|1	|id 				|int(11)		|No		|None	|Primary, AUTO_INCREMENT	
|2	|sip_ip 			|varchar(50)	|Yes	|NULL	| Index
|3	|server_type		|varchar(1)		|Yes	|NULL	|	



#### web_services

|#	|Name				|Type			|Null	|Default| 	Extra
|---|-------------------|---------------|-------|-------|----------
|1	|mac 				|varchar(50)	|No		|None	|	Primary		
|2	|weather_update		|varchar(50)	|Yes	|NULL	|		
|3	|currency_exchange	|varchar(50)	|No		|None	|		
|4	|frimware_upgrade	|varchar(200)	|Yes	|NULL	|	
|5	|connection_type	|int(11)		|Yes	|NULL	|




------------------------------------------------------------------------

### Create sipphones Migration 

We will create sipphones migration using following command
```shell
$ php artisan make:migration create_sipphones_table
```
we can create single migration file for all tables and we also can create different files for different tables in data base depends on preferences.

#### Create Migration for account_settings
```shell
$ php artisan make:migration create_account_settings_table
```

```php 
class CreateAccountSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_settings');
    }
}
```

#### Create Migration for advance_settings
```shell
$ php artisan make:migration create_advance_settings_table
```

#### Create Migration for audio_settings
```shell
$ php artisan make:migration create_audio_settings_table
```

#### Create Migration for device_admin
```shell
$ php artisan make:migration create_device_admin_table
```

#### Create Migration for feature_settings
```shell
$ php artisan make:migration create_feature_settings_table
```

#### Create Migration for mpk_details
```shell
$ php artisan make:migration create_mpk_details_table
```

#### Create Migration for phone_macs
```shell
$ php artisan make:migration create_phone_macs_table
```

#### Create Migration for phone_models
```shell
$ php artisan make:migration create_phone_models_table
```

#### Create Migration for sip_server
```shell
$ php artisan make:migration create_sip_server_table
```

#### Create Migration for web_services
```shell
$ php artisan make:migration create_web_services_table
```


#### Adding single or multiple columns in existing table.

Create new migration as follows:
```shell
$ php artisan make:migration add_color_to_sip_server
```
This command will create a migration class in ***[database/migrations]***  folder and will look like this.

```php
class AddColorToSipServer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sip_server', function (Blueprint $table) {
            // add required column here
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sip_server');
    }
}

```

required field add in following code
```php
class AddColorToSipServer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sip_server', function (Blueprint $table) {
           
		   //you can add multiple tables
            $table->string('color');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sip_server');
    }
}
```

Finally, you need to run the following command to migrate that.

```shell
php artisan migrate
```
