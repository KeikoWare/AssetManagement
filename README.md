# AssetManagement
Simple to use asse management interface using LAMP

Install debian server - only option is "standard utilities"

Install git-core and clone this rep.
$ sudo apt-get install git-core
$ git-clone https://github.com/keikoware/AssetManagement

An automated installscript will do the rest. Clone installAmp.sh
$ cd Assetmanagment
$ sudo installAM.sh


Create MySQL user:
uid: assetmanager
pwd: 4t6ZsSqZp5tceqKU

And create db and assign all privileges 
db_name: assetmanager 

- installer
	- setting up DB
	- adding first admin user
	- disabling installer  
- user control
	- admin
	- author
	- reader
- assetmanager
	- list assets / search
		- add and remove coloums from view
	- add new asset
		- add interface
	- update asset
	- delete asset 
	
	- locations
	- vendors
	- suppliers
	
- reporting
	- assets running out of support / warranty
	- assets with poor data quality 
	