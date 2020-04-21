<?php 
    class Menu extends Db{

        function main_menu($parent_id=0){
            $sql = 'SELECT * from menu where parent='.$parent_id;
            $stmt = $this->query($sql);
            $row = $this->resultSet();

            if ($this->rowCount() > 0) {
                foreach ($row as $key => $value) {
                    $this->set_html($value);
                }
            }
        }

        function sub_menu($parent_id){
            $sql = 'SELECT * from menu where parent='.$parent_id;
            $stmt = $this->query($sql);
            $row = $this->resultSet();
            $rowCount = $this->rowCount();
            return $rowCount;
        }

        function set_html($menu){
            $count = $this->sub_menu($menu['id']);
            if ($count > 0) {
                if ($menu['parent'] == 0) {
                    $icon = 'arrow-down';
                }else{
                    $icon = 'arrow';
                }
                echo '<li><a href="#" class='.$icon.'>'.$menu['menu_name'].'</a><ul>';
                    $this->main_menu($menu['id']);
                echo '</ul></li>';
            }else{
                echo '<li><a href="#">'.$menu['menu_name'].'</a></li>';
            }
            
        }

        public function show(){
            echo $this->main_menu();
        }
    }