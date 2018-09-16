<?php
    require 'ifloggedin.php';
    require 'connection.php';
    require 'imp-functions.php';
    if(isset($_GET)) {
        ?>
            <li class="uk-nav-divider border-none">sub category</li>
            <form class="filter-checkbox-form">
                <?php
                $sub_categories = json_decode(getSubtypes($connection, $_GET['parent_id']));
                foreach ($sub_categories as $x) {
                    ?>
                    <label><input class="uk-checkbox checkbox-margin-right" type="checkbox" name="subcategory" value="<?php echo $x->index ?>" checked><?php echo $x->product_type_name ?></label>
                    <?php
                }
                ?>
            </form>
        <?php
    }
    require 'disconnect.php';
?>
