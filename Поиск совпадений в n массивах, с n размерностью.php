 $results = array();

               if (count($result) > 1)
               {
               foreach ($result as $num => $one_res)
               {
                   for ($i=$num; $i<count($result); $i++)
                   {
                       if ($one_res == $result[$i])
                           continue;
                       foreach ($one_res as $one)
                       {
                           foreach ($result[$i] as $two)
                           {
                               if ($one == $two)
                                   $results[] = $one;
                           }
                       }
                   }
               }
               $result = $results;
               }
               else
                   $result = $results[0];