<?php 
    class Menu extends Db{

        function main_menu($parent_id=0, $sub=''){
            $icon = '';
            $sql = 'SELECT * from menu where parent='.$parent_id;
            $stmt = $this->query($sql);
            $row = $this->resultSet();

            if ($sub == true) {
                $icon = 'arrow';
            }
            
            if ($this->rowCount() > 0) {
                foreach ($row as $key => $value) {
                    $this->set_html($value, $icon);
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

        function set_html($menu, $icon){

            if ($this->sub_menu($menu['id']) > 0) {
                if ($menu['parent'] == 0) {
                    $icon = 'arrow-down';
                }else{
                    $icon = 'arrow';
                }
            }else{
                $icon = '';
            }

            echo '<li><a href="#" class='.$icon.'>'.$menu['menu_name'].'</a>';
            if($this->sub_menu($menu['id']) > 0 )
            {   
                echo '<ul>';
                    $this->main_menu($menu['id'],true);
                echo '</ul>';
            }
            echo '</li>';
            
        }

        public function show(){
            echo $this->main_menu();
        }


    }