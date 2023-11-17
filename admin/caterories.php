<?php
    function insert_categories($tenloai){
        $sql="insert into categories(name) values('$tenloai')";
        pdo_execute($sql);
    }

    function delete_categories($categoryID){
        $sql = "delete from categories where id =".$categoryID;
        pdo_execute($sql);
    }

    function loadall_categoriesc(){
        $sql = "select * from categoriesc order by categoryID";
        $listdanhmuc =pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_categories($categoryID){
        $sql = "select * from categories where id =".$categoryID;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_categories($categoryID,$tenloai){
        $sql="update categories set name = '".$tenloai."' where id =".$categoryID;
        pdo_execute($sql);
    }
?>