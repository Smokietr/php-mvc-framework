<?php



//set_include_path(implode(PATH_SEPARATOR, array(get_include_path(),'./controllers', './Models')));
//set_include_path(implode(PATH_SEPARATOR, array('./controllers', './Models')));

/*


 */
set_include_path("app/controllers".PATH_SEPARATOR."app/Models");
spl_autoload_register();

