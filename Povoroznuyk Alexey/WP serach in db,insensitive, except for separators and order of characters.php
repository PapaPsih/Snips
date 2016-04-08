 if (!$_POST['s']=="")
    {
        $result_mass = split ('[ -.:+\/]', $_POST['s']);

        $mass = $result_mass;
        $split = array();
        foreach ($mass as $i)
            $split = array_merge($split, str_split($i));

        global $wpdb;

        foreach ($split as $num=>$s)
        {
            if ($num == 0)
            $query = "SELECT post_id FROM wp_postmeta WHERE meta_key='_sku' ";

            $query .= "AND meta_value LIKE '%" . $s  . "%' ";
        }

        $result = $wpdb->get_results($query);