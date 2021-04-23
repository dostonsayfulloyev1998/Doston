<?php
require_once 'config/bootstrap/autoload.php';

use core\View;
   $list = [
           [
                'name'=>'doston',
               'age'=>23
           ],
       [
           'name'=>'sherzod',
           'age'=>24
       ],
       [
           'name'=>'said',
           'age'=>25
       ],
       [
           'name'=>'tagal',
           'age'=>26
       ],

   ];

            View::render('about',
      [
              'users'=>$list
      ]
     );
?>

</body>
</html>
