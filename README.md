# [DataStripper](http://www.datastripper.com)

www.datastripper.com makes is easy to analyze relative prices. 


Adding new Data:
1) Upload data in Google Fussion Tables. Ensure format of table columns.
2) Make the table public and grab the table ID
3) update chart.min.js with asset, table ID and column names.
4) update include/asset.php with assetID and assetH
5) Update .htaccess file with asset
6) update mysql phpMyAdmin with descriptions for the asset.
7) update mysql phpMyAdmin with description for datasource
8) update links and image nav bar for the asset
9) update link for dowload table for new assets added.