CREATE OR REPLACE VIEW  items1view AS
SELECT items.* , category.* FROM items 
INNER JOIN  categories on  items.items_cat = category.category_id ; 



CREATE OR REPLACE VIEW myfavorie AS
SELECT favorie.* , prof.* , users.usersid FROM favorie 
INNER JOIN users ON users.usersid  = favorie.favorie_usersid
INNER JOIN prof ON prof.prof_id  = favorie.favorie_profid
