<?php



//set_include_path(implode(PATH_SEPARATOR, array(get_include_path(),'./controllers', './Models')));
//set_include_path(implode(PATH_SEPARATOR, array('./controllers', './Models')));

/*


 */
//

set_include_path("app/controllers".PATH_SEPARATOR."app/Models".PATH_SEPARATOR."system/helpers/general".PATH_SEPARATOR."system/engine".PATH_SEPARATOR."system/cartclass/cart);
spl_autoload_register();

